<?php include "templates/include/header.php" ?>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
    <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>


<?php if ( isset( $results['statusMessage'] ) ) { ?>
    <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>

<div class="movie-list">
	<div class="title-bar">
		<div class="left">
			<p class="bold">Administration Filme</p>
			<p class="grey"><?php echo $results['totalRows']?> Filme<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> gesammt</p>
		</div> <!-- left -->
	</div> <!-- title-bar -->



	<div class="container">
    <table class="table table-striped table-bordered compact hover">
      <thead>
        <tr>
          <th>Erstellt am</th>
          <th>ID</th>
          <th>Imdb ID</th>
          <th>Title</th>
          <th>Erschienen</th>
          <th></th>
        </tr>
      </thead>
      <tbody>

      <?php foreach ( $results['movies'] as $movie ) { ?>
 <!-- onclick="location='admin.php?action=editMovie&amp;movieId=<?php #echo $movie->id?>'" -->
        <tr>
          <td style="text-align: center;"><?php echo date('Y/m/d', strtotime($movie->created_at)) ?></td>
          <td><a href="https://www.themoviedb.org/movie/<?php echo $movie->id ?>"><?php echo $movie->id ?></a></td>
          <td style="text-align: center;"><a href="https://www.imdb.com/title/<?php echo $movie->imdb_id ?>"><?php echo $movie->imdb_id ?></a></td>
          <td><?php echo $movie->title ?></td>
          <td style="text-align: center;"><?php echo date("Y/m/d", strtotime($movie->release_date)) ?></td>
          <td style="text-align: center;">
            <span class="fa-stack" onclick="location='./?action=editMovie&amp;movieId=<?php echo $movie->id?>'">
              <i class="fas fa-square fa-stack-2x" style="color:#279CEB"></i>
              <i class="fal fa-edit fa-stack-1x fa-inverse"></i>
            </span>
            <span class="fa-stack">
              <i class="fas fa-square fa-stack-2x" style="color:#FF4B4B"></i>
              <i class="fal fa-trash-alt fa-stack-1x fa-inverse"></i>
            </span>
        </tr>

      <?php } ?>

      </tbody>
    </table>
	</div>
</div>

<?php include "templates/include/footer.php" ?>

<style media="screen">
.container {
  margin-top: 50px;
  margin-bottom: 50px;
}
.table td {
    padding: 0 .75rem;
    vertical-align: middle;
}
.table td .fa-stack {
  cursor: pointer;
}
</style>

<script type="text/javascript">
$(document).ready(function() {
  $('.table').DataTable( {
    "order": [[ 3, "asc" ]],
    "language": {
      "lengthMenu": "Zeige _MENU_ Einträge pro Seite",
      "zeroRecords": "Leider nichts gefunden",
      "info": "Seite _PAGE_ von _PAGES_",
      "search": "Suche:",
      "paginate": {
          "first":      "Erste",
          "last":       "Letzte",
          "next":       "Weiter",
          "previous":   "Zurück"
      },
      "infoEmpty": "No records available",
      "infoFiltered": "(filtered from _MAX_ total records)"
    },
    "columnDefs": [
      { "width": "80px", "targets": 0 },
      { "width": "55px", "targets": 2 },
      { "width": "70px", "targets": 4 },
      { "width": "55px", "targets": 5 }
    ],
    "lengthMenu": [ 25, 50, 75, 100 ]
  });



}); // document ready
</script>
