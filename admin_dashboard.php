<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Smart Health Care</title>
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
            padding: 10px;
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background: #007bff;
            border-radius: 5px;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
        }
        .dashboard-cards .card {
            transition: 0.3s;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .dashboard-cards .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
        }
        .table-responsive {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h3 class="text-center">Admin Panel</h3>
        <a href="#"><i class="fa-solid fa-chart-line"></i> Dashboard</a>
        <a href="#"><i class="fa-solid fa-users"></i> Users</a>
        <a href="admin_appointment.php"><i class="fa-solid fa-calendar-check"></i> Appointments</a>
        <a href="#"><i class="fa-solid fa-user-doctor"></i> Doctors</a>
        <a href="#"><i class="fa-solid fa-building"></i> Departments</a>
        <a href="#"><i class="fa-solid fa-cog"></i> Settings</a>
    </div>
    <div class="content">
        <h1>Admin Dashboard</h1>
        <div class="row dashboard-cards">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text">500</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Appointments</h5>
                        <p class="card-text">120</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Doctors</h5>
                        <p class="card-text">30</p>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="mt-4">Appointments</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Patient Name</th>
                        <th>Doctor</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Rahul Sharma</td>
                        <td>Dr. Naresh Trehan</td>
                        <td>2025-03-15</td>
                        <td>10:30 AM</td>
                        <td><span class="badge bg-success">Confirmed</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Priya Mehta</td>
                        <td>Dr. Randeep Guleria</td>
                        <td>2025-03-16</td>
                        <td>11:00 AM</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
