<?php
        $con = mysqli_connect("localhost","root","xzh040107");
        mysqli_select_db($con,"text");
        echo $_POST["name"];
        echo "<br>";
        echo $_POST["txt"];
        $time=date('Y-m-d H:i:s');
        $sql="INSERT INTO user VALUES ('".$_POST["name"]."','".$_POST["txt"]."','".$time."')";
        echo $sql;
        if(mysqli_query($con,$sql))
            echo "发布成功";
    ?>
    <script>
        window.location="text.php";
        alert("发布成功");
    </script>
