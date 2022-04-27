<?php
    session_start();
    include("database/db.php");
    if(isset($_POST['submit'])){
        $n=$_POST['name'];
        $g=$_POST['gender'];
        $ph=$_POST['phone'];
        $e=$_POST['email'];
        $p=$_POST['pass'];
        
        if(isset($_POST['loc']))
        {
            $larr=implode(",",$_POST['loc']);
        }
        else{
            $larr=" ";
        }
        $fl=$_FILES['pic']['name'];
        $farr=explode(".",$fl);
        $rev_fl=array_reverse($farr);
        $ext=$rev_fl[0];
        if($ext=="jpg" || $ext=="jpeg" || $ext="png"){
            $buf=$_FILES['pic']['tmp_name'];
            $fn=time().$_FILES['pic']['name'];
            move_uploaded_file($buf,"picture/".$fn);

            $x="INSERT INTO people SET name='$n',email='$e',phone='$ph', password='$p',gender='$g',location='$larr',picture='$fn'";
            $con->query($x);
            ?>
            <script> 
            alert("Registration successfull , please log in");
            window.location="index.php"; 
            </script>
        <?php
        }
        else{
            ?>
            <script> 
            alert("Wrong file type. select jpg,png,jpeg file");
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