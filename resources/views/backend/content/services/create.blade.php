@extends('layouts.backend-master')
@section('styles')

@stop
@section('content')

    <div class="row ">
        <div class="col">
            <div class="card">
                <div class="card-header">Services</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{route('services.store')}}" enctype="multipart/form-data">
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
                                        <input type="submit" class="btn btn-primary input-lg" value="Add New Service"/>
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
