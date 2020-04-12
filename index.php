<?php include "database.php" ?>
<?php


$query = "SELECT * from users ORDER BY first_name DESC ";
$result = $mysqli->query($query) or die($mysqli->error . __LINE__);



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
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Display Data</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="add.php">Add Data</a></li>
            </ul>



            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <div class="container">
        <div class="row card-panel large teal lighten-1 white-text">
            <table class="striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>

                    </tr>
                </thead>

                <tbody>
                    <?php while ($row = $result->fetch_assoc()) : ?>

                    <tr>
                        <td> <?php echo $row['id']; ?></td>
                        <td> <?php echo $row['first_name']; ?></td>
                        <td> <?php echo $row['last_name']; ?></td>
                        <td> <?php echo $row['email']; ?></td>
                    </tr>
                    <?php endwhile; ?>


                </tbody>
            </table>
        </div>
    </div>



    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>