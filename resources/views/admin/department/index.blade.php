@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">All Departments</li>
                </ol>
            </nav>
            @if (Session::has('message'))
                <div>
                    {{ Session::get('message') }}
                </div>
            @endif

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($departments)>0)
                    @foreach ($departments as $key => $department)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $department->name }}</td>
                        <td>{{ $department->description }}</td>
                        <td><i class="fas fa-trash"></i></td>
                        <td><i class="fas fa-edit"></i></td>
                    </tr>
                    @endforeach
                    @else
                    <td>No departments to display</td>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
