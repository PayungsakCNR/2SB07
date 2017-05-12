@extends("myview.template")
@section("content")
 
	<div class="row">	
		<!-- stories-->     
          <div class="col-md-5">
          <hr>
			  	<form role="form" action="../saveComment/{{$comments->id}}" method="POST">
				    <div class="form-group well">
				     <label for="name">Name:</label>
				      <input type="text" class="form-control" id="name" name="name" maxlength="50" value="{{$comments->name}}">	<br/>		    	
				      <label for="comment">Comment:</label>
				      <textarea class="form-control" rows="5" id="comment" name="comment">{{$comments->comment}}</textarea> <br/>
               		   <input type="hidden" class="form-control" id="ip" name="ip" value="{{$comments->ip}}"> 
               		   <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />	
				       <button type="submit" class="btn btn-primary btn-sm">Submit</button>
				    </div>		   
			  	</form>	             	
           </div>
          <!--/stories--> 	
	</div>
</div>
@endsection