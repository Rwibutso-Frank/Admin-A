@extends('layouts.master')



@section('title')

Edit | About us

@endsection

@section('content')

<div class="row">
    <div class="col-md 12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                        <h4> About Us - Edit Data</h4>

    <form action="{{ url('about-update/'.$edit->id) }}" method="POST">
            {{ csrf_field() }}
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" name="title" class="form-control" value="{{ $edit->title }}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sub Title:</label>
            <input type="text" name="sub_title" class="form-control" value="{{ $edit->sub_title }}">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea name="description" class="form-control" rows="6">{{ $edit->description }}</textarea>
          </div>
        
      </div>
      
        <a href="{{ url('about-us') }}" class="btn btn-secondary float-right">Cancel</a>
        <button type="submit" class="btn btn-primary float-right">Update</button>
    
      </form>
                </div>
            </div>
        </div> 
    </div>
</div>

@endsection