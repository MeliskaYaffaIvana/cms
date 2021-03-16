<div class="headerwrapper">
	<div id="header" class="container">
		<div class="logo"> <a href="#"><img src="images/LOGO.png" alt="logo" width="165" height="74"></a> </div> <!--end of Logo-->
        <nav>
            <ul id="navigations">
                <li><a href="#navigations">HOME</a></li>
                <li> <a href="#slider">ABOUT</a></li>
                <li><a href="#map">LOCATONS</a></li>
                <li><a href="menu">MENU</a></li>
                <li><a href="contact">CONTACT</a></li>
            </ul>
        </nav>
      </div> <!--end of header-->
</div> <!-- end of headerwrapper-->
<div class="bestdisheswrapper">
    <div id="bestdishes" class="container">
       
		 <h2 class="wow fadeInUp" data-wow-delay="0.3s">BEST DISHES</h2>
      <div class="slider">
      		    <ul class="slides">
              <li class="slide">
              <div class="table-responsive">
  <table border="1">
      <tr>
        <th><strong>Id</strong></th>
        <th><strong>Name</strong></th>
        <th><strong>Image</strong></th>
        <th><strong>Price</strong></th>
      </tr>
  

@foreach($menu as $key => $data)
<tr>
    <th>{{ $data -> id}}</th> 
    <th>{{ $data -> name}}</th> 
    <th>{{ $data -> image}}</th> 
    <th>{{ $data -> price}}</th>
</tr>
@endforeach
</table>
</div>
</li>
        </ul>
      </div> <!-- end of slider-->
    </div> <!-- end of besth dishes-->
</div> <!-- end of bestdishes wrapper-->

