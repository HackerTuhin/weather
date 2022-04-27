<?php
include("database/db.php");
session_start();
if (!isset($_SESSION['pid'])) {
      header("location:index.php");  
}
    $id = $_SESSION['pid'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css" type="text/css">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>show</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <a href="dashboard.php" class="btn btn-primary">back to dashboard </a>
                <a href="logout.php" class="btn btn-danger">logout </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>gender</th>
                            <th>phone</th>
                            <th>email</th>
                            <th>password</th>
                            <th>location</th>
                            <th>profile picture</th>
                            <th>edit</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                            <?php
                            $sql = "SELECT * from people where id='$id'";
                            $rs = $con->query("$sql");
                            while($row=$rs->fetch_assoc())
                            {      
                            ?>  
                            <tr>               
                            <td><?php echo $row['name']  ?></td>
                            <td><?php echo $row['gender']  ?></td>
                            <td><?php echo $row['phone']  ?></td>
                            <td><?php echo $row['email']  ?></td>
                            <td><?php echo $row['password']  ?></td>
                            <td><?php echo $row['location']  ?></td>
                            <td>
                                <img src="picture/<?php echo $row['picture'] ?>" >
                            </td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-primary ">edit</a>
                            </td>
                          
                          <?php  }  ?>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</body>
</html>