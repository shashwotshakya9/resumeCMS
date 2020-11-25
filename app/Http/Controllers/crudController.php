<?php

namespace App\Http\Controllers;

use App\Models\tbl_introduction;
use App\Models\tbl_aboutme;
use App\Models\tbl_faq;
use App\Models\tbl_detail;
use App\Models\tbl_reviews;

use Illuminate\Http\Request;

use DB;
use Session;

class crudController extends Controller
{
    public function insertAboutme(Request $request){
        $aboutme= new tbl_aboutme;
        $aboutme->atitle=request('atitle');
        $aboutme->adescription=request('adescription');
        $aboutme->acontenttitle_one=request('acontenttitle_one');
        $aboutme->acontentdescription_one=request('acontentdescription_one');
        $aboutme->acontenttitle_two=request('acontenttitle_two');
        $aboutme->acontentdescription_two=request('acontentdescription_two');
        $aboutme->acontenttitle_three=request('acontenttitle_three');
        $aboutme->acontentdescription_three=request('acontentdescription_three');
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/aboutme/', $filename);
            $aboutme->image=$filename;
        } else{
            return $request;
            $aboutme->image= '';
        }
            $aboutme->save();
            Session::flash('message','Data inserted successfully!!!');
        return redirect()->back();
    }
    public function show(Request $request){    
        $intro= new tbl_introduction;
        $intro->intro = request('intro');
        $intro->email = request('email');
        $intro->fullname = request('fullname');
        $intro->dob = request('dob');
        $intro->website = request('website');
        return view('backend.introduction',[
            'intro'=>$intro, 'aboutme'=>$aboutme, 'faq'=>$faq, 'detail'=>$detail, 'review'=>$review,
        ]);
    }


    public function insertIntro(Request $request){
        $intro= new tbl_introduction;
        $intro->intro = request('intro');
        $intro->email = request('email');
        $intro->fullname = request('fullname');
        $intro->dob = request('dob');
        $intro->website = request('website');

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/', $filename);
            $intro->image=$filename;
        } else{
            return $request;
            $intro->image= '';
        } 
        $intro->save();
        Session::flash('message','Data inserted successfully!!!');
        return redirect()->back();
    }

    public function insertDetails(Request $request){
        $detail= new tbl_detail;
        $detail->dtitle=request('dtitle');  
        $detail->phone=request('phone');       
        $detail->fblink=request('fblink');
        $detail->twitterlink=request('twitterlink');
        $detail->instalink=request('instalink');
        $detail->linkedinlink=request('linkedinlink');       
        $detail->ytlink=request('ytlink');
        $detail->save();
        Session::flash('message','Data inserted successfully!!!');
        return redirect()->back();
    }

    public function insertReviews(Request $request){
        $review= new tbl_reviews;
        $review->rname=request('rname');
        $review->rposition=request('rposition');
        $review->rreview=request('rreview');       
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/rev/', $filename);
            $review->image=$filename;
        } else{
            return $request;
            $review->image= '';
        } 
        $review->save();
        Session::flash('message','Data inserted successfully!!!');
        return redirect()->back();
    }

    public function insertFaq(Request $request){
        $faq= new tbl_faq;
        $faq->question_one=request('question_one');        
        $faq->question_two=request('question_two');
        $faq->question_three=request('question_three');
        $faq->question_four=request('question_four');
        $faq->question_five=request('question_five');
        $faq->answer_one=request('answer_one');
        $faq->answer_two=request('answer_two');
        $faq->answer_three=request('answer_three');
        $faq->answer_four=request('answer_four');
        $faq->answer_five=request('answer_five');
        $faq->save();
        Session::flash('message','Data inserted successfully!!!');
        return redirect()->back();
    }


}