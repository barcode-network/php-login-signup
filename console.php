<?php
    session_start();
    // print_r($_SESSION["authenticated_user"]);
    echo 'Welcome back, '.$_SESSION["authenticated_user"]['name'];
?>
<table>
<tr>
    <th>Name</th>
    <th>Licence #</th>
    <th>Address</th>
</tr>
<tr>
    <td><?=$_SESSION["authenticated_user"]['name'];?></td>
    <td><?=$_SESSION["authenticated_user"]['licence_num'];?></td>
    <td><?=$_SESSION["authenticated_user"]['address'];?></td>
</tr>
</table>

<a href="logout.php">Logout</a>