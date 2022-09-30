@extends('layouts.backend-master')
@section('styles')

@stop
@section('content')

    <div class="row ">
        <div class="col">
            <div class="card">
                <div class="card-header">Skill</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{route('skills.store')}}" enctype="multipart/form-data">
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
                                        <label class="form-control-label">Percentage</label>
                                        <input type="number" id="percentage" name="percentage" class="form-control @error('percentage') is-invalid @enderror" value="{{old('percentage')}}" placeholder="Percentage"/>
                                        @error('percentage')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <input type="submit" class="btn btn-primary input-lg" value="Add New Skill"/>
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
