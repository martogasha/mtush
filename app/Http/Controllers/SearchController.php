<?php

namespace App\Http\Controllers;

use App\FrontPagePicture;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        return view('searchPage');
    }
    public function search(Request $request){
        dd($request->all());
    }
    public function jacketSearch(){
        $jackets = FrontPagePicture::where('product_id',3)->get();
        $jacketCount = FrontPagePicture::where('product_id',3)->count();

        return view('searchPage',[
            'jackets'=>$jackets,
            'jacketCount'=>$jacketCount
        ]);
    }
    public function tshirtSearch(){
        $tshirts = FrontPagePicture::where('product_id',4)->get();
    }
}
