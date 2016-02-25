<?php
include 'config.php';
?>

<body bgcolor="#fff8dc">
<div align="center">
    <div style="width:300px; border: solid 1px #333333; " align="left">
        <div style="background-color:#333333; color:#FFFFFF; padding:3px;" align="middle"><b><?php echo "Hello ".$username?></b></div>

        <div style="margin:30px">

            <form action='hello.php' method="post">
                <input type="button" onclick="window.location.href='Hello.php'" value="Home"/><br/><br>
                <input type="button" onclick="window.location.href='users.php'" value="Show all users"/><br/><br>
                <input type="button" onclick="window.location.href='logout.php'" value="Logout"/><br/><br>


            </form>

            <div style="font-size:11px" color:#cc0000 margin-top:10px>
                <div>
                </div>
            </div>
        </div>
</body>



