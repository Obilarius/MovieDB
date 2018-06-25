<div class="top-bar">

	<div class="profile-box">
		<div class="circle"></div>
		<span class="arrow fa fa-angle-down"></span>
	</div>

	<ul class="top-menu">
		<li class="menu-icon trigger-sidebar-toggle">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</li>

		<?php
		if ($results['pageTitle'] == "Startseite") { echo '<li class="active"><a href="./">Startseite</a></li>'; }
			else { echo '<li><a href="./">Startseite</a></li>'; }
		if ($results['pageTitle'] == "Alle Filme") { echo '<li class="active"><a href="./?action=viewAllMovies&view=wall">Alle Filme</a></li>'; }
			else { echo '<li><a href="./?action=viewAllMovies&view=wall">Alle Filme</a></li>'; }
		?>

	</ul>

</div> <!-- top bar -->
