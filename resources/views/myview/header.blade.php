@section("header")
<header class="navbar navbar-default" role="banner">
  <title> Guest book</title>
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" 
              data-toggle="collapse" 
              data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index" class="navbar-brand">Home</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">        
        <li>
          <a href="#">Profile</a>
        </li>
        <li>
          <a href="#">Contact us</a>
        </li>
      </ul>
      <ul class="nav navbar-right" style="padding:12px;">
        <li>
          <form class="form-inline" action="search" method="POST">            
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />  
            <input type="text" class="form-control pull-left" placeholder="Search" name="search">
            <button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i></button>
          </form>
        </li>
      </ul>
    </nav>
  </div>
</header>

<div id="masthead">  
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <h1>My guest book
          <!-- <p class="lead">My guest book</p> http://graph.facebook.com/wwarodom/picture?type=large -->
        </h1>
      </div> 
    </div> 
  </div><!-- /cont --> 
</div>

<div class="container">
    <div class="row">  
            <div class="col-md-12">             
              <h3>Another Entry Title</h3>                              
                  <p>ลงชื่อเยี่ยมชมใน Guestbook นี้ได้เลยครับ</p>              
                  <hr>
            </div>                     
    </div>
@show