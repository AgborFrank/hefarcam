<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Partner;
use App\Models\Team;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function homePage(){
        $pageTitle = 'Welcome to Boss Man';
        $blog = Blog::orderBy('id', 'DESC')->get();
        return view('frontend.home', compact('blog','pageTitle'));
    }
    public function showPlan(){
        $pageTitle = 'Investment Plan';
       // $faq = Faq::all();
        $blog = Blog::all();
        return view('frontend.investPlan', compact('pageTitle','blog','faq'));
    }
    public function contactUs(){
        $pageTitle = "Contact Us";
        return view('frontend.contact', compact('pageTitle'));
    }
    public function aboutUs(){
        $pageTitle = "About Elite Nation";
        $teams = Team::orderBy('name','desc')->get();
       // $partner = Partner::all();
        return view('frontend.about_us', compact('pageTitle', 'teams', 'partner'));
    }
    public function faq(){
       // $faq = Faq::all();
        $pageTitle = "Frequently Asked Question";
        return view('frontend.faq', compact('pageTitle', 'faq'));
    }

    public function blogView(Request $request, $id)
    {
        $blog = Blog::where('id', $id)->first();
        $related_stories = Blog::where('id','!=',$id)->get();
        $pageTitle = 'Blog';
     return view('frontend.blog.details', compact('pageTitle', 'blog','related_stories'));
    }

    public function team()
    {

        $pageTitle = 'Team members';
        $teams = Team::orderBy('name','desc')->get();
       // $partner = Partner::all();
        $blog = Blog::all();
     return view('frontend.team', compact('pageTitle', 'teams', 'partner','blog'));
    }

    public function blog()
    {
        $pageTitle = 'Articles & Resources';
        $blog = Blog::all();
        return view('frontend.blog', compact('blog', 'pageTitle'));
    }
}
