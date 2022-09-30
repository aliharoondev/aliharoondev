<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\ContactUs;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\PortfolioDetail;
use App\Models\Section;
use App\Models\Service;
use App\Models\Skill;
use App\Models\SocialLink;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landing()
    {
       
        $skills = Skill::select('id','title','percentage')->get();
        $section = Section::select('id','title','detail')->get();
        $sociallinks = SocialLink::select('id','title','icon','link')->get();
        $user = User::select('id','title','image','sumary','email','address','phone')->where('id',2)->first();
        $contact = ContactUs::select('id','address','email','phone','location')->get();
        $services = Service::select('id', 'title','detail','icon')->get();
        $abouts = About::select('id', 'title','short_discription','birth_date','website_url','degree','phone','email','address','detail','freelance','image')->get();
        $facts = Fact::select('id', 'title','detail','icon')->get();
        $portfolios = Portfolio::select('id', 'title','detail','category','image')->get();
        $educations = Education::select('id','detail','title','degree','institude','session')->get();
        $experiences = Experience::select('id','title','start_date','end_date','company_name','company_address','work_type','job_type','detail')->get();
        $testimonials = Testimonial::select('id','name','title','image','testimonial_text')->get();
        return view('frontend.content.pages.index',  compact('skills','educations','portfolios','facts','abouts','services','experiences','contact','testimonials','user','sociallinks','section'));   
    }

    public function portfolio_detail($id)
    {
        $portfolio = PortfolioDetail::where('portfolio_id',$id)->first();
        return view('frontend.content.pages.portfolio-details',compact('portfolio'));
    }
}
