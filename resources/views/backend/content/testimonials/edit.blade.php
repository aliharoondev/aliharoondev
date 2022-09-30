@extends('layouts.backend-master')
@section('styles')
@stop
@section('content')
    <div class="row ">
        <div class="col">
            <div class="card">
                <div class="card-header">testimonials</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{route('testimonial.update',$testimonial->id)}}" method="post" eenctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">name</label>
                                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $testimonial->name }}" placeholder="Name"/>
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Title</label>
                                        <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $testimonial->title }}" placeholder="Title"/>
                                        @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                   <label for="category" class="form-label">Section</label>
                                        <select class="form-control select" name="section" >
                                        @foreach($sections as $section)
                                                <option value="{!! $section->id !!}" {{$section->id==$testimonial->section_id ? 'selected' : ''}}>{!! $section->title !!}</option>

                                            @endforeach
                                        </select>
                               </div>
                               <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Image</label>
                                        <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ $testimonial->image }}" placeholder="Image"/>
                                        @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Testimonial Text</label>
                                        <textarea type="text" id="testimonial_text" name="testimonial_text" class="form-control @error('testimonial_text') is-invalid @enderror" placeholder="Testimonial Text">{{ $testimonial->testimonial_text }}</textarea>
                                        @error('testimonial_text')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col text-right">
                                        <input type="submit" class="btn btn-primary input-lg" value="Update Testimonial"/>
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
