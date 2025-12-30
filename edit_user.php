<?php 
require "../config.php";

$id = $_GET['id'];

$q = "SELECT * FROM somlalit_user WHERE user_id = $id";
$r = mysqli_query($conn, $q);
$user = mysqli_fetch_assoc($r);
?>
<html>
    <head>
        <title>Update User</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <h2>Update User</h2>
        <form action="update_user.php" method="POST">
            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="<?php echo $user['user_first_name']; ?>" required><br><br>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" value="<?php echo $user['user_last_name']; ?>" required><br><br>

            <label for="mobile">Mobile No.:</label>
            <input type="text" id="mobile" name="mobile" value="<?php echo $user['user_mon']; ?>" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $user['user_email']; ?>" required><br><br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $user['user_address']; ?>" required><br><br>

            <label for="class">Class:</label>
            <input type="text" id="class" name="class" value="<?php echo $user['user_class']; ?>" required><br><br>

            <label for="course">Course:</label>
            <input type="text" id="course" name="course" value="<?php echo $user['user_course']; ?>" required><br><br>

            <label for="joining_year">Joining Year:</label>
            <input type="text" id="joining_year" name="joining_year" value="<?php echo $user['user_joining_year']; ?>" required><br><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" value="<?php echo $user['user_dob']; ?>" required><br><br>

            <label for="blood_group">Blood Group:</label>
            <input type="text" id="blood_group" name="blood_group" value="<?php echo $user['user_bloofgroup']; ?>" required><br><br>

            <input type="submit" value="Update User">

    </body>
</html>