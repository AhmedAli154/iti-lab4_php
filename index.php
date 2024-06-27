<?php
//  include 'form.php';

?>
<html>
 <head>
 <style>
table,th , td {
  border:1px groove gray;
  border-collapse: collapse;
  width: 800px;
  text-align:center;
  background-color:#E5E5E5;

  
}

</style>
</head>
<body>
    <h1 style = "display:inline-block"> User Details </h1>

    <a href="./form.php"> <button >Add New User</button></a>
    <?php
    
    require './dbcon.php'; //! Connect to database

    $sql = "SELECT * FROM students";

    $res = mysqli_query($link, $sql); //! all students
    
    if(!$link){
        die('Could not get data: ' . mysqli_error($link)); 
    }

    

    ?>
        
    <table >
        <thead>
         <tr >
        <td>#</td>
        <td>Name</td>
        <td>Email</td>
        <td>Gender</td>
        <td>Mail status</td>
        <td>Action</td>
        </tr>   
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($res) > 0){ 
            while($row = mysqli_fetch_assoc($res)){ 
                //? row ---> ['name': ahmed, 'email': sad@as.com, 'gender': male]
                echo '<tr>';
                echo '<td>' . $row['ID'] . '</td>' .
				'<td>' . $row['name'] . '</td>' .
				'<td>' . $row['email'] . '</td>' .
				'<td>' . $row['gender'] . '</td>' .
				'<td>' . $row['status'] . '</td>';
			echo '</tr>';
            }
        } else {
            echo "no data";
        }
        ?>

        </tbody>
    </table>

</body>




</html>