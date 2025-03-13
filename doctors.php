<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Doctors - Smart Health Care</title>
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
        .doctors-section {
            padding: 80px 0;
            text-align: center;
        }
        .doctor-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }
        .doctor-card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.15);
        }
        .doctor-card img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin-bottom: 15px;
        }
        </style>
</head>
<body>
    <br>    <br>
    <?php include "./include/header.php"; ?>
    
    <section class="page-header">
        <div class="container">
            <h1>Meet Our Expert Doctors</h1>
            <p>Highly qualified professionals ready to care for you.</p>
        </div>
    </section>
    
    <section class="doctors-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="doctor-card p-4">
                        <img src="image/doctors/doc7.png" alt="Doctor">
                        <h4>Dr. Naresh Trehan</h4>
                        <p>Cardiologist - 10+ Years Experience</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="doctor-card p-4">
                        <img src="image/doctors/doc4.png" alt="Doctor">
                        <h4>Dr. Randeep Guleria</h4>
                        <p>Neurologist - 8+ Years Experience</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="doctor-card p-4">
                        <img src="image/doctors/doc2.png" alt="Doctor">
                        <h4>Dr. Suresh Advani</h4>
                        <p>Orthopedic Surgeon - 12+ Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    <?php include "./include/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
