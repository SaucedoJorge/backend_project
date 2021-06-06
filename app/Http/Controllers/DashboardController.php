<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Symfony\Component\HttpFoundation\RequestStack;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        dd("test")
        $title = "prueba"
        return view("home.home", $title);
    }
}
