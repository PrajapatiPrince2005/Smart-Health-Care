<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

include 'db_connect.php'; // Database connection

// Fetch all appointment records
$query = "SELECT * FROM appointments ORDER BY appointment_date ASC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Appointments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .sidebar {
            width: 250px;
            background: #343a40;
            color: white;
            height: 100vh;
            position: fixed;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
            transition: 0.3s;
            font-size: 16px;
        }
        .sidebar a:hover {
            background: #007bff;
            border-radius: 5px;
        }
        .sidebar h3 {
            text-align: center;
            padding-bottom: 15px;
            border-bottom: 1px solid #ccc;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
        }
        .table-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            text-align: center;
        }
        .logout {
            position: absolute;
            bottom: 20px;
            width: 100%;
        }
        .logout a {
            color: #dc3545;
            font-weight: bold;
        }
        .logout a:hover {
            background: #dc3545;
            color: white;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h3>Admin Panel</h3>
    <a href="admin_dashboard.php"><i class="fa-solid fa-chart-line"></i> Dashboard</a>
    <a href="admin_users.php"><i class="fa-solid fa-users"></i> Users</a>
    <a href="admin_appointment.php"><i class="fa-solid fa-calendar-check"></i> Appointments</a>
    <a href="admin_doctors.php"><i class="fa-solid fa-user-doctor"></i> Doctors</a>
    <a href="admin_departments.php"><i class="fa-solid fa-building"></i> Departments</a>
    <a href="admin_settings.php"><i class="fa-solid fa-cog"></i> Settings</a>
    <div class="logout">
        <a href="logout.php"><i class="fa-solid fa-sign-out-alt"></i> Logout</a>
    </div>
</div>

<div class="content">
    <h2 class="text-center mb-4">Admin Dashboard - Appointments</h2>
    <div class="table-container">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Doctor</th>
                    <th>Appointment Date</th>
                    <th>Symptoms</th>
                    <th>Booked On</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= htmlspecialchars($row['id']); ?></td>
                        <td><?= htmlspecialchars($row['user_name']); ?></td>
                        <td><?= htmlspecialchars($row['user_email']); ?></td>
                        <td><?= htmlspecialchars($row['contact']); ?></td>
                        <td><?= htmlspecialchars($row['doctor_name']); ?></td>
                        <td><?= htmlspecialchars($row['appointment_date']); ?></td>
                        <td><?= htmlspecialchars($row['symptoms']); ?></td>
                        <td><?= htmlspecialchars($row['created_at']); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
