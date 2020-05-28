@extends('layouts.master')



@section('title')

Administrator | Dashboard

@endsection
@section('content')


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>


<div class="card">
    <div class="card-header">
        <h4 class="card-title"> About Us
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>
</h4>
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
    
    Title

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
                        <th  class="text-right" >
    
                <td>
                <div style="height:80px; overflow: hidden;">
                {{ $data->description }}
                </div>
                </td>
    <a href="#" class="btn btn-success">EDIT</a>

</th>

<th  class="text-right" >

    <a href="#" class="btn btn-danger">DELETE</a>

</th>
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