<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="modal fade" id="login">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Enter Your Details</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="login.php" method="POST">
                        <div class="mb-3 mt-3">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control"  placeholder="Enter email/Mobile no." name="email_phone">
                        </div>
                        <div class="mb-3">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="l_pass">
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                        </div>
                        <input type="submit" name="l_submit" value="Submit" class="btn btn-success">
                        <input type="reset" name="l_reset" value="Clear" class="btn btn-danger">
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="signup">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Register Yourself</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="register.php" method="POST" enctype="multipart/form-data">
                        <p>
                            Enter your name
                            <input type="text" name="name" class="form-control">
                        </p>
                        <p>
                            Enter your gender
                            <br>
                            <label><input type="radio" name="gender" value="male">male</label>
                            <label><input type="radio" name="gender" value="female">female</label>
                        </p>
                        <p>
                            Enter Phone no.
                            <input type="tel" name="phone" class="form-control">
                        </p>
                        <p>
                            Enter your email
                            <input type="email" name="email" class="form-control">
                        </p>
                        <p>
                            Enter a Password
                            <input type="password" name="pass" class="form-control">
                        </p>
                       
                        <p>
                            Choose Your location
                            <br>
                            <label><input type="checkbox" name="loc[]" value="kolkata">Kolkata</label>
                            <label><input type="checkbox" name="loc[]" value="mumbai">Mumbai</label>
                            <label><input type="checkbox" name="loc[]" value="delhi">Delhi</label>
                        </p>
                        <p>
                            upload your photo
                            <br>
                            <input type="file" name="pic">
                        </p>
                        <p>
                            <input type="submit" name="submit"  value="Submit" class="btn btn-success">
                            <input type="reset" name="reset" value="Clear" class="btn btn-danger">
                        </p>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</body>

</html>