<?php

$conn = mysqli_connect('localhost','user','user','ajax');

if( ! $conn) 
{
    die('Error: no connection with DB'.mysqli_error($conn));
}   

    $search = $_POST['search'];
    //$search = mysqli_real_escape_string($conn,$search);
    
    if( ! empty($search) ) 
    {
        $query = "SELECT * FROM cars WHERE cars LIKE '$search%' ";
        $search_query = mysqli_query($conn, $query);
    }   
    
        if( ! $search_query )
        {
            die('Query failed: => '.mysqli_error($conn));
        }

        while($row = mysqli_fetch_array($search_query)) 
        {
            $cars = $row['cars'];
            ?>
            <ul>
                <li class="list-unstyled">
                   <?php echo $cars; ?>
                </li>
            </ul>
        
           <?php }





?>