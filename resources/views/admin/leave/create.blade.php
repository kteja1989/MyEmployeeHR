@extends('admin.layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Leave Form</li>
                    </ol>
                </nav>
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif

                <form action="{{ route('leaves.store') }}" method="post">@csrf
                    <div class="card">
                        <div class="card-header">Create Leave</div>
                        <div class="card-body">

                            <div class="form-group">
                                <label>From date</label>
                                <input type="date" name="from" class="form-control @error('from') is-invalid @enderror" placeholder="dd-mm-yyyy" required="" id="datepicker">
                                @error('from')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>To date</label>
                                <input type="date" name="to" class="form-control @error('to') is-invalid @enderror" placeholder="dd-mm-yyyy" required="" id="datepicker1">
                                @error('to')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Type of Label</label>
                                <select class="form-control" name="type">
                                    <option value="annualleave">Annual Leave</option>
                                    <option value="sickleave">Sick Leave</option>
                                    <option value="parentalleave">Parental Leave</option>
                                    <option value="otherleave">Other Leave</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" required=""></textarea>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>

                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Date From</th>
                            <th>Date To</th>
                            <th>Description</th>
                            <th>Type</th>
                            <th>Reply</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($leaves as $key => $leave)
                            <tr>
                                <th>{{ $key+1 }}</th>
                                <td>{{  $leave->from }}</td>
                                <td>{{  $leave->to }}</td>
                                <td>{{  $leave->description  }}</td>
                                <td>{{  $leave->type  }}</td>
                                <td>{{  $leave->message  }}</td>
                                <td>
                                    @if ($leave->status == 0)
                                        <span class="alert alert-danger">Pending</span>
                                    @else
                                        <span class="alert alert-success">Aproved</span>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('leaves.edit',[$leave->id]) }}"><i class="fas fa-edit"></i></a>
                                </td>

                                <td>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $leave->id }}"><i class="fas fa-trash"></i></a>
                                    <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{ $leave->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <form action="{{ route('leaves.destroy',[$leave->id]) }}" method="post">@csrf
                                                    {{ method_field('DELETE') }}
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Do you want to delete?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                        </div>
                    <!--Modal end-->

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
