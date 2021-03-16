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
<div class="table-responsive">
  <table border="1">
      <tr>
        <th><strong>Id</strong></th>
        <th><strong>Name</strong></th>
        <th><strong>Email</strong></th>
      </tr>
  
</div>
@foreach($contact as $key => $data)
<tr>
    <th>{{ $data -> id}}</th> <br>
    <th>{{ $data -> name}}</th> 
    <th>{{ $data -> email}}</th> 
</tr>
@endforeach
</table>