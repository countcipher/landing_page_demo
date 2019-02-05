<?php 

include "db.php";

//Below had to be changed to a POST for GoDaddy; GD limits POST
$search = $_GET['leviathan'];

// just this will send what is typed in the input to #result
// echo $search;

if(!empty($search)){
    
    
    // $query = "SELECT * FROM people WHERE name LIKE '%$search%'";
    $query = "SELECT * FROM people WHERE name LIKE '%$search%' OR phone LIKE '%$search%' ORDER BY name, phone";
    
    
    $search_query = mysqli_query($connection, $query);
    
    if(!$search_query){
        
        die("QUERY FAILED ".mysqli_error($connection));
        
    } ?>
    
    <?php while($row = mysqli_fetch_assoc($search_query)) : ?>
           
        <li><?php echo $row['name'].", "; echo $row['phone'].", "; ?>ID: <?php echo $row['id']; ?></li>
           
    <?php endwhile; ?>
            
<?php }

?>