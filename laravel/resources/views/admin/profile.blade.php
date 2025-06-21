@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header bg-info text-white">
        <h4>👤 Admin Profile</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <!-- Profile Photo -->
            <div class="col-md-3 text-center">
                @if(auth()->user()->photo)
                    <img src="{{ asset('uploads/users/' . auth()->user()->photo) }}" 
                         class="img-thumbnail rounded-circle" width="150" height="150" alt="Profile Photo">
                @else
                    <img src="{{ asset('default-user.png') }}" 
                         class="img-thumbnail rounded-circle" width="150" height="150" alt="Default">
                @endif
            </div>

            <!-- Info -->
            <div class="col-md-9">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <td>{{ auth()->user()->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ auth()->user()->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ auth()->user()->phone ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td class="text-capitalize">{{ auth()->user()->role }}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>{{ ucfirst(auth()->user()->gender) ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td>{{ auth()->user()->dob ? auth()->user()->dob->format('d M, Y') : 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ auth()->user()->address ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            @if(auth()->user()->status)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
