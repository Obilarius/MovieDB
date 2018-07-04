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
							<p class="bold">Alle Filme</p>
							<p class="grey"><?php echo $results['totalRows']?> Filme<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> gesammt</p>
						</div> <!-- left -->
						<div class="right">
							<a href="#">Rating <i class="fa fa-angle-down"></i></a>
							<a class="blue" href="#">Newest</a>
							<a href="#">Oldest</a>
							<a href=".\?action=viewAllMovies&view=wall" data-balloon="Grid" data-balloon-pos="left"><i class="fal fa-th"></i></a>
							<a href=".\?action=viewAllMovies&view=list" data-balloon="List" data-balloon-pos="left"><i class="fal fa-th-list"></i></a>
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
							<?php if ($_GET['view'] == "wall"): ?>
									<!-- POSTER WALL -->
		            	<img class="wall tilt-poster" src="<?php echo LOCAL_POSTER_PATH . 'w185' . $movie->poster_path; ?>" alt="">
							<?php else: ?>
									<!-- LIST -->
									<div class="media">
									  <div class="media-left">
											<a href=".?action=viewMovie&amp;movieId=<?php echo $movie->id?>">
									  		<img class="media-object" src="<?php echo LOCAL_POSTER_PATH . 'w185' . $movie->poster_path; ?>" alt="test">
											</a>
									  </div>
									  <div class="media-body media-middle">
									    <p class="media-heading"><?php echo htmlspecialchars( $movie->title )?></p>
									    <p class="media-overview"><?php echo htmlspecialchars( $movie->overview )?></p>
									  </div>
									</div>
							<?php endif; ?>
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
	margin-top: 50px;
}
.poster-wall img.wall {
	/* display: block; */
	float: left;
	width: calc( 100% / <?php echo DESIGN_WALL_COL ?> - 1% );
	margin: 0.5%;
	text-align: center;
	text-decoration: none;
	box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.5);
}
a i {
	transition: 0.2s;
}
a i:hover {
	color: black;
}

.media {
  height: 152px;
	margin-bottom: 10px;
	border: 1px solid #24282C;
	border-radius: 5px;
	overflow: hidden;
	background-color: rgba(0, 0, 0, 0.05);
	box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.4);
}
.media-body{
	/* padding: 10px 30px 10px 10px; */
	overflow: hidden;
}
img.media-object {
  height: 150px;
}
.media-heading {
	font-size: 14px;
	font-weight: bold;
	padding: 10px;
	background: #24282C;
	color: #DDD;
}
.media-overview {
	font-size: 14px;
	margin: 10px 30px 10px 10px
}
</style>

<script type="text/javascript">

jQuery(document).ready(function($) {
	$(".media-body p").each( function (index, value) {
		var text = $(value).text().substring(0,397);
		$(value).text(text + "…");
	});

});
</script>
