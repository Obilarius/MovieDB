<!DOCTYPE html>
<html>
<head>
	<title><?php echo htmlspecialchars( $results['pageTitle'] )?></title>

		<link rel="stylesheet" type="text/css" href="reset.min.css">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-87DrmpqHRiY8hPLIr7ByqhPIywuSsjuQAfMXAE0sMUpY3BM7nXjf+mLIUSvhDArs" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="window-margin">
		<div class="window">

			<?php include "sidebar.php"; ?>

			<div class="main" role="main">

				<?php include "topbar.php"; ?>
