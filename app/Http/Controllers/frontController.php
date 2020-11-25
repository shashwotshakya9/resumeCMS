<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class frontController extends Controller
{
    public function __construct(){

    }
    public function index(){
        $intro=DB::table('tbl_introductions')->latest('updated_at')->first();
        $aboutme=DB::table('tbl_aboutmes')->latest('updated_at')->first();
        $faq=DB::table('tbl_faqs')->latest('updated_at')->first();
        $detail=DB::table('tbl_details')->latest('updated_at')->first();
        $review=DB::table('tbl_reviews')->latest('updated_at')->first();

        return view('frontend.index',[
            'intro'=>$intro, 'aboutme'=>$aboutme, 'faq'=>$faq, 'detail'=>$detail, 'review'=>$review,
        ]);

    }
  
}
