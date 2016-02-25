<?php

Include('config.php');

if (isset($_REQUEST['submit']) != '') {
    if ($_REQUEST['name'] == '' || $_REQUEST['email'] == '' || $_REQUEST['password'] == '' || $_REQUEST['repassword'] == '') {
        Echo "please fill the empty field.";
    } else {
        $sql = "INSERT INTO $database(name,email,password) values('" . $_REQUEST['name'] . "', '" . "', '" . $_REQUEST['password'] . "', '" . "')";
        $res = mysqli_query($sql);
        if ($res) {
            Echo "Record successfully inserted";
        } else {
            Echo "There is some problem in inserting record";
        }

    }
}

?>

<html>
<head>
    <br>
    <title>REGISTRATION FORM</title>
<body bgcolor="#fff8dc">
<div align="center">

    <form id='register' action='Hello.php' method='post' accept-charset='UTF-8'>
        <fieldset>
            <legend><b>Register</b></legend>
            <input type='hidden' name='submitted' id='submitted' value='1'/>
            <label for 'name'>Your full name*</label>

            <input type='text' name='name' id='name' maxlength="50"/>
            <label for='username'> User name*</label>

            <input type='text' name='username' id='username' maxlength="50"/>


            <label for='password'>Password*</label>

            <input type='password' name='password' id='password' maxlength="50"/>
            <input type='submit' name='Submit' value='Submit'/>

        </fieldset>
    </form>


</div>
</body>
</head>
</html>
