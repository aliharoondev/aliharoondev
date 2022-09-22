<?php

namespace App\Http\Controllers\V1\Facts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\V1\Categories\StoreFactRequest;
use App\Http\Requests\V1\Categories\UpdateFactRequest;
use App\Models\Fact;
use App\Models\Section;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class FactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $facts = [];

        if($request->ajax() ==true) {
            $facts = Fact::query();
            return DataTables::of($facts)
                ->addColumn('action', function ($fact) {
                    $url = route('facts.edit',$fact->id);
                    return "
                            <a href='$url' class='btn btn-xs btn-primary'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                            ";
                })
                ->make(true);
        }

        return view('backend.content.facts.index',['facts'=>$facts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.facts.create',compact('sections'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path= '';
        $fact = new Fact();
        $fact->title = $request->title;
        $fact->section_id = $request->section;
        $fact->detail = $request->detail;
        $fact->number = $request->number;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('image')->store('fact','public');
        }  
        $fact->image = $path;   
        $fact->save();
        return  redirect()->route('facts.index')->with('success','Fact Added Successfully');
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
