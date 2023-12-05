<!DOCTYPE html>
<html>
<head>
    <title>A Web Page</title>
</head>
    <body>

    <form method='post'>
        <label for="fname">ID:</label><br>
            <input type="text" id="id" name="id"/><br>
        <label for="lname">Name:</label><br>
            <input type="text" id="name" name="name"/><br>
        <label for="lname">Email:</label><br>
            <input type="text" id="email" name="email"/><br><br>
            <input type="submit" name="button1" value="Submit"/> 
    </form> 


    <h2>Student Table:</h2>
    <table style="width: 50%">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    <?php
        $hostname = "localhost";
        $username = "root";
        $password ="";
        $dbname ="StudentRecord";

        $conn = new mysqli($hostname, $username, $password, $dbname);

        if ($conn->connect_error)
        {
            die("Conection Failed");
        }

        if(isset($_POST['button1'])) { 
            insertInfo($conn);
        } 

        function insertInfo($conn){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $sql = "Insert into users values($id, '$name', '$email')";

            if ($conn->query("$sql") == TRUE) {
                echo "Record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        
        $sql = "Select * from users;";
        $result = $conn->query("$sql");
        while($row=$result->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>" .$row["id"] ."</td>"; 
            echo "<td>" .$row["name"] ."</td>"; 
            echo "<td>" .$row["email"] ."</td>"; 
            echo "</tr>";
        }
    ?>
    </body>
</html>