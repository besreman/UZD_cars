<?php
if (isset($_POST['submit']) && isset($_FILES['car_image'])) {

    include "connection.php";
    $conn = Connect();


    $car_model = $conn->real_escape_string($_POST['model']);
    $price = $conn->real_escape_string($_POST['price']);
    $transmission = $conn->real_escape_string($_POST['transmission']);
    $engine = $conn->real_escape_string($_POST['engine']);
    $plate_number = $conn->real_escape_string($_POST['plate_number']);
    $color = $conn->real_escape_string($_POST['color']);
    $status = $conn->real_escape_string($_POST['status']);
    $tg_link = $conn->real_escape_string($_POST['tg_link']);



    $img_name = $_FILES['car_image']['name'];
    $img_size = $_FILES['car_image']['size'];
    $tmp_name = $_FILES['car_image']['tmp_name'];
    $error = $_FILES['car_image']['error'];

    if ($error === 0) {
        if ($img_size > 5000000) {
            echo 'too large file';
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_ex = array('jpg', 'jpeg', 'png');

            if (in_array($img_ex_lc, $allowed_ex)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'images/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $pk = 1;
                $query = "INSERT INTO cars(model,price,transmission,engine,plate_number,color,status,tg_link,img_url) values('" . $car_model . "'," . $price .
                    ",'" . $transmission . "','" . $engine . "'," . $plate_number . ",'" . $color . "','" . $status . "' ,'" . $tg_link . "','" . $new_img_name . "')";
                mysqli_query($conn, $query);
                header("location: home.php");
            } else {
                echo 'not allowed image extension only use jpg, jpeg or png format image';
            }
        }
    } else {
        echo 'error';
    }
} else {
    echo 'error!';
}
