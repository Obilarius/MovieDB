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

<!-- <div class="dropdown-menu">
	<div class="btn-signup-form">Registrieren</div>
	<div class="btn-login-form">Login</div>

	<div class="login-form">

	</div>
</div> -->


<div id="dropdown-menu">
	<ul  class="nav nav-pills nav-justified">
		<li class="nav-item">
			<a  href="#1a" data-toggle="tab">Login</a>
		</li>
		<li class="nav-item">
			<a href="#2a" data-toggle="tab">Register</a>
		</li>
	</ul>

	<div class="tab-content clearfix">
		<div class="tab-pane active" id="1a">
			<h3>Content's background color is the same for the tab</h3>
		</div>
		<div class="tab-pane" id="2a">
			<h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
		</div>
	</div>
</div>


<style>
body {
	padding : 10px ;
}
#dropdown-menu {
	background-color: #24282C;
	color : #DDD;
	width: 300px;
	float: right;
}
#dropdown-menu a{
	color: inherit;
}
#dropdown-menu a:hover{
	color: inherit;
	text-decoration: none;
}
#dropdown-menu .nav-item {
	font-size: 100%;
	background-color: #3AB0FF;
	padding: 10px 0px;

}
#dropdown-menu .nav .active {
	background-color: #279CEB;
}
#dropdown-menu .tab-content {
	padding : 5px 15px;
}
/* remove border radius for the tab */
#dropdown-menu .nav-pills > li > a {
	border-radius: 0;
}

</style>

<?php
#### POSTER DOWNLOAD
// $size = "original";
// $poster_path = "/aIgM2d5iDRFIXb6t7GW5d9nR840.jpg";
// $base_url = "http://image.tmdb.org/t/p/";
// $local_path = 'img/poster/';
//
// $source_url = $base_url . $size . $poster_path;
// $dest_url = $local_path . $size . $poster_path;
//
// if (!file_exists($dest_url)) {
//   #gibt es /img/poster
//   if (is_dir($local_path)) {
//     #gibt es der Ordner /w500/
//     if (!is_dir($local_path . $size)) {
//       #wenn nicht wird er erstellt
//       mkdir($local_path . $size);
//     }
//   } else {
//     #erstelle den Ordner /img/poster und w500 darin
//     mkdir($local_path);
//     mkdir($local_path . $size);
//   }
//   file_put_contents($dest_url, file_get_contents($source_url));
// }

#### PASSWORT HASH
// $pass = "load*,8,1";
// $hash = password_hash($pass, PASSWORD_DEFAULT);
// if(password_verify($pass,$hash))
// {
// 	echo $hash;
// }

#### UNIQUE ID
// $prefix = "obilarius";
// $uniqid = uniqid($prefix);
//
// echo $uniqid;



?>
