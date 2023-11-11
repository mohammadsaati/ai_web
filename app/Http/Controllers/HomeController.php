<?php

namespace App\Http\Controllers;

use App\Services\HomeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct(public HomeService $service)
    {
    }

    public function home()
    {
        $data = $this->service->homeData();
        return view("home" , compact("data"));
    }
}
