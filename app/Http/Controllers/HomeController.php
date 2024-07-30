<?php

namespace App\Http\Controllers;

use App\Services\HomeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;


class HomeController extends Controller
{
    const VIEW          =   'home';
    public function __construct(public readonly HomeService $service)
    {
    }


    public function home()
    {
        $data                   =   $this->service->homeData();
        $data['title']          =   'صفحه اصلی';


        return view(self::VIEW.'.home' , compact('data'));
    }
}
