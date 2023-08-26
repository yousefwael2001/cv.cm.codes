<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    
    public function setLocale()
    {
        if (app()->getLocale() == 'ar') {
            app()->setLocale('en');
            session()->put('locale', 'en');
        } else {
            app()->setLocale('ar');
            session()->put('locale', 'ar');
        }
        return redirect()->back();
    }

    public function rfq(){
        return view('rfq');
    }
}
