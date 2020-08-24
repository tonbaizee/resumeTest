<?php

namespace App\Http\Controllers;

use App\Models\ProductList;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index()
    {
        return view('home');
    }
    public function insertRows()
    {
        return view('insertRows');
    }
    public function editRow($slug)
    {
        $product = ProductList::where('slug',$slug)->first();
        return view('editRow',[
            'product'=>$product
        ]);
    }
    public function addRow()
    {
        return view('editRow');
    }
}
