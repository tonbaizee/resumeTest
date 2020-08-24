<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Datacenters;
use App\Models\ModelHasRoles;
use App\Models\ProductList;
use App\Models\Roles;
use App\Services\HomeLogic;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class ProductController extends BaseApiController
{
    protected $service;
    public function __construct()
    {
        parent::__construct();
        $this->service = new HomeLogic();
    }

    public function index()
    {
        if($_GET!=null)
        {
            if($_GET['search']!=null)
            {
                return view('home',[
                    'products'=>$this->service->search($_GET['search']),
                    'search'=>$_GET['search']
                ]);
            }
        }
        return view('home',[
            'products'=>$this->service->getAllElements()['products']
        ]);
    }
    public function getDataFromUrl(Request $request)
    {
        $this->service->insertRows($request->input('url'));
        return redirect('home');
    }
    public function getAllElementsResponse()
    {
        return $this->getResponse($this->service->getAllElements());
    }

}
