@extends('layouts.master')



@section('title')

Edit User | Dashboard

@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2>You can Modify this user</h2>
                    
                </div>
            <div class="card-body">
                <div class="row">
                <div class="col-md-6">
                <form action="/user-update/{{ $users->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label>Name</label>
                            <input type="text" name="name" value="{{ $users->name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                            <input type="text" name="phone" value="{{ $users->phone }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>email</label>
                            <input type="text" name="email" value="{{ $users->email }}" class="form-control">
                    </div>
                <div class="form-group">
                    <label>Give Role</label>
                    <select name="user_type" class="form-control">
                    <option value="#">..choose..</option>
                        <option value="admin">Admin</option>
                        <option value="normal-user">Normal User</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="/user-register" class="btn btn-danger">Cancel</a>
                </form>
                
                </div>
                </div>

                </div>
             </div>
        </div>    
    </div>
</div>

@endsection




@section('scripts')
@endscripts