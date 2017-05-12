@extends("myview.template")
@section("content")
  
ค้นหาเจอ {{$count}} รายการ <br/><br/>
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

@endsection