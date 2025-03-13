<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Health Care</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        .navbar {
            background: linear-gradient(135deg, #007bff, #00c6ff);
            transition: all 0.4s ease-in-out;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            padding: 15px 20px;
            border-radius: 0 0 15px 15px;
        }
        .navbar-brand img {
            border-radius: 50%;
            transition: 0.3s;
        }
        .navbar-brand:hover img {
            transform: scale(1.1);
        }
        .nav-link {
            color: white !important;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 12px 20px;
            margin: 0 10px;
            border-radius: 5px;
            display: inline-block;
        }
        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
            box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.3);
        }
        .navbar-toggler {
            border: none;
            outline: none;
        }
        .navbar-toggler:focus {
            box-shadow: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="image/logo/logo.png" width="50" height="50" alt="Logo">
                <span class="ms-3 fw-bold">Smart Health Care</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="home.php"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="doctors.php"><i class="fa-solid fa-user-doctor"></i> Doctors</a></li>
                    <li class="nav-item"><a class="nav-link" href="appointment.php"><i class="fa-solid fa-calendar-check"></i> Appointment</a></li>
                    <li class="nav-item"><a class="nav-link" href="department.php"><i class="fa-solid fa-building"></i> Departments</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php"><i class="fa-solid fa-info-circle"></i> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php"><i class="fa-solid fa-envelope"></i> Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
