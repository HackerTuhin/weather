<?php
include("database/db.php");
session_start();
if (!isset($_SESSION['pid'])) {
      header("location:index.php");  
}
    $id = $_SESSION['pid'];
    $sql = "SELECT * from people where id='$id'";
    $rs = $con->query("$sql");
    $row=$rs->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <a class="navbar-brand" href="user.php">
                            <img src="picture/<?php echo $row['picture'] ?>" style="width:40px;" class="rounded-pill">
                        </a>
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cart.php">Cart<sup><span class="badge rounded-pill bg-danger"><?php echo '0'; ?></span></sup></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact us</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="btn btn-danger" href="logout.php">Log out</a>
                            </li>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="row">

                </div>
            </div>
            <div class="col-md-9">
                <div class="row">

                </div>
            </div>
        </div>
    </div>

</body>

</html>