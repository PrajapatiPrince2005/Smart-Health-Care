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
        .hero-section {
            background: linear-gradient(135deg, #007bff, #00c6ff);
            color: white;
            padding: 100px 0;
            text-align: center;
            border-radius: 0 0 50px 50px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero-section p {
            font-size: 1.2rem;
            margin-top: 10px;
        }
        .btn-primary {
            background-color: #fff;
            color: #007bff;
            font-weight: bold;
            padding: 12px 25px;
            border-radius: 30px;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            color: white;
        }
        .services-section {
            padding: 80px 0;
            text-align: center;
        }
        .services-section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 30px;
        }
        .service-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body>
    <?php include "./include/header.php"; ?>

    <section class="hero-section">
        <div class="container">
            <h1>Welcome to Smart Health Care</h1>
            <p>Your health, our priority. Get the best medical services at your fingertips.</p>
            <a href="appointment.php" class="btn btn-primary">Book an Appointment</a>
        </div>
    </section>

    <section class="services-section">
        <div class="container">
            <h2>Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card p-4">
                        <i class="fa-solid fa-user-doctor fa-3x text-primary mb-3"></i>
                        <h4>Expert Doctors</h4>
                        <p>Get consultations from highly experienced doctors.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card p-4">
                        <i class="fa-solid fa-hospital fa-3x text-danger mb-3"></i>
                        <h4>Advanced Facilities</h4>
                        <p>State-of-the-art medical facilities for accurate diagnosis.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card p-4">
                        <i class="fa-solid fa-calendar-check fa-3x text-success mb-3"></i>
                        <h4>Easy Appointments</h4>
                        <p>Schedule appointments at your convenience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "./include/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
