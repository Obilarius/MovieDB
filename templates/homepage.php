<?php include "templates/include/header.php" ?>

      <ul id="headlines">

<?php foreach ( $results['movies'] as $movie ) { ?>

        <li>
          <h2>
            <span class="pubDate"><?php echo $movie->id ?></span><a href=".?action=viewArticle&amp;movieId=<?php echo $movie->id?>"><?php echo htmlspecialchars( $movie->title )?></a>
          </h2>
          <p class="summary"><?php echo htmlspecialchars( $movie->overview )?></p>
        </li>

<?php } ?>

      </ul>

      <p><a href="./?action=viewAllMovies">Alle Filme</a></p>

<?php include "templates/include/footer.php" ?>
