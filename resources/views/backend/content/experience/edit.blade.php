@extends('layouts.backend-master')
@section('styles')
@stop
@section('content')
    <div class="row ">
        <div class="col">
            <div class="card">
                <div class="card-header">Experience</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{route('experience.update',$experience->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Title</label>
                                        <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $experience->title }}" placeholder="Title"/>
                                        @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                   <label for="category" class="form-label">Section</label>
                                        <select class="form-control select" name="section" >
                                        @foreach($sections as $section)
                                                <option value="{!! $section->id !!}" {{$section->id==$experience->section_id ? 'selected' : ''}}>{!! $section->title !!}</option>

                                            @endforeach
                                        </select>
                               </div>
                               <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Start Date</label>
                                        <input type="date" id="start_date" name="start_date" class="form-control @error('start_date') is-invalid @enderror" value="{{ $experience->start_date }}" placeholder="Start Date"/>
                                        @error('start_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">End Date</label>
                                        <input type="date" id="end_date" name="end_date" class="form-control @error('end_date') is-invalid @enderror" value="{{ $experience->end_date }}" placeholder="End Date"/>
                                        @error('end_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                               <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Company Name</label>
                                        <input type="text" id="company_name" name="company_name" class="form-control @error('company_name') is-invalid @enderror" value="{{ $experience->company_name }}" placeholder="Company Name"/>
                                        @error('company_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Compant Adsress</label>
                                        <input type="text" id="company_address" name="company_address" class="form-control @error('company_address') is-invalid @enderror" value="{{ $experience->company_address }}" placeholder="Company Address"/>
                                        @error('company_address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col form-group">
                                            <label class="form-control-label">Work Type</label>
                                            <select class="form-control" tabindex="2" id="work_type" name="work_type" style="width: 100%;">
                                                <option value="remote">Remote</option>
                                                <option value="onsite">On Site</option>
                                            </select>    
                                           @error('work_type')
                                               <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group">
                                            <label class="form-control-label">Job Type</label>
                                            <select class="form-control" tabindex="2" id="job_type" name="job_type" style="width: 100%;">
                                                <option value="full time">Full Time</option>
                                                <option value="half time">Half time</option>
                                                <option value="freelance">Freelance</option>
                                                <option value="as you demand">As You Demand</option>
                                            </select>    
                                           @error('job_type')
                                               <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Detail</label>
                                        <textarea type="text" id="detail" name="detail" class="form-control @error('detail') is-invalid @enderror"  placeholder="Detail">{{ $experience->title }}</textarea>
                                        @error('detail')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <input type="submit" class="btn btn-primary input-lg" value="Update Experience"/>
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
