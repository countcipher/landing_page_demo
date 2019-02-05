<?php
    session_start();  
    


    include "db.php";

    //Query for getting credentials data
    $query = "SELECT * FROM credentials WHERE id = 1";
    $query_credentials = mysqli_query($connection, $query);

    $query_credentials = mysqli_fetch_assoc($query_credentials);

    $db_username = $query_credentials['username'];
    $db_password = $query_credentials['password'];


    //Query for table data
    $query = "SELECT * FROM people ORDER BY id ASC";
    $query_read = mysqli_query($connection, $query);


    //Query for list data for deleting
    $query = "SELECT * FROM people ORDER BY id ASC";
    $query_list = mysqli_query($connection, $query);

    if(isset($_POST['submit'])){
        //The following commented code works perfectly
        //$username = $_POST['username'];
        //$password = $_POST['password'];
        
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        
        if($username == $db_username && $password == $db_password){
            $_SESSION['active'] = 1;
        }else{
            session_destroy();
            header("Location: admin_login.php");
            die();
        }
        
    }

    if($_SESSION['active'] != 1){
            session_destroy();
            header("Location: admin_login.php");
            die();
    }

?>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Demo</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
    
    <style>
    
    
        body{
            background: url("images/plumber.jpg");
            background-size: cover;
            background-attachment: fixed !important;
        }
        li{
            list-style-type: none;
        }
        #modal{
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,.9);
            position: fixed;
            z-index: 99;
            display: none;
        }
        #modal h2{
            color: #fff;
            font-family: sans-serif;
        }
        #modal button{
            display: block;
            margin: auto;
            margin-top: 25px;
        }
        #modal li{
            color: #fff;
            font-size: 20px;
        }
        #modal ul{
            /*background: red;*/
            width: 100%;
        }
        #search_results{
            /*background: green;*/
            width: 100%;
            text-align: center;
        }
        .form-div{
            text-align: center;
            background: rgba(255,255,255,.7);
            padding: 10px;
            margin-bottom: 15px;
        }
        
        
    
    </style>
    
</head>
<body>

<div id="modal">
   <div class="col-xs-6 col-xs-offset-3">
       <h2>Search</h2>
        <div class="form-group">
            <input type="text" class="form-control" id="search">
            <button id="exit_modal" class="btn btn-danger">Exit Search</button>
        </div>
        
        <div style="text-align: center" id="search_results" class="col-xs-8">
            <ul id="result">
                
            </ul>
        </div>
        
    </div>
</div><!--end of search modal-->
   
 
  <div class="container-fluid">
    <div class="row">
        <div id="admin-controls" class="admin col-xs-4">
            <form id="delete-form" action="admin_delete_record.php" method="post">
               <h4>Delete Record</h4>
                <select name="id" id="">
                    <option value="" disabled selected hidden>Entry to Delete...</option>

                    <?php while($row = mysqli_fetch_assoc($query_list)) : ?>

                    <option value="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>"><strong><?php echo $row['id']; ?></strong>: <?php echo $row['name']; ?></option>

                    <?php endwhile; ?>

                </select>
        
                <input id="delete-btn" class="btn btn-info" type="submit" value="Delete" name="delete">
        
            </form>
            
            <!-- Record Search Engine with AJAX-->
               
                <div class="form-div">
                   <h4>Record Search</h4>
                   <!-- <div style="width: 100%; padding: 0; text-align: center" class="input-group">
                        <input style="display: block; margin: auto; width: 100%" name="search" type="text" id="search" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit_search" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>-->
                    
                    <button id="search_records" class="btn btn-info">Search Records</button>
                    
                </div><!--search form-->
                <!-- /.input-group -->
            
            
            <form action="admin_update_credentials.php" method="post" id="update-credentials-form">
                <div style="text-align: center" class="form-group">
                   <h4 style="text-align: center">Update Username & Password</h4>
                   
                   <?php if(isset($_GET['error'])) : ?>
            
                        <div class="error">
                            <?php echo $_GET['error']; ?>
                        </div>

                    <?php endif; ?>
                   
                    <label for="username">Username:</label>
                    <input type="text" name="username">
                </div>
                
                <div style="text-align: center" class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password">
                </div>
                
                <input class="btn btn-info" type="submit" value="Update" name="submit">
                
            </form>
            
            <form id="logout-form" action="admin_logout.php" method="post">
                <input class="btn btn-info" type="submit" name="submit" value="Log Out">
            </form>
            
        </div>
        
        <div id="table-container" class="col-xs-8">
           <div style="overflow: scroll !important; height: 500px">
                <table>
                <tr>
                    <th>
                        Date
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Phone
                    </th>
                    <th>
                        ID
                    </th>
                </tr>

                <?php while($row = mysqli_fetch_assoc($query_read)) : ?>
                    <tr>
                        <td>
                            <?php echo $row['date']; ?>
                        </td>
                        <td>
                            <?php echo $row['name']; ?>
                        </td>
                        <td>
                            <?php echo $row['phone']; ?>
                        </td>
                        <td>
                            <?php echo $row['id']; ?>
                        </td>
                    </tr>
                <?php endwhile; ?>

            </table>
           </div>
           
        </div>
        
    </div><!--end of row-->

  </div>

<script>

document.getElementById("search_records").onclick = function(){
    
  //document.getElementById("modal").style.display = "block";
    $("#modal").slideDown();
    
};
    
document.getElementById("exit_modal").onclick = function(){
  
    //document.getElementById("modal").style.display = "none";
    $("#modal").slideUp();
    
};

    
$("#search").keyup(function(){

    var search = $("#search").val();  //grabs the value of input #search and makes it into a variable

    // this checks to see if it's working:  alert(search);

    $.ajax({

        url: "search.php", //send request to this URL
        data: {leviathan: search}, //send superglobal whose key is the value of the variable
        type:  "GET", // type of request; had to change from POST because of GoDaddy limiting POST
        success: function(data){ //success equals this function with 'data' passed in

            if(!data.error){ //if there is no error

                $("#result").html(data);  //this inserts the search data into the inner html of the h2 tag #result

            }

        }
    });


});
    
    
</script>
      
</body>
</html>