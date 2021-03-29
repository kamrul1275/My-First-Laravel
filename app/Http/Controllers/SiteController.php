<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
public function ShowHome()
{
    return view ('Home');
}
public function ShowAbout()
{
    return view ('About');
}

public function ShowServices()
{
    return view ('Services')  ;
}
public function ShowPortfolio()
{
    return view ('Portfolio');
}

}
