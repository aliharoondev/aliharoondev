@extends('layouts.backend-master')
@section('styles')
@endsection
@section('content')
    <main class="at-content">
    <div class="row ">
        <div class="col">
            <h3>Hi User, {{\Illuminate\Support\Facades\Auth::user()->name}}</h3>
        </div>
    </div>
  </main>
@endsection
@section('scripts')
@endsection
