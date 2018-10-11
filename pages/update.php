<?php 

    //filter andmetele 
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); 
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING); 
    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING); 
    $ID = filter_input(INPUT_GET, 'ID', FILTER_VALIDATE_INT);
   
    /* 
    UPDATE table_name 
    SET column1 = value1, column2 = value2, ... 
    WHERE condition; 
    */ 

    if (isset($action) && $action === 'update') { 

        //sql lause 
        $query = " 
            UPDATE lyhwhl_users  
            SET username = '" . $email . "',  password = '" . $password . "' 
            WHERE ID = 2 
        "; // change row where ID equals 1 

        ?><div class="alert alert-info">Query: <?php echo $query; ?></div><?php  
     
        //mysqli_query is execute for query 
        if (mysqli_query($link, $query) === TRUE) { 
            ?><div class="alert alert-success">Row Updated</div><?php 
        } else { 
            ?><div class="alert alert-danger">Row not updated</div><?php 
        } 
    } 

?> 

<form method="POST"> 
    <div class="form-group"> 
        <label for="exampleInputEmail1">Email address</label> 
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> 
    </div> 
    <div class="form-group"> 
        <label for="exampleInputPassword1">Password</label> 
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> 
    </div> 
    <button type="submit" class="btn btn-primary" name="action" value="update">Update</button> 
</form>