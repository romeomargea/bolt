<?php

namespace App\Http\Controllers;

use App\Models\SliderImage;
use App\Models\SlideshowImage;
use App\Models\Hero;
use App\Models\GalleryImage;
use App\Models\Feature;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'sliderImages' => SliderImage::all(),
            'slideshowImages' => SlideshowImage::all(),
            'hero' => Hero::first(),
            'galleryImages' => GalleryImage::all(),
            'features' => Feature::all(),
        ]);
    }
}