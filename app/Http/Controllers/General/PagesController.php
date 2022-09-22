<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Education;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\PortfolioDetail;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landing()
    {
       
        $skills = Skill::select('id', 'name','detail','title','percentage')->get();
        $services = Service::select('id', 'title','detail','image')->get();
        $abouts = About::select('id', 'title','short_discription','birth_date','website_url','degree','phone','email','address','detail','freelance','image')->get();
        $facts = Fact::select('id', 'title','detail','image')->get();
        $portfolios = Portfolio::select('id', 'title','detail','category','image')->get();
        $educations = Education::select('id','detail','title','degree','institude','session')->get();
        return view('frontend.content.pages.index',  compact('skills','educations','portfolios','facts','abouts','services'));   
    }

    public function portfolio_detail($id)
    {
        $portfolio = PortfolioDetail::where('portfolio_id',$id)->first();
        return view('frontend.content.pages.portfolio-details',compact('portfolio'));
    }
}
