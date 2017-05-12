@extends("myview.template")
@section("content")


@foreach($comments as $com)
<!-- start comment -->
  <div class="row col-md-12 well">
      {{$com->comment}}  
      <br/> <br/>            
      <a href="edit/{{$com->id}}"><span class="glyphicon glyphicon-edit"></span></a>           
      <a href="delete/{{$com->id}}"><span class="glyphicon glyphicon-remove"></span></a>            
      {{$com->updated_at}}  

      <div class="pull-right">
          <strong>From: </strong>
            {{$com->name}}                
            {{$com->ip}}
      </div>              
  </div> 
  <!-- stop comment -->
@endforeach


	<div class="row">	
		<!-- stories-->     
      <div class="col-md-5">
      <hr>
	  	<form role="form" action="addComment" method="POST">
		    <div class="form-group well">
		      <label for="name">Name:</label>
		      <input type="text" class="form-control" id="name" name="name" required>	<br/>		    	
		      <label for="comment">Comment:</label>
		      <textarea class="form-control" rows="5" id="comment" name="comment" required></textarea> <br/>
          <input type="hidden" class="form-control" id="ip" name="ip" 
                    value="{{Request::getClientIp()}}"> 
          <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />  
		      <button type="submit" class="btn btn-primary btn-sm">Submit</button>
		    </div>		   
	  	</form>	             	
       </div>
      <!--/stories--> 	
	</div>
</div>

@endsection