@extends('layouts.backend-master')
@section('styles')
@stop
@section('content')
    <div class="row ">
        <div class="col">
            <div class="card">
                <div class="card-header">Contact</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{route('contact.update',$contact->id)}}" method="post" eenctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Address</label>
                                        <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ $contact->address }}" placeholder="Address"/>
                                        @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                   <label for="category" class="form-label">Section</label>
                                        <select class="form-control select" name="section" >
                                        @foreach($sections as $section)
                                                <option value="{!! $section->id !!}" {{$section->id==$contact->section_id ? 'selected' : ''}}>{!! $section->title !!}</option>

                                            @endforeach
                                        </select>
                               </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Email</label>
                                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $contact->email }}" placeholder="Email"/>
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Phone</label>
                                        <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $contact->phone }}" placeholder="Phone"/>
                                        @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Location</label>
                                        <input type="text" id="location" name="location" class="form-control @error('location') is-invalid @enderror" value="{{ $contact->location }}" placeholder="Location"/>
                                        @error('location')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <input type="submit" class="btn btn-primary input-lg" value="Update Contact"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script>
        $(document).ready(function(){});
    </script>
@stop
