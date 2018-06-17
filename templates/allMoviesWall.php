<?php include "templates/include/header.php" ?>

      <h1>Alle Filme (WALL)</h1>

      <div class="moviewall">

        <?php foreach ( $results['movies'] as $movie ) { ?>

        <a href="#" class="item tilt-poster">
          <div class="poster" style="background-image: url('<?php echo LOCAL_POSTER_PATH . 'w185' . $movie->poster_path; ?>')">
            <div class="title"><?php echo $movie->title ?></div>
          </div>

        </a>

      <?php } ?>

      </div>

      <p><?php echo $results['totalRows']?> Film<?php echo ( $results['totalRows'] != 1 ) ? 'e' : '' ?> instgesammt.</p>

      <p><a href="./">Zurück</a></p>

<?php include "templates/include/footer.php" ?>


<style>
  .moviewall {
    margin: 0 auto;
    max-width: 1024px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-bottom: 6em;
    position: relative;
  }

  .moviewall .item {
    margin: 1em;
    text-align: center;
    text-decoration: none;
    position: relative;
    box-shadow: 0 10px 25px 0 rgba(0,0,0,0.5);
  }

  .moviewall .item .title {
    color: rgba(255, 255, 255, 0.5);
    position: absolute;
    width: 100%;
    bottom: 0;
    left: 0;
    font-size: 1em;
    font-weight: 300;
    padding: 30px 0;
    background: linear-gradient(to top, #000, transparent);
    text-transform: uppercase;
    text-align: center;
    /* opacity: 0; */
    transition: .5s;
  }

.moviewall .item:hover {
    transition: .5s;
}

.moviewall .item .title:hover {
  padding-bottom: 50px;
  opacity: 1;
  transition: .5s;
}

  .moviewall .item .poster {
    width: 185px;
    height: 278px;
    background-position: center;
    background-size: cover;
    margin-bottom: .5em;
    box-shadow: 0 10px 17px rgba(0, 0, 0, 0.15);
  }

  .moviewall .item p {
    width: 185px;
    font-size: .9em;
  }
</style>

<script type="text/javascript">
  // $('.tilt-poster').tilt({
  //   // scale: 1.05,
  //   perspective: 500
  // })
</script>
