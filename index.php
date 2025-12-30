<html>
    <head>
        <title>PHP Learning</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
<?php   

require "../config.php";
$query = "SELECT * FROM somlalit_user";
$result = mysqli_query($conn, $query);

?>


<h2>Users List</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th> FirstName</th>
            <th>LastName</th>
            <th>Mobile No.</th>
            <th>Email</th>
            <th>Address</th>
            <th>Class</th>
            <th>Course</th>
            <th>Joining Year</th>
            <th>Date of Birth</th>
            <th>Blood Group</th>    
            <th>action</th>    
        </tr>
    </thead>
    <tbody>
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['user_first_name']; ?></td>
            <td><?php echo $row['user_last_name']; ?></td>
            <td><?php echo $row['user_mon']; ?></td>
            <td><?php echo $row['user_email']; ?></td>
            <td><?php echo $row['user_address']; ?></td>
            <td><?php echo $row['user_class']; ?></td>
            <td><?php echo $row['user_course']; ?></td>
            <td><?php echo $row['user_joining_year']; ?></td>
            <td><?php echo $row['user_dob']; ?></td>
            <td><?php echo $row['user_bloofgroup']; ?></td>
            <td><a href="view.php?id=<?php echo $row['user_id']; ?>" class="view-btn">view</a>
                <a href="delete_user.php?id=<?php echo $row['user_id']; ?>" class="delete-btn">Delete</a>
                <a href="edit_user.php?id=<?php echo $row['user_id']; ?>" class="update-btn">Update</a>
        </td>
            
            
        </tr>
<?php } ?>
    </tbody>
</table>

<a href="add_somlalit_user.php" class="add-user-button">Add New User</a>
</body>
</html>