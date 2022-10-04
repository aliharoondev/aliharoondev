<?php

namespace App\Http\Controllers\V1\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\V1\Contact\StoreContactRequest;
use App\Http\Requests\V1\Contact\UpdateContactRequest;
use App\Mail\Contact;
use App\Models\ContactUs;
use App\Models\Section;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $contact = [];

        if($request->ajax() ==true) {
            $contact = ContactUs::query();
            return DataTables::of($contact)
                ->addColumn('action', function ($contact) {
                    $url = route('contact.edit',$contact->id);
                    // $delete_url = route('contact.destroy',$contact->id);
                    return "
                            <a href='$url' class='btn btn-xs btn-primary'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                            <a href='javascript:void(0);' class='btn btn-xs btn-danger mb-0 deleteContact' data-id='$contact->id'><i class='glyphicon glyphicon-delete'>Delete</a>
                            ";
                })
                ->make(true);
        }

        return view('backend.content.contact.index',['contact'=>$contact]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.contact.create',compact('sections'));   
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactRequest $request)
    {
        //   $validated = $request->validate([
        //     'title' => 'required',
        //     'section_id' => 'required',
        //     'phone' => 'required',
        //     'email' => 'required',
        //     'address' => 'required',
        // ]);
        $contact = new ContactUs();
        $contact->address = $request->address;
        $contact->section_id = $request->section;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->location = $request->location;
        $contact->save();

        return  redirect()->route('contact.index')->with('success','Contact Added Successfully');

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
    public function edit(ContactUs $contact)
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.contact.edit',compact('sections','contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactRequest $request, $id)
    {
        $contact = ContactUs::find($id);
        $contact->address = $request->address;
        $contact->section_id = $request->section;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->location = $request->location;
        $contact->save();

        return  redirect()->route('contact.index')->with('success','Contact Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contact)
    {
        $contact->delete();
        return  redirect()->route('contact.index')->with('success','Contact Deleted Successfully');
    }
}
