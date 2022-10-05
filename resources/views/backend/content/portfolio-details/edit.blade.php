@extends('layouts.backend-master')
@section('styles')
@stop
@section('content')
    <div class="row ">
        <div class="col">
            <div class="card">
                <div class="card-header">Portfolios Details</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{route('portfolio-details.update',$portfolioDetail->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Title</label>
                                        <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $portfolioDetail->title }}" placeholder="Title"/>
                                        @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="form-label">Portfolio</label>
                                    <select class="form-control select" name="portfolio" >
                                        @foreach($portfolio as $port)
                                            <option value="{!! $port->id !!}" {{$portfolioDetail->portfolio_id == $port->id ? "selected":""}}>{!! $port->title !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Detail</label>
                                        <textarea type="text" id="detail" name="detail" class="form-control @error('detail') is-invalid @enderror"  placeholder="Detail">{{ $portfolioDetail->title }}</textarea>
                                        @error('detail')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Thumnail</label>
                                        <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ $portfolioDetail->image }}" placeholder="Thumnail"/>
                                        @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                            @if($portfolioDetail->id == $portfolioDetail->id)
                                                <img src="{{ url('storage/' . $portfolioDetail->image) }}" id="profile-img-tag" height="100" width="100">
                                            @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Image</label>
                                        <input type="file" id="image2" name="image2" class="form-control @error('image2') is-invalid @enderror" value="{{ $portfolioDetail->image2 }}" placeholder="Image"/>
                                        @error('image2')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                            @if($portfolioDetail->id == $portfolioDetail->id)
                                                <img src="{{ url('storage/' . $portfolioDetail->image2) }}" id="profile-img-tag" height="100" width="100">
                                            @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Category</label>
                                        <input type="text" id="category" name="category" class="form-control @error('category') is-invalid @enderror" value="{{ $portfolioDetail->category }}" placeholder="Category"/>
                                        @error('category')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Client</label>
                                        <input type="text" id="client" name="client" class="form-control @error('client') is-invalid @enderror" value="{{ $portfolioDetail->client }}" placeholder="Client"/>
                                        @error('client')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Project Date</label>
                                        <input type="date" id="project_date" name="project_date" class="form-control @error('project_date') is-invalid @enderror" value="{{ $portfolioDetail->project_date }}" placeholder="Project Date"/>
                                        @error('project_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label class="form-control-label">Project Url</label>
                                        <input type="text" id="project_url" name="project_url" class="form-control @error('project_url') is-invalid @enderror" value="{{ $portfolioDetail->project_url }}" placeholder="Project Url"/>
                                        @error('project_url')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                            <label for="category" class="form-label">Status</label>
                                            <select class="form-control select" name="status" >
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <input type="submit" class="btn btn-primary input-lg" value="Update Portfolio Detail"/>
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
