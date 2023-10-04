<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>View Hours</title>
</head>
<body>
    <header>
        <h1>View  Worked Hours</h1>
</header>
    <main>
        <nav>
            <ul>
                <li><a href="add.html">Add Employee Information</a></li>
                <li><a href="view.php">View Employee Information</a></li>
            </ul>
        </nav>
        <div class="logo">
            <link rel="stylesheet" href="pexels-enes-sözen-14742693.jpg">
        </div>
</main>
    
    <footer>
        
    </footer>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']='POST')
{
    $name=$_POST['name'];
    $id=$_POST['id'];
    $hours=$_POST['hours'];

    $servername="localhost";
    $username="root";
    $password="Helly4304";
    $database="information";

    $conn=mysqli_connect($servername, $username, $password, $database);

   
    if(!$conn)
    {
        die("Sorry".mysqli_connect_error());
    }
    else
    {
   

        $sql="INSERT INTO `employe` (`name`, `id`, `hours`) VALUES ('$name', '$id', '$hours')";
        $result=mysqli_query($conn,$sql);

        if($result)
        {
            echo "Data inserted successfully";

        }
        else{
            echo "Data not inserted due to  ".mysqli_error($conn);
        }
    }

}
        if($_SERVER['REQUEST_METHOD']='POST')
        {
            $name=$_POST['name'];
            $id=$_POST['id'];
            $hours=$_POST['hours'];

            $servername="localhost";
            $username="root";
            $password="Helly4304";
            $database="information";

            $conn=mysqli_connect($servername, $username, $password, $database);

           
            if(!$conn)
            {
                die("Sorry".mysqli_connect_error());
            }
            else
            {
                echo "Connection Successful";
                $sql= "SELECT * FROM `employe`";
                $result = mysqli_query($conn, $sql);

                $num = mysqli_num_rows($result);
                echo "</br>";
                echo $num;      
            }

            while($row = mysqli_fetch_assoc($result))
    {
        echo "<br/>";
        echo "Employee Information";
        echo "<br/>";
        echo "name".$row['name']. "id".$row['id']. "hours".$row['hours'];
         }

}
?>