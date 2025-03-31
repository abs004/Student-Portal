<?php
include 'login1.php'; // Database connection

// Fetch Students
$query = "SELECT * FROM register";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Students</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #1f72b8;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            margin: 10px;
            background-color: #1f72b8;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
        }
        .btn:hover {
            background-color: #155f8d;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #1f72b8;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Manage Students</h2>
        <a href="add-student-details.php" class="btn">Add Student</a>
        <a href="admin_home.php" class="btn">Back to Admin Home</a>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Semester</th>
                <th>Number</th>
                <th>Email</th>
                <th>Department</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['s_id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['age'] ?></td>
                <td><?= $row['gender'] ?></td>
                <td><?= $row['semester'] ?></td>
                <td><?= $row['number'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['department'] ?></td>
                <td>
                    <a href="update_student.php?s_id=<?= $row['s_id'] ?>">Update</a> |
                    <a href="delete_student.php?s_id=<?= $row['s_id'] ?>" onclick="return confirm('Are you sure?');">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
