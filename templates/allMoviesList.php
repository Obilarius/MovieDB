<?php include "templates/include/header.php" ?>

      <h1>Alle Filme</h1>

      <ul id="headlines" class="archive">

<?php foreach ( $results['movies'] as $movie ) { ?>

        <li>
          <h2>
            <span class="pubDate"><?php echo $movie->id ?></span><a href=".?action=viewArticle&amp;articleId=<?php echo $movie->id?>"><?php echo htmlspecialchars( $movie->title )?></a>
          </h2>
          <p class="summary"><?php echo htmlspecialchars( $movie->overview )?></p>
        </li>

<?php } ?>

      </ul>

      <p><?php echo $results['totalRows']?> Filme<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> instgesammt.</p>

      <p><a href="./">Zurück</a></p>

<?php include "templates/include/footer.php" ?>
