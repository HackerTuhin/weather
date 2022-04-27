<?php 
include("logup_modal.php"); 
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
                    <a class="navbar-brand" href="warning.php">
                        <img src="picture/user.png" style="width:40px;" class="rounded-pill">
                    </a>
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="warning.php">Cart<sup><span class="badge rounded-pill bg-danger"><?php echo '0'; ?></span></sup></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact us</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#login">Log in</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup">sign up</a>
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