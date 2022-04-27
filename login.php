<?php
session_start();
include("database/db.php");
if(isset($_POST['l_submit'])){
    $ep=$_POST['email_phone'];
    $p=$_POST['l_pass'];
    $sql="SELECT * from people where password='$p' and ( email='$ep' or phone='$ep')";
    $rs=$con->query("$sql");
    if($rs->num_rows>0){
        $row=$rs->fetch_assoc();
        $_SESSION['pid']=$row['id'];
        header("location:dashboard.php");
    }
    else{
        ?>
        <script>
            alert("invalid login credentials");
            window.location="index.php";
        </script>
        <?php
    }
}
else
{
    echo " access denied ";
}

?>