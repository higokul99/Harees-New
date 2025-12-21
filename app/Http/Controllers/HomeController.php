<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the homepage
     */
    public function index()
    {
        $showPopup = false;
        $message = '';
        $celebrationType = '';

        // Check for birthday/anniversary if user is logged in
        if (auth()->check()) {
            $currentDate = date('m-d');
            $user = auth()->user();

            if (!empty($user->dob)) {
                $dob = date('m-d', strtotime($user->dob));
                if ($dob === $currentDate) {
                    $showPopup = true;
                    $celebrationType = 'birthday';
                    $message = "It's your special day! Shine bright like our diamonds with exclusive birthday offers!";
                }
            }

            if (!$showPopup && !empty($user->anniversary)) {
                $anniv = date('m-d', strtotime($user->anniversary));
                if ($anniv === $currentDate) {
                    $showPopup = true;
                    $celebrationType = 'anniversary';
                    $message = "Cheers to your love story! Celebrate this milestone with our anniversary collection!";
                }
            }
        }

        return view('home', compact('showPopup', 'message', 'celebrationType'));
    }
}
