<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Slider Images
        DB::table('slider_images')->insert([
            [
                'title' => 'Nature',
                'url' => 'https://images.unsplash.com/photo-1472214103451-9374bd1c798e',
            ],
            [
                'title' => 'Architecture',
                'url' => 'https://images.unsplash.com/photo-1511818966892-d7d671e672a2',
            ],
            [
                'title' => 'Technology',
                'url' => 'https://images.unsplash.com/photo-1518770660439-4636190af475',
            ],
        ]);

        // Slideshow Images
        DB::table('slideshow_images')->insert([
            [
                'title' => 'Beautiful Landscapes',
                'description' => 'Discover nature\'s beauty',
                'url' => 'https://images.unsplash.com/photo-1469474968028-56623f02e42e',
            ],
            [
                'title' => 'Urban Life',
                'description' => 'Experience city vibes',
                'url' => 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000',
            ],
            [
                'title' => 'Ocean Views',
                'description' => 'Feel the ocean breeze',
                'url' => 'https://images.unsplash.com/photo-1505118380757-91f5f5632de0',
            ],
        ]);

        // Hero
        DB::table('heroes')->insert([
            'title' => 'Welcome to UIkit Demo',
            'description' => 'A beautiful and modern website built with UIkit',
            'primary_button' => 'Learn More',
            'secondary_button' => 'Get Started',
        ]);

        // Gallery Images
        DB::table('gallery_images')->insert([
            [
                'title' => 'Art & Culture',
                'url' => 'https://images.unsplash.com/photo-1561214115-f2f134cc4912',
                'thumbnail' => 'https://images.unsplash.com/photo-1561214115-f2f134cc4912?w=400&h=300&fit=crop',
            ],
            [
                'title' => 'Travel',
                'url' => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828',
                'thumbnail' => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=400&h=300&fit=crop',
            ],
            [
                'title' => 'Food',
                'url' => 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38',
                'thumbnail' => 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=400&h=300&fit=crop',
            ],
            [
                'title' => 'Nature',
                'url' => 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e',
                'thumbnail' => 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=400&h=300&fit=crop',
            ],
            [
                'title' => 'Architecture',
                'url' => 'https://images.unsplash.com/photo-1487958449943-2429e8be8625',
                'thumbnail' => 'https://images.unsplash.com/photo-1487958449943-2429e8be8625?w=400&h=300&fit=crop',
            ],
            [
                'title' => 'Technology',
                'url' => 'https://images.unsplash.com/photo-1518770660439-4636190af475',
                'thumbnail' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=400&h=300&fit=crop',
            ],
        ]);

        // Features
        DB::table('features')->insert([
            [
                'icon' => 'home',
                'title' => 'Modern Design',
                'description' => 'Clean and modern interface built with UIkit components.',
            ],
            [
                'icon' => 'settings',
                'title' => 'Customizable',
                'description' => 'Easily customize and extend with UIkit\'s flexible framework.',
            ],
            [
                'icon' => 'mail',
                'title' => 'Responsive',
                'description' => 'Fully responsive design that works on all devices.',
            ],
        ]);
    }
}