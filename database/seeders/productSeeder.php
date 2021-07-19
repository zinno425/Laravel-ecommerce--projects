<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Iphone xr',
              'price'=> '48000',
            'description'=>'Apple ka phone h',
            'category'=>'mobile',

            'images'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.macrumors.com%2Froundup%2Fiphone-xr%2F&psig=AOvVaw0Wmjv3zRr3wjPzWP_ZZcI6&ust=1626023012641000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCMD5qPL92PECFQAAAAAdAAAAABAD',
            ],
            [
                'name' => 'LG ultragear monitor',
              'price'=> '32000',
            'description'=>'Lg ultra gear monitor',
            'category'=>'Monitor',

            'images'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.in%2FLG-Ultragear-Compatible-Display-Monitor%2Fdp%2FB07MKT2BNB&psig=AOvVaw3VSl7YgemCQN8xIsbJS4jz&ust=1626023401422000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCLChm6z_2PECFQAAAAAdAAAAABAJ',
            ],
            [
                'name' => 'ReadGear Headphone',
              'price'=> '2100',
            'description'=>'RedGear ka headphone h',
            'category'=>'Headphones',

            'images'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.in%2FRedgear-Cosmo-7-1-Headphones-Controller%2Fdp%2FB079S811J3&psig=AOvVaw3uim2oE_HRLkR6sq4XHS0Q&ust=1626023504244000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCLj2xt7_2PECFQAAAAAdAAAAABAD',
            ],
            [
                'name' => 'Logitec G402 mouse',
              'price'=> '3200',
            'description'=>'logitech ka chuha hai',
            'category'=>'mouse',

            'images'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.alzashop.com%2Flogitech-g502-hero-kda-edition-d6366846.htm&psig=AOvVaw20eYvS3kXKZD27jDPJPzNp&ust=1626023595785000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCOiDyJKA2fECFQAAAAAdAAAAABAD',
            ],
            [
                'name' => 'MSi Gv62 8re laptop',
              'price'=> '120000',
            'description'=>'Msi ka laptop hai',
            'category'=>'laptop',

            'images'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.in%2FMSI-8RE-050IN-15-6-inch-i7-8750H-1060-6GB%2Fdp%2FB07P73RTRQ&psig=AOvVaw1VS-HNv6R99Ls1gRL16Lqn&ust=1626023675006000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCMCH_6-A2fECFQAAAAAdAAAAABAD',
            ]

        ]);

    }
}
