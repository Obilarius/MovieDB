<?php include "templates/include/header.php" ?>


<div class="featured-movie">
	<img class="cover" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/backdrop_ggwxvq_1.jpg" alt="" class="cover" />
	<p class="corner-title">Staff pick</p>

	<div class="bottom-bar">
		<div class="title-container">
			<span class="fa fa-play-circle"></span>
			<b>Non-stop</b> Trailer #1
		</div>

		<div class="right">
			<div class="stars">
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star-half-o"></span>
				<span class="fa fa-star-o"></span>
			</div>
			<div class="share">
				<icon class="fa fa-share-square"></icon> Share
			</div>
		</div> <!-- right -->
	</div> <!-- bottom bar -->
</div> <!-- featured -->



<div class="container">
  <div class="poster-wall row">
    <?php foreach ( $results['movies'] as $movie ) { ?>

    <img class="tilt-poster" src="<?php echo LOCAL_POSTER_PATH . 'w500' . $movie->poster_path; ?>" alt="">

    <?php } ?>
  </div>

  <div class="row mainstats">
    <div class="col-sm-4" style="text-align: center">
      <div class="round-icon">
        <i class="fal fa-film fa-2x fa-inverse"></i>
			</div>
      <p class="mainstat-title"><?php echo Movie::getCount(); ?></p>
      <p class="mainstat-label">Filme</p>
    </div>
		<div class="col-sm-4" style="text-align: center">
      <div class="round-icon">
        <i class="fal fa-stopwatch fa-2x fa-inverse"></i>
			</div>
      <p class="mainstat-title">
				<?php
				$time = Movie::getRuntimeInDaysHourMin();
				echo $time["day"] . "d " . $time["hour"] . "h " . $time["min"] . "m";
				?>
			</p>
      <p class="mainstat-label">Laufzeit</p>
    </div>
  </div>

</div> <!-- container -->



<?php include "templates/include/footer.php" ?>

<style>

.poster-wall {
	/* display: block; */
	/* padding: 20px; */
	margin-bottom: 50px;
	margin-top: 50px;
}
.poster-wall img {
	/* display: block; */
	float: left;
	width: calc( 100% / <?php echo HOMEPAGE_NUM_MOVIES ?> - 1% );
  height: 100%;
	margin: 0.5%;
	text-align: center;
	text-decoration: none;
	box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.5);
}
</style>
