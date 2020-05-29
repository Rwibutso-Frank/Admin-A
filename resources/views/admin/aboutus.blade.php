@extends('layouts.master')



@section('title')

About Us 

@endsection
@section('content')


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">About us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
 
        <form action="/create-about" method="POST">
            {{ csrf_field() }}
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" name="title" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sub Title:</label>
            <input type="text" name="sub_title" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea name="description" class="form-control" id="message-text"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">save</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="card">
    <div class="card-header">
        <h4 class="card-title"> About Us
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>
</h4>
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
        </div>
@endif
<style>
        .w-10p{
                width: 10% !important;
        }
</style>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
   <b>                 
      
<th class="w-10p">
    
      id
    
</th>
<th class="w-10p">
    
        Title
    
</th>

<th class="w-10p">
    
        Sub Title
    
</th>

<th class="w-10p">
    
        Description
    
</th>

        <th class="w-10p">
    
        EDIT
    
        </th>
<th class="w-10p">
        DELETE
</th>
</b>
                </thead>
                <tbody>
                @foreach($aboutus as $data)

            <tr >
                        <td >
                        {{ $data->id }}    
                        </td>
                        <td >
                            
                        {{ $data->title }}
                            
                        </td>
                        <td >
                            
                             {{ $data->sub_title }}
                            
                        </td>
         
    
                <td>
                <div style="height:80px; overflow: hidden;">
                {{ $data->description }}
                </div>
                </td>
                <td>
    <a href="{{ url('about-us/'.$data->id) }}" class="btn btn-success">EDIT</a>
    </td>


<td  class="text-right" >

    <a href="#" class="btn btn-danger">DELETE</a>

</td>
            @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection


@section('scripts')
@endscripts