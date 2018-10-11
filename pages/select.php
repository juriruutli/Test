<?php 

$allUsers = []; 

/* 
    SELECT column1, column2, ... 
    FROM table_name; 
*/ 
$query = "SELECT * FROM lyhwhl_users"; // * means all columns 

$result = mysqli_query($link, $query); 

// Associative array 
if (isset ($result) && $result->num_rows > 0) { 
    while ($row = mysqli_fetch_assoc($result)) { 

        $allUsers[] = [ 
            'ID' => $row['ID'],
            'username' => $row['username'], 
            'password' => $row['password'], 
            'added' => $row['added'], 
        ]; 
    }     
} 

?> 

<table class="table"> 
    <tr> 
        <th>Username</th> 
        <th>Password</th> 
        <th>Added</th> 
    </tr> 
    <?php if (!empty($allUsers)) : foreach ($allUsers as $user) : ?> 
        <tr> 
            <td><?php echo $user['username'] ?></td> 
            <td><?php echo $user['password'] ?></td> 
            <td><a class="btn btn-primary" href="index.php?page=update&ID=<?php echo $user['ID']; ?>">Edit</a></td> 
            <td><a class="btn btn-danger" href="index.php?page=delete&ID=<?php echo $user['ID']; ?>">Delete</a></td> 
            <td><?php echo date("d.m.Y H:i:s", strtotime($user['added'])); ?></td> 

        </tr> 
    <?php endforeach; endif; ?>  
</table>