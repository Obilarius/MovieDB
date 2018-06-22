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


				<div class="movie-list">
					<div class="title-bar">
						<div class="left">
							<p class="bold">Popular Trailers</p>
							<p class="grey">Action / Adventure</p>
						</div> <!-- left -->
						<div class="right">
							<a class="blue" href="#">Rating <i class="fa fa-angle-down"></i></a>
							<a href="#">Newest</a>
							<a href="#">Oldest</a>
						</div> <!-- right -->
					</div> <!-- title-bar -->


          <!-- <div class="poster-wall">
            <?php #foreach ( $results['movies'] as $movie ) { ?>

            <a href="#" class="item tilt-poster">
               <div class="poster" style="background-image: url('<?php# echo LOCAL_POSTER_PATH . 'w185' . $movie->poster_path; ?>')">
                <div class="title"><?php #echo $movie->title ?></div>
              </div>
            </a>
            <?php #} ?>
          </div> -->

          <div class="poster-wall container">
            <?php foreach ( $results['movies'] as $movie ) { ?>

            <img class="tilt-poster" src="<?php echo LOCAL_POSTER_PATH . 'w185' . $movie->poster_path; ?>" alt="">

            <?php } ?>
          </div>

					<!-- <a href="#" class="load-more">Show more movies <span class="fa fa-plus"></span></a> -->

				</div> <!-- movie list -->


<?php include "templates/include/footer.php" ?>

<style>
  .poster-wall {
    /* display: block; */
    /* padding: 20px; */
    /* margin-bottom: 100px; */
  }
  .poster-wall img {
    /* display: block; */
    float: left;
    width: calc( 100% / <?php echo DESIGN_WALL_COL ?> - 2% );
    margin: 1%;
    text-align: center;
    text-decoration: none;
    box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.5);
  }

</style>

<script type="text/javascript">
  $('.tilt-poster').tilt({
    scale: 1.05,
    perspective: 500
  })
</script>
