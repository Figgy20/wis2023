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

    $sql = "Select * from student;";
    $result = $conn->query("$sql");

    if ($result)
    {
        echo "<h2>Student Table:</h2>";
        echo '<table style="width: 100%">';
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>First Name</th>";  
        echo "<th>Last Name</th>"; 
        echo "<th>Date of Birth</th>"; 
        echo "<th>Email</th>"; 
        echo "<th>Phone Number</th>"; 
        echo "</tr>";

        while($row=$result->fetch_assoc())
        {
            echo "</tr>";
            echo "<td>" .$row["StudentID"] ."</td>"; 
            echo "<td>" .$row["FirstName"] ."</td>"; 
            echo "<td>" .$row["LastName"] ."</td>"; 
            echo "<td>" .$row["DateOfBirth"] ."</td>"; 
            echo "<td>" .$row["Email"] ."</td>"; 
            echo "<td>" .$row["PhoneNumber"] ."</td>"; 
            echo "</tr>";
        }
        echo "</table>";
    }

    $sql = "Select * from instructor;";
    $result = $conn->query("$sql");

    if ($result)
    {
        echo "<h2>Instructor Table:</h2>";
        echo '<table style="width: 100%">';
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>First Name</th>";  
        echo "<th>Last Name</th>"; 
        echo "<th>Email</th>"; 
        echo "<th>Phone Number</th>"; 
        echo "</tr>";

        while($row=$result->fetch_assoc())
        {
            echo "</tr>";
            echo "<td>" .$row["InstructorID"] ."</td>"; 
            echo "<td>" .$row["FirstName"] ."</td>"; 
            echo "<td>" .$row["LastName"] ."</td>"; 
            echo "<td>" .$row["Email"] ."</td>"; 
            echo "<td>" .$row["PhoneNumber"] ."</td>"; 
            echo "</tr>";
        }
        echo "</table>";
    }

    $sql = "Select * from course;";
    $result = $conn->query("$sql");

    if ($result)
    {
        echo "<h2>Course Table:</h2>";
        echo '<table style="width: 100%">';
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Course Name</th>";  
        echo "<th>Credits</th>"; 
        echo "</tr>";

        while($row=$result->fetch_assoc())
        {
            echo "</tr>";
            echo "<td>" .$row["CourseID"] ."</td>"; 
            echo "<td>" .$row["CourseName"] ."</td>"; 
            echo "<td>" .$row["Credits"] ."</td>"; 
            echo "</tr>";
        }
        echo "</table>";
    }

    $sql = "Select * from enrollment;";
    $result = $conn->query("$sql");

    if ($result)
    {
        echo "<h2>Enrollment Table:</h2>";
        echo '<table style="width: 100%">';
        echo '<tr>';
        echo '<th>Enrollment ID</th>';
        echo "<th>Student ID</th>";  
        echo "<th>Course ID</th>"; 
        echo "<th>Enrollment Date</th>"; 
        echo "<th>Grade</th>"; 
        echo "</tr>";

        while($row=$result->fetch_assoc())
        {
            echo "</tr>";
            echo '<td' .$row["EnrollmentID"] .'</td>'; 
            echo "<td>" .$row["StudentID"] ."</td>"; 
            echo "<td>" .$row["CourseID"] ."</td>"; 
            echo "<td>" .$row["EnrollmentDate"] ."</td>"; 
            echo "<td>" .$row["Grade"] ."</td>"; 
            echo "</tr>";
        }
        echo "</table>";
    }
?>