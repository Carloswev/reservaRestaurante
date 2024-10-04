<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];
    $special_requests = $_POST['special_requests'];

    $sql = "INSERT INTO reservations (customer_name, phone, email, date, time, guests, special_requests)
            VALUES ('$customer_name', '$phone', '$email', '$date', '$time', $guests, '$special_requests')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation confirmed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
