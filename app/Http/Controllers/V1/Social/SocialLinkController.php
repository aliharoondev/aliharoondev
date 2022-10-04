<?php

namespace App\Http\Controllers\V1\Social;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\V1\SocialLink\StoreSocialLinkRequest;
use App\Http\Requests\V1\SocialLink\UpdateSocialLinkRequest;
use App\Models\SocialLink;
use App\Models\Section;
use Yajra\DataTables\Facades\DataTables;
class SocialLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        $sociallinks = [];

        if($request->ajax() ==true) {
            $sociallinks = SocialLink::query();
            return DataTables::of($sociallinks)
                ->addColumn('action', function ($sociallink) {
                    $url = route('sociallink.edit',$sociallink->id);
                    return "
                            <a href='$url' class='btn btn-xs btn-primary'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                            <a href='javascript:void(0);' class='btn btn-xs btn-danger mb-0 deleteSocial' data-id='$sociallink->id'><i class='glyphicon glyphicon-delete'>Delete</a>
                            ";
                })
                ->make(true);
        }

        return view('backend.content.sociallink.index',['sociallinks'=>$sociallinks]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.content.sociallink.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSocialLinkRequest $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'link' => 'required',
            'icon' => 'required',
        ]);
        $sociallink = new SocialLink();
        $sociallink->title = $request->title;
        $sociallink->icon = $request->icon;
        $sociallink->link = $request->link;
        $sociallink->save();
        return  redirect()->route('sociallink.index')->with('success','Social Link Added Successfully');
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
    public function edit(SocialLink $sociallink)
    {
        return view('backend.content.sociallink.edit',compact('sociallink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSocialLinkRequest $request, $id)
    {
        $sociallink = SocialLink::find($id);
        $sociallink = new SocialLink();
        $sociallink->title = $request->title;
        $sociallink->icon = $request->icon;
        $sociallink->link = $request->link;
        $sociallink->save();
        return  redirect()->route('sociallink.index')->with('success','Social Link Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialLink $sociallink)
    {
        $sociallink->delete();
        return  redirect()->route('sociallink.index')->with('success','Social Link Deleted Successfully');
    }
}
