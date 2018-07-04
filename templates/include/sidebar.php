<aside class="sidebar">
	<div class="top-bar">
		<p class="logo">LIENZO</p>
	</div>

	<div class="search-box">
		<input type="text" placeholder="Search..."/>
		<p class="fa fa-search"></p>
	</div>

	<menu class="menu">
		<p class="menu-name">Genres</p>
		<ul>
			<?php
				$genres = Genre::getList("name ASC");
				foreach ($genres['results'] as $genre) { ?>
					<li><a href="./?genre= <?php echo $genre->name; ?> "> <?php echo $genre->name; ?> </a></li>
				<?php } ?>

			<!-- <li class="active">
				<a href="#">Action / Adventure</a>
				<ul>
					<li><a href="#">Latest</a></li>
					<li class="active"><a href="#">Popular</a></li>
					<li><a href="#">Coming soon</a></li>
					<li><a href="#">Staff picks</a></li>
				</ul>
			</li> -->
		</ul>

		<!-- <div class="separator"></div>

		<ul class="no-bullets">
			<li><a href="#">Latest news</a></li>
			<li><a href="#">Critic reviews</a></li>
			<li><a href="#">Box office</a></li>
			<li><a href="#">Top 250</a></li>
		</ul> -->

		<div class="separator"></div>
	</menu>
</aside>
