<?php
include "config.php";
/*




while($username = mysqli_fetch_array($result))
    echo $this->username['username'].'<br/>';
*/
$sql    = "SELECT username FROM `users` ORDER BY ASC ";
$result = mysqli_query($sql);
echo '<table>';
while($username = mysqli_fetch_array($result)){
    echo '<tr>
        <td><font size="2" face="Arial" color=#EBEBEB>' .$username['username'].'</td>
        </tr>';
}
echo '</table>';