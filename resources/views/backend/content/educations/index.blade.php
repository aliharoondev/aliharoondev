@extends('layouts.backend-master')
@section('styles')
@stop
@section('content')
    <h1 class="page-title"> Educations
        <small>Educations Detail & Modification</small>
    </h1>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3>Educations</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col text-right">
                            <a href="{{route('education.create')}}" class="btn btn-info">Add New Education</a>
                        </div>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissable" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close text-right" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <h4>List of all the Educations</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="tblEducations"
                                       class="table table-striped- table-bordered table-hover table-checkable">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>degree</th>
                                        <th>Session</th>
                                        <th>institude</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--End Test--}}
    {{-- Delete Form Starts --}}
    {!! Form::open(['method' => 'delete', 'id' => 'deleteForm']) !!}
    {!! Form::hidden('id', null , ['id' => 'deleteId']) !!}
    {!! Form::close() !!}
    {{-- Delete Form Ends --}}
@stop
@section('scripts')
    <script>
        $(document).ready(function () {
            $('#tblEducations').DataTable({
                processing:true,
                serverSide:true,
                ajax:"{{route('education.index')}}",
                columns:[
                    {data:'id',name:'id'},
                    {data:'title',name:'title'},
                    {data:'degree',name:'degree'},
                    {data:'session',name:'session'},
                    {data:'institude',name:'institude'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
            $(document).on('click', '.deleteEducation', function () {
                        var currentID = $(this).attr('data-id');
                        console.log('id',currentID);
                        swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Yes, delete it!'
                        }).then(function (result) {
                            if (result.value) {
                                var delete_url = "{{route('education.destroy', ':id')}}";
                                delete_url = delete_url.replace(':id', currentID);
                                $('#deleteForm').attr('action', delete_url);
                                $('#deleteForm')[0].submit();
                                swal.fire(
                                    'Deleted!',
                                    'Education has been deleted.',
                                    'success'
                                )
                            }
                        }, currentID);
            });
        });
    </script>
@stop
