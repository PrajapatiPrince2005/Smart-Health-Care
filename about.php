<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Smart Health Care</title>
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
        .about-section {
            padding: 80px 0;
        }
        .about-content {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }
        .about-content:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body><br><br>
<?php include './include/header.php'; ?>

    <section class="page-header">
        <div class="container">
            <h1>About Us</h1>
            <p>Learn more about Smart Health Care and our mission.</p>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="about-content text-center">
                        <h2>Our Mission</h2>
                        <p>At Smart Health Care, we strive to provide top-notch medical services with cutting-edge technology and a patient-first approach.</p>
                        <h2>Our Vision</h2>
                        <p>We aim to make healthcare more accessible, efficient, and effective for everyone.</p>
                        <h2>Why Choose Us?</h2>
                        <p>We have a team of expert doctors, state-of-the-art facilities, and a commitment to providing the best healthcare experience possible.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include './include/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
