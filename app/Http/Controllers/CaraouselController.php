<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index()
    {
        $images = [
            'images/1.jpg',
            'images/2.jpg',
            'images/3.jpg',
            // Add more image URLs as needed
        ];

        return view('carousel', compact('images'));
    }
}
