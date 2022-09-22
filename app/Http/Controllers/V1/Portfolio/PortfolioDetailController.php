<?php

namespace App\Http\Controllers\V1\Portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\V1\Categories\StorePortfolioRequest;
use App\Http\Requests\V1\Categories\UpdatePortfolioRequest;
use App\Models\Portfolio;
use App\Models\portfolioDetail;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class PortfolioDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $portfolio_details = [];

        if($request->ajax() ==true) {
            $portfolio_details = portfolioDetail::query();
            return DataTables::of($portfolio_details)
                ->addColumn('action', function ($portfolio_detail) {
                    $url = route('portfolios.edit',$portfolio_detail->id);
                    return "
                            <a href='$url' class='btn btn-xs btn-primary'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                            ";
                })
                ->make(true);
        }

        return view('backend.content.portfolios.index',['portfolio_details'=>$portfolio_details]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portfolio = Portfolio::select('id', 'title')->get();
        return view('backend.content.portfolio-details.create', ['portfolio' => $portfolio]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path= '';
         $portfolio = new portfolioDetail();
         $portfolio->title = $request->title;
         $portfolio->detail = $request->detail;
         $portfolio->portfolio_id = $request->portfolio;
         $portfolio->status = $request->status;
         $portfolio->category = $request->category;
         $portfolio->client = $request->client;
         $portfolio->project_date = $request->project_date;
         $portfolio->project_url = $request->project_url;
 
         if ($request->hasFile('image')) {
             $image = $request->file('image');
             $filename = time() . '.' . $image->getClientOriginalExtension();
             $path = $request->file('image')->storePubliclyAs('portfolio_detail',$filename);
             }  
         $portfolio->image = $path;   

         if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $filename = time() . '.' . $image2->getClientOriginalExtension();
            $path = $request->file('image2')->storePubliclyAs('portfolio_detail',$filename);
            }  
        $portfolio->image2 = $path;   
         $portfolio->save();
         return  redirect()->route('portfolio-details.index')->with('success','Portfolio Added Successfully');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
