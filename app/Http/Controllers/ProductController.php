<?php
namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function __construct(){
        $this->user = \Auth::user();
    }
    ///
    ///
    // product page
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }
    ///
    ///
    // product details page
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    ///
    ///
    //search page
    function search(Request $request)
    {
        $data = Product::where('name', 'like', '%' . $request->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }
    ///
    ///
    //add to cart
    function addToCart(Request $request)
    {
        $user = \Auth::user();

        if(!$user) {
            return redirect()->route('login');
        }


            $cart = new Cart;
            $cart->userID = $user->id;
            $cart->productID = $request->productID;
            $cart->save();
            return redirect()->route('home')
            ;

    }
    ///
    ///
    //count cart item
    static function cartItem()
    {
        $user = \Auth::user();
        $userId = $user->id;
        return Cart::where('userID', $userId)->count();
    }
    ///
    ///
    //// cart list
    function cartList()
    { $user = \Auth::user();
        $userId = $user->id;
        $data =   DB::table('cart')
            ->join('products', 'cart.productID', 'products.id')
            ->select('products.*', "cart.id as cartID")
            ->where('cart.userID', $userId)
            ->get();
        return view('cartList', ['products' => $data]);
    }
    ///
    ///
    ////  remove cart item
    function removeItem($id)
    {
        Cart::destroy($id);
        return redirect('/cartList');
    }
    ///
    ///
    // order now
    function orderNow()
    {
        $user = \Auth::user();
        $userId = $user->id;
        $data =   DB::table('cart')
            ->join('products', 'cart.productID', 'products.id')
            ->where('cart.userID', $userId)
            ->sum('products.price');
        return view('orderNow', ['total' => $data]);
    }
    ///
    ///
    /// placing final order
    function orderPlace(Request $request)
    {
        $user = \Auth::user();
        $userId = $user->id;
        $allItem = Cart::where('userID', $userId)->get();
        foreach ($allItem as $item) {
            $order = new Order;
            $order->productId = $item->productID;
            $order->userId = $item->userID;
            $order->address = $request->address;
            $order->status = "pending";
            $order->paymentMethod = $request->paymentMethod;
            $order->paymentStatus = "pendind";
            $order->date = Carbon::now();
            $order->save();
        }
        Cart::where('userId', $userId)->delete();
        return redirect('/');
    }
    ///
    //// viewing order
    ///
    function myOrders()
    {
        $user = \Auth::user();
        $userId = $user->id;
        $orders = DB::table('orders')
            ->join('products', 'orders.productID', 'products.id')
            ->where('orders.userID', $userId)
            ->get();
        return view('myOrders', ['order' => $orders]);
    }
}
