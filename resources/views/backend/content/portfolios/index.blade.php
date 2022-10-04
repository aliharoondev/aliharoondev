@extends('layouts.backend-master')
@section('styles')
@stop
@section('content')
    <h1 class="page-title"> Portfolios
        <small>Portfolios Detail & Modification</small>
    </h1>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3>Portfolios</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col text-right">
                            <a href="{{route('portfolio.create')}}" class="btn btn-info">Add New Portfolio</a>
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
                    <h4>List of all the Portfolio</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="tblPortfolios"
                                       class="table table-striped- table-bordered table-hover table-checkable">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>detail</th>
                                        <th>Image</th>
                                        <th>Category</th>
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
            $('#tblPortfolios').DataTable({
                processing:true,
                serverSide:true,
                ajax:"{{route('portfolio.index')}}",
                columns:[
                    {data:'id',name:'id'},
                    {data:'title',name:'title'},
                    {data:'detail',name:'detail'},
                    { data: 'image', name: 'image', sortable: false, searchable: false },
                    {data:'category',name:'category'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
            $(document).on('click', '.deletePortfolio', function () {
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
                                var delete_url = "{{route('portfolio.destroy', ':id')}}";
                                delete_url = delete_url.replace(':id', currentID);
                                $('#deleteForm').attr('action', delete_url);
                                $('#deleteForm')[0].submit();
                                swal.fire(
                                    'Deleted!',
                                    'Portfolio has been deleted.',
                                    'success'
                                )
                            }
                        }, currentID);
            });
        });
    </script>
@stop
