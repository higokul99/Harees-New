<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function aboutUs()
    {
        return view('pages.about-us');
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }

    public function stores()
    {
        return view('pages.stores');
    }

    public function goldRate()
    {
        return view('pages.gold-rate');
    }

    public function ourBrands()
    {
        return view('pages.our-brands');
    }

    public function career()
    {
        return view('pages.career');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function refundPolicy()
    {
        return view('pages.refund-policy');
    }

    public function trackOrder()
    {
        return view('pages.track-order');
    }

    public function shippingPolicy()
    {
        return view('pages.shipping-policy');
    }

    public function termsConditions()
    {
        return view('pages.terms-conditions');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function returnExchange()
    {
        return view('pages.return-exchange');
    }

    public function cancellationPolicy()
    {
        return view('pages.cancellation-policy');
    }

    public function goldScheme()
    {
        return view('pages.gold-scheme');
    }

    public function advanceBooking()
    {
        return view('pages.advance-booking');
    }

    public function customJewellery()
    {
        return view('pages.custom-jewellery');
    }

    public function support()
    {
        return view('pages.support');
    }
}
