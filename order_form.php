<?php

$connection = mysqli_connect('localhost', 'root', 'Mine@DB14', 'UZD_cars_db');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['number'];
    $city = $_POST['city'];
    $subcity = $_POST['subcity'];
    $car_ID = $_POST['car_ID'];

    $query = "insert into orders(name, email, phone_number, city, subcity, Car_ID) 
   values('$name','$email', '$phone_number', '$city', '$subcity', '$car_ID')";

    mysqli_query($connection, $query);
    header('location:order.php');

    echo 'ordered successfully. Thank you much!';
} else {
    echo "something went wrong please try again!";
}
