<div class="top-bar">

	<div class="profile-box">
		<!-- <div class="circle"></div> -->

		<div class="login">Login</div>
		<span class="arrow fa fa-angle-down"></span>
	</div>

	<!-- <div class="btn-group profile-box" role="group">
    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Login
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu dropdown-menu-right">
      <li><a href="#">Dropdown link qefwfwfgwrg3ergergg3gtr</a></li>
      <li><a href="#">Dropdown link</a></li>
    </ul>
  </div> -->


<style>
.window .main .top-bar .profile-box {
	transition-duration: 3s;
}
.window .main .top-bar .profile-box .login {
	display: block;
	float: left;
}
.window .main .top-bar .profile-box:hover {
	transition-duration: .1s;
	background-color: rgba(0,0,0,0.1);
}
</style>



	<ul class="top-menu">
		<li class="menu-icon trigger-sidebar-toggle">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</li>

		<li class=" <?php echo ($results['pageTitle'] == "Startseite"     ? "active" : "") ?> "><a href="./">Startseite</a></li>
		<li class=" <?php echo ($results['pageTitle'] == "Alle Filme"     ? "active" : "") ?> "><a href="./?action=viewAllMovies&view=wall">Alle Filme</a></li>
		<li class=" <?php echo ($results['pageTitle'] == "Administration" ? "active" : "") ?> "><a href="./?action=admin">Admin</a></li>

	</ul>

</div> <!-- top bar -->
