<?php 
   
  //filter 
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); 
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING); 
  $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING); 
   
  /* 
  INSERT INTO table_name (column1, column2, column3, ...) VALUES ('value1', value2, value3, ...);
  */ 

  if (isset($action) && $action === 'insert') { 

    $query = " 
      INSERT INTO lyhwhl_users (username, password, groups, added, status)  
      VALUES ('" . $email . "', '" . $password . "', 99, '" . date('Y-m-d H:i:s') . "', 1) 
    "; 

    ?><div class="alert alert-info">Query: <?php echo $query; ?></div><?php  
   
    if (mysqli_query($link, $query) === TRUE) { 
      ?><div class="alert alert-success">Row inserted</div><?php 
    } else { 
      ?><div class="alert alert-danger">Row not inserted</div><?php 
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
  <button type="submit" class="btn btn-primary" name="action" value="insert">Submit</button> 
</form>