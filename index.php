<html>

<head>
    <title> Login page </title>

    <style type="text/css">


        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px
        }

        label {

            font-weight: bold;
            width: 100px;
            font-size: 14px;

        }

        .box {
            border: #666666 solid 1px;
        }
    </style>
</head>

<body bgcolor="#fff8dc">
<div align="center">
    <div style="width:300px; border: solid 1px #333333; "align="left">
        <div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

        <div style="margin:30px">

            <form action='hello.php' method="post">
                <label>User name : </label><input type="text" name="username" class="box"/><br/><br/>
                <label>Password : </label><input type="password" name="password" class="box"/><br/><br/>
                <input type="button" onclick="window.location.href='login.php' " value=" Log in "/><br/><br/>
                <input type="button" onclick="window.location.href='register.php'" value="Register"/><br/>

            </form>

            <div style="font-size:11px" color:#cc0000 margin-top:10px>
                <div>
                </div>
            </div>
        </div>
</body>
</html>