<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book an Appointment - Smart Health Care</title>
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
        .appointment-section {
            padding: 80px 0;
        }
        .appointment-form {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body><br><br>
<?php include "./include/header.php"; ?>

    <section class="page-header">
        <div class="container">
            <h1>Book an Appointment</h1>
            <p>Choose your preferred doctor and schedule your visit.</p>
        </div>
    </section>

    <section class="appointment-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="appointment-form">
                        <form action="submit_appointment.php" method="POST">
                            <div class="mb-3">
                                <label for="doctor" class="form-label">Select Doctor</label>
                                <select class="form-select" id="doctor" name="doctor" required>
                                    <option value="Dr. Naresh Trehan">Dr. Naresh Trehan - Cardiologist</option>
                                    <option value="Dr. Randeep Guleria">Dr. Randeep Guleria - Pulmonologist</option>
                                    <option value="Dr. Suresh Advani">Dr. Suresh Advani - Oncologist</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="contact" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" id="contact" name="contact" required>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Appointment Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="mb-3">
                                <label for="symptoms" class="form-label">Symptoms</label>
                                <textarea class="form-control" id="symptoms" name="symptoms" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Book Appointment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "./include/header.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
