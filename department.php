<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments - Smart Health Care</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        .page-header {
            background: linear-gradient(135deg, #007bff, #00c6ff);
            color: white;
            padding: 60px 0;
            text-align: center;
            border-radius: 0 0 50px 50px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }
        .page-header h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .department-section {
            padding: 80px 0;
        }
        .department-card {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }
        .department-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.15);
        }
        .department-card i {
            font-size: 40px;
            color: #007bff;
        }
    </style>
</head>
<body><br><br>
<?php include "./include/header.php"; ?>

    <section class="page-header">
        <div class="container">
            <h1>Our Departments</h1>
            <p>Explore the various medical specialties we offer.</p>
        </div>
    </section>

    <section class="department-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="department-card text-center p-4">
                        <i class="fa-solid fa-heart"></i>
                        <h4 class="mt-3">Cardiology</h4>
                        <p>Heart-related treatments and surgeries.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="department-card text-center p-4">
                        <i class="fa-solid fa-lungs"></i>
                        <h4 class="mt-3">Pulmonology</h4>
                        <p>Respiratory and lung disease treatments.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="department-card text-center p-4">
                        <i class="fa-solid fa-stethoscope"></i>
                        <h4 class="mt-3">General Medicine</h4>
                        <p>Comprehensive health care for all ages.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="department-card text-center p-4">
                        <i class="fa-solid fa-brain"></i>
                        <h4 class="mt-3">Neurology</h4>
                        <p>Brain and nervous system treatments.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="department-card text-center p-4">
                        <i class="fa-solid fa-user-nurse"></i>
                        <h4 class="mt-3">Oncology</h4>
                        <p>Cancer diagnosis and treatments.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="department-card text-center p-4">
                        <i class="fa-solid fa-bone"></i>
                        <h4 class="mt-3">Orthopedics</h4>
                        <p>Bone and joint treatments and surgeries.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "./include/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
