<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $doctor = $_POST['doctor'];
    $date = $_POST['date'];
    $symptoms = $_POST['symptoms'];

    $query = "INSERT INTO appointments (user_name, user_email, contact, doctor_name, appointment_date, symptoms) 
              VALUES ('$name', '$email', '$contact', '$doctor', '$date', '$symptoms')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Appointment booked successfully!'); window.location.href='home.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
