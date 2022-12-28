@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Update Employee
                </li>
            </ol>
            </nav>
            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif

    <form action="{{ route('users.update',[$user->id]) }}" method="POST" enctype="multipart/form-data">@csrf
        {{ @method_field('PATCH') }}

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">General Information</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>First name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required="" value="{{ $user->name }}">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{ $user->address }}" >
                        </div>

                        <div class="form-group">
                            <label>Mobile number </label>
                            <input type="number" name="mobile_number" class="form-control" value="{{ $user->mobile_number }}" >
                        </div>

                        <div class="form-group">
                            <label>Department</label>
                            <select class="form-control" name="department_id" required="">
                                @foreach (App\Models\Department::all() as $department)
                                    <option value="{{ $department->id }}" @if ($user->department_id==$department->id)selected 
                                    @endif >{{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" value="{{ $user->designation }}" >
                        </div>

                        <div class="form-group">
                            <label>Start date</label>
                            <input type="" id="datepicker" name="start_from" class="form-control @error('start_from') is-invalid @enderror" placeholder="dd-mm-yyyy" value="{{ $user->start_from }}">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control @error('image')@enderror" accept="image/*" >
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Login Information</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" name="email" class="form-control @error('email')@enderror" value="{{ $user->email }}" required="">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required="">
                        </div>

                        <div class="form-group">
                            <label>Role</label>
                            <select class="form-control" name="role_id" required="">
                                @foreach (App\Models\Role::all() as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <br>

                <div class="form-group">
                @if(isset(auth()->user()->role->permission['name']['user']['can-edit']))
                    <button class="btn btn-primary " type="submit">Update</button>
                @endif
                </div>
            </div>
        </div>
    </form>
</div>

@endsection