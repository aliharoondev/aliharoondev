<?php

namespace App\Http\Controllers\V1\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\V1\Service\StoreServiceRequest;
use App\Http\Requests\V1\Service\UpdateServiceRequest;
use App\Models\Service;
use App\Models\Section;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $services = [];

        if($request->ajax() ==true) {
            $services = Service::query();
            return DataTables::of($services)
                ->addColumn('action', function ($service) {
                    $url = route('services.edit',$service->id);
                    return "
                            <a href='$url' class='btn btn-xs btn-primary'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                            <a href='javascript:void(0);' class='btn btn-xs btn-danger mb-0 deleteService' data-id='$service->id'><i class='glyphicon glyphicon-delete'>Delete</a>
                            ";
                })
                ->make(true);
        }

        return view('backend.content.services.index',['services'=>$services]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.services.create',compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
        // $validated = $request->validate([
        //     'title' => 'required',
        //     'section_id' => 'required',
        // ]);
        // $path= '';
        $service = new Service();
        $service->title = $request->title;
        $service->section_id = $request->section;
        $service->detail = $request->detail;
        $service->icon = $request->icon;

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     // $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $path = $request->file('image')->store('service','public');
        // }  
        // $service->image = $path;   
        $service->save();
        return  redirect()->route('services.index')->with('success','Service Added Successfully');
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
    public function edit(Service $service)
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.services.edit',compact('sections','service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, $id)
    {
        $service = Service::find($id);
        $service = new Service();
        $service->title = $request->title;
        $service->section_id = $request->section;
        $service->detail = $request->detail;
        $service->icon = $request->icon;
        $service->save();
        return  redirect()->route('services.index')->with('success','Service Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return  redirect()->route('services.index')->with('success','Service Deleted Successfully');
    }
}
