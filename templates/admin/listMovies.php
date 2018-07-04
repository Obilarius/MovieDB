<?php include "templates/include/header.php" ?>

      <div id="adminHeader">
        <h2>Widget News Admin</h2>
        <p>You are logged in as <b><?php #echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>Log out</a></p>
      </div>

      <h1>Alle Filme</h1>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>


<?php if ( isset( $results['statusMessage'] ) ) { ?>
        <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>

      <table>
        <tr>
          <th>Letzte Änderung</th>
          <th>Film</th>
        </tr>

<?php foreach ( $results['movies'] as $movie ) { ?>

        <tr onclick="location='admin.php?action=editMovie&amp;movieId=<?php echo $movie->id?>'">
          <td><?php echo date('j M Y', strtotime($movie->updated_at)) ?></td>
          <td>
            <?php echo $movie->title?>
          </td>
        </tr>

<?php } ?>

      </table>

      <p><?php echo $results['totalRows']?> Film<?php echo ( $results['totalRows'] != 1 ) ? 'e' : '' ?> instgesamt.</p>

      <p><a href="admin.php?action=newArticle">Neuen Film hinzufügen</a></p>

<?php include "templates/include/footer.php" ?>
