<html>
    <head>
        <title>PHP Learning</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
<?php   

require "../config.php";


$id = intval($_GET['id']);
$query = "SELECT * FROM somlalit_user WHERE user_id = $id";
$result = mysqli_query($conn, $query);

?>
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<div class="user-card">
    <div class="card-header">
        <span class="user-id">ID: <?php echo $row['user_id']; ?></span>
    </div>

    <div class="card-body">
        <p><strong>Name:</strong> <?php echo $row['user_first_name'].' '.$row['user_last_name']; ?></p>
        <p><strong>Mobile:</strong> <?php echo $row['user_mon']; ?></p>
        <p><strong>Email:</strong> <?php echo $row['user_email']; ?></p>
        <p><strong>Address:</strong> <?php echo $row['user_address']; ?></p>
        <p><strong>Class:</strong> <?php echo $row['user_class']; ?></p>
        <p><strong>Course:</strong> <?php echo $row['user_course']; ?></p>
        <p><strong>Joining Year:</strong> <?php echo $row['user_joining_year']; ?></p>
        <p><strong>DOB:</strong> <?php echo $row['user_dob']; ?></p>
        <p><strong>Blood Group:</strong> <?php echo $row['user_bloofgroup']; ?></p>
    </div>
</div>
<?php } ?>

<a href="index.php" class="home-button">Home</a>
</body>
</html>