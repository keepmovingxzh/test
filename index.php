<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta http-equiv="content-type" />
		<meta content="text/html" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
		<meta name="referrer" content="no-referrer">
		<link rel="stylesheet" type="text/css" href="mainstyle.css" />
    </head>
    <body>
		<?php
		    session_start();
		    ?>
		<nav style="height: 1.875rem; margin-bottom: 8px;background-color: #FFFFFF;margin-bottom: 0.625rem;
		border-bottom: 4px solid #00000010;box-shadow: 0px 10px 5px #888888;">
		<p class="rtext">
		<a href="sign_in.html" class="tech">管理员登陆</a>
		</p>
		</nav>
		<br/>
		
    <?php
        $con = mysqli_connect("localhost","root","xzh040107");
        mysqli_select_db($con,"text");
        $result=mysqli_query($con,"select * from user");
        ?>
	<div style="background-image: linear-gradient(#DFDFDF,#e0c1ff);width: 80%;position: relative;left: 10%;padding-top: 0.3rem;">
    <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<div class='line'>";
            echo $row['name']."&nbsp;&nbsp;&nbsp;".$row['pulldate'];
            echo "<br /><p class='textrow'>";
            echo $row['text'];
            echo "</p>";
            $inf="<a href='./delete.php?id=".$row['text']."'>删除</a>";
            echo $inf;
            /*echo "<form action='delete.php' method='post'>
                <input type='submit' value='删除'>
                </form>
                ";*/
            echo "</div>";
        }
    ?>
	
    <div class="from">
    <form style="position: relative;left: 0.5rem;" action="insert.php" method="post">
    <br>
        ID:&nbsp;
        <input type="text" name="name"><br>
        <textarea style="width: 60%;height: 4rem;border-radius: 0.25rem;border: gray 0.03125rem solid;margin: 0.3125rem;" 
		type="text" name="txt"></textarea>&nbsp;
        <input style="height: 3.5rem;width: 3.5rem;color: #FFFFFF;background-color: #00BFFF;border-radius: 0.3125rem;
		border: none;position: relative;top: -2.5rem;white-space: normal;font-size: medium;"
		 type="submit" value="发表&#13;评论">
    </form>
    </div>
    <?php
    ?>
    </div>
    </body>
</html>
