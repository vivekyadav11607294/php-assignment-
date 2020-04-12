<?php include 'database.php'; ?>

<?php
if (isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$email = $_POST["email"];
	$id = $_POST["id"];



	$query = "INSERT INTO `users`(id,first_name, last_name,email)
					VALUES('$id','$first_name','$last_name','$email')";


	$insert_row = $mysqli->query($query) or die($mysqli->error . __LINE__);
	if ($insert_row) {
		printf("Inserted Successfully");
	} else {
		die('Error : (' . $mysqli->errno . ') ' . $mysqli->error);
	}
}




?>
<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <nav class="teal lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Add Data</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Display Data</a></li>
            </ul>



            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <form class="card-panel col s12" action="add.php" method="POST">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" name="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" name="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="ID" name="id" type="text" class="validate">
                        <label for="ID">ID</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" name="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <button type="submit" name="submit" class="waves-effect waves-light btn-large">Submit</button>

            </form>
        </div>
    </div>



    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>