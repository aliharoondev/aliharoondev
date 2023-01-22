@extends('layouts.backend-master')
@section('styles')

@stop
@section('content')

    <div class="row ">
        <div class="col">
            <div class="card">
                <div class="card-header">About</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{route('about.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Title</label>
                                        <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" placeholder="Title"/>
                                        @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                   <label for="category" class="form-label">Section</label>
                                        <select class="form-control select" name="section" >
                                        @foreach($sections as $section)
                                        <option value="{!! $section->id !!}">{!! $section->title !!}</option>
                                        @endforeach
                                        </select>
                               </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Short Description</label>
                                        <input type="text" id="short_description" name="short_description" class="form-control @error('short_description') is-invalid @enderror" value="{{old('short_description')}}" placeholder="Short Description"/>
                                        @error('short_description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Birthday</label>
                                        <input type="date" id="birth_date" name="birth_date" class="form-control @error('birth_date') is-invalid @enderror" value="{{old('birth_date')}}" placeholder="Birthday"/>
                                        @error('birth_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                               <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Website</label>
                                        <input type="text" id="website_url" name="website_url" class="form-control @error('website_url') is-invalid @enderror" value="{{old('website_url')}}" placeholder="Website Url"/>
                                        @error('website_url')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Degree</label>
                                        <input type="text" id="degree" name="degree" class="form-control @error('degree') is-invalid @enderror" value="{{old('degree')}}" placeholder="Degree"/>
                                        @error('degree')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Phone</label>
                                        <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}" placeholder="Phone"/>
                                        @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Email</label>
                                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Email"/>
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Address</label>
                                        <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}" placeholder="Address"/>
                                        @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Freelance</label>
                                        <input type="text" id="freelance" name="freelance" class="form-control @error('freelance') is-invalid @enderror" value="{{old('freelance')}}" placeholder="Freelance"/>
                                        @error('freelance')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Detail</label>
                                        <textarea type="text" id="detail" name="detail" class="form-control @error('detail') is-invalid @enderror" value="{{old('detail')}}" placeholder="Detail"></textarea>
                                        @error('detail')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Image</label>
                                        <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" value="{{old('image')}}" placeholder="Image"/>
                                        @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <input type="submit" class="btn btn-primary input-lg" value="Add New About"/>
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
