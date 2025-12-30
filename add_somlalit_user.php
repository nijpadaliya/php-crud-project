<html>
    <head>
        <title>Add New User</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <h2>Add New User</h2>
        <form action="save_somlalit_user.php" method="POST">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required><br><br>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required><br><br>

            <label for="mobile">Mobile No.:</label>
            <input type="text" id="mobile" name="mobile" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required><br><br>

            <label for="class">Class:</label>
            <input type="text" id="class" name="class" required><br><br>

            <label for="course">Course:</label>
            <input type="text" id="course" name="course" required><br><br>

            <label for="joining_year">Joining Year:</label>
            <input type="text" id="joining_year" name="joining_year" required><br><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br><br>

            <label for="blood_group">Blood Group:</label>
            <input type="text" id="blood_group" name="blood_group" required><br><br>

            <input type="submit" value="Add User">
        </form>

    </body>
</html>