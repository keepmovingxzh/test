<script type="text/javascript" src="main.js"></script>
<?php
    session_start();
    $_SESSION['flag']=0;
    $con = mysqli_connect("localhost","root","xzh040107");
    mysqli_select_db($con,"text");
    $result=mysqli_query($con,"select * from admin");
    $row = mysqli_fetch_array($result);
    if($row['user']==$_POST['account']&&$row['pastword']==$_POST['word'])
    {
        echo "密码正确";
        $_SESSION['flag']=1;
    }
    else
    echo "密码错误";
?>
<script>
         setTimeout(function(){window.location.href='index.php';},1000);
</script>
