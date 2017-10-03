<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
    	$vid = 'video/Sketchpad.mp4';
        return view('lrwebs')->withVid($vid);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSketch()
    {
        return view('video');
    }
}
