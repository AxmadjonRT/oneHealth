<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('index', [
            'sliders' => $sliders
        ]);
    }

    public function about()
    {
        $sliders = Slider::all();
        return view('about', [
            'sliders' => $sliders
        ]);
    }

    public function doctors()
    {
        $sliders = Slider::all();
        return view('doctors', [
            'sliders' => $sliders
        ]);
    }

    public function news()
    {
        $sliders = Slider::all();
        return view('news', [
            'sliders' => $sliders
        ]);
    }

    public function contact()
    {
        $sliders = Slider::all();
        return view('contact', [
            'sliders' => $sliders
        ]);
    }
}
