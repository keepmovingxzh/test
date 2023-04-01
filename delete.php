<?php
        session_start();
        if(!$_SESSION['flag'])
        {
            echo "<script>
            alert('请登录');
            window.location.href = 'text.php';
            </script>";
        }
        else{
        $con = mysqli_connect("localhost","root","xzh040107");
        mysqli_select_db($con,"text");
        $result=mysqli_query($con,"select * from user");
        $text=$_GET['id'];
        echo $text;
        $sql="delete from user where text ='".$text."'";
        if(mysqli_query($con,$sql))
        {
            echo "删除成功";
        }
        }
?>
