<?php 

/* 
    DELETE FROM table_name 
    WHERE condition; 
*/ 

$query = " 
    DELETE FROM lyhwhl_users 
    WHERE ID = 1 
"; // Delete row where ID equals 1 

if (mysqli_query($link, $query) === TRUE) { 
    header('Location: http://ubuntu.ametikool.ee/~janek/TA17/veeb/mysql/project/index.php'); //redirect to url
} else { 
    ?><div class="alert alert-danger">Row not Deleted</div><?php 
}