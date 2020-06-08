@extends('layouts.master')



@section('title')

Administrator | Dashboard

@endsection
@section('content')


<div class="card">
    <div class="card-header">
        <h4 class="card-title"> Register Users</h4>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                 
                    <th >
                        
                        <b>     Name  </b>  
                        
                    </th>

                    <th >
                        
                        <b>     Phone  </b>  
                        
                    </th>

                    <th >
                        
                        <b>   email  </b>  

                        
                    </th>

                    <th >
                        
                        <b>   user-type  </b>  

                        
                    </th>
                    <th  class="text-right" >
                        
                    </b>      EDIT  </b>  
                    
                </th>

                <th  class="text-right" >
                    
                    <b>   DELETE     </b>  
                    
                </th>
            </b>

        </thead>
        <tbody>
            
            
            @foreach($users as $user) 
            
            
            <tr >
                
                
                
                
                <td >
                    
                   {{ $user->name }}
                   
               </td>
               
               
               
               
               
               <td >
                
                {{ $user->phone }}
                
            </td>
            
            
            
            
            
            <td >
                
                {{ $user->email }}

                
            </td>
            
            <td >
                
                {{ $user->user_type }}
                
                
            </td>
            
            
            
            <td  class="text-right" >
                
                <a href="/user-edit-{{ $user->id }}" class="btn btn-success">EDIT</a>

                
            </td>
            <td  class="text-right" >
                
                <a href="/user-delete/{{ $user->id }}" class="btn btn-danger">DELETE</a>
                
            </td>
            
            
        </tr>
        
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>

</div>
<div class="col-md-12">
    
 
</tbody>
</table>
</div>
</div>
</div>


@endsection




@section('scripts')
@endscripts