<?php
require( "config.php" );
?>
<link rel="stylesheet" type="text/css" href="reset.min.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-87DrmpqHRiY8hPLIr7ByqhPIywuSsjuQAfMXAE0sMUpY3BM7nXjf+mLIUSvhDArs" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<div class="tabWrap">

	<ul class="nav nav-tabs nav-justified" role="tablist" id="myTab">
	  <li role="presentation" class="tabToggle active"><a href="#firstPanel" class="tabAnchor firstPanel text-center" data-color="#01bcd6" aria-controls="firstPanel" role="tab" data-toggle="tab">First Tab</a></li>
	  <li role="presentation"><a href="#secondPanel" class="tabAnchor secondPanel text-center" data-color="#9d21b2" aria-controls="secondPanel" role="tab" data-toggle="tab">Tab Two</a></li>
	</ul>

	<div class="tab-content">

	  <div role="tabpanel" class="tab-pane active" id="firstPanel">
	  	<div class="tabInner">
	  		<h2>First Tab</h2>
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			  consequat.</p>
			  <button class="btn">Action</button>
	  	</div> <!-- /.tabInner -->
	  </div> <!-- /.tabpanel -->

	  <div role="tabpanel" class="tab-pane" id="secondPanel">
	  	<div class="tabInner">
	  		<h2>Tab Two</h2>
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			  consequat.</p>
			  <button class="btn">Action</button>
	  	</div> <!-- /.tabInner -->
	  </div> <!-- /.tabpanel -->

	</div> <!-- /.tab-content -->

</div> <!-- /.tabWrap -->


<style>
.nav li a:focus, .nav li a:hover {
  background: transparent;
}

.tabWrap {
  width: 600px;
  margin: 50px;
  background: #f5f5f5;
}

.tab-content {
  height: 220px;
  padding: 10px 5px;
  position: relative;
  background: #01bcd6;
}
.tab-content .tab-pane {
  position: relative;
  bottom: 10px;
}

.nav-tabs li.active a, .nav-tabs li.active a:focus, .nav-tabs li.active a:hover {
  border: none;
  color: #ffffff;
  background: none;
}

.nav-tabs li {
  width: 24%;
}
.nav-tabs li a {
  border-radius: 0;
  color: #ffffff;
  border: none;
  padding: 15px 0;
  margin-right: 0;
}

.tabAnchor {
  transition: 0.2s ease all;
}

.tabInner {
  padding: 10px;
  margin: 10px;
  height: 200px;
  background: #ffffff;
  border-radius: 10px;
}

.tabToggle {
  transition: 0.2s ease all;
}


</style>
