<!DOCTYPE html>
<html lang="en">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
   	<link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('/css/bootstrap-theme.min')}}">
	<link rel="stylesheet" href="{{URL::asset('/css/social-buttons')}}">
	
   


 <body>
@include("myview.header")  

@yield("content")

@include("myview.footer")
</body>
</html>