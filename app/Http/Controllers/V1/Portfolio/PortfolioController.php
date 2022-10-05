<?php

namespace App\Http\Controllers\V1\Portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\V1\Portfolio\StorePortfolioRequest;
use App\Http\Requests\V1\Portfolio\UpdatePortfolioRequest;
use App\Models\Portfolio;
use App\Models\Section;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $portfolios = [];

        if($request->ajax() ==true) {
            $portfolios = Portfolio::query();
            return DataTables::of($portfolios)
            ->addColumn('image', function ($portfolio) { 
                $url= asset('storage/'.$portfolio->image);
                return '<img src="'.$url.'" border="0" width="40" class="img-rounded" align="center" />';
            })
                ->addColumn('action', function ($portfolio) {
                    $url = route('portfolio.edit',$portfolio->id);
                    return "
                            <a href='$url' class='btn btn-xs btn-primary'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                            <a href='javascript:void(0);' class='btn btn-xs btn-danger mb-0 deletePortfolio' data-id='$portfolio->id'><i class='glyphicon glyphicon-delete'>Delete</a>
                            ";
                })
                ->rawColumns(['image', 'action'])->make(true);
        }

        return view('backend.content.portfolios.index',['portfolios'=>$portfolios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.portfolios.create',compact('sections'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortfolioRequest $request)
    {

       $path= '';
        $portfolio = new Portfolio();
        $portfolio->title = $request->title;
        $portfolio->section_id = $request->section;
        $portfolio->detail = $request->detail;
        $portfolio->category = $request->category;
        $portfolio->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $request->file('image')->store('portfolio','public');
        }
        $portfolio->image = $path;
        $portfolio->save();
        return  redirect()->route('portfolio.index')->with('success','Portfolio Added Successfully');
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
    public function edit(Portfolio $portfolio)
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.portfolios.edit',compact('sections','portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortfolioRequest $request, $id)
    {
        $portfolio = Portfolio::find($id);
        $path= '';
        $portfolio->title = $request->title;
        $portfolio->section_id = $request->section;
        $portfolio->detail = $request->detail;
        $portfolio->category = $request->category;
        $portfolio->status = $request->status;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $request->file('image')->store('portfolio','public');
        }  
        $portfolio->image = $path;   
        $portfolio->save();
        return  redirect()->route('portfolio.index')->with('success','Portfolio Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return  redirect()->route('portfolio.index')->with('success','Portfolio Deleted Successfully');
    }
}
