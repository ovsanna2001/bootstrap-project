<?php 
    $title = "";
    $fullname = "";
    $email = "";
    $year = "";
    $day = "";
    $month = "";
    $gender = "";
    $user_info = [];
    $is_valid = false;

    if(isset($_POST['register'])) {
        $title = "My account";
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $year = $_POST['year'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $gender = $_POST['gender'];
        if($fullname == "") {
            echo "<div class='alert alert-danger' role='alert'>Full name is required!</div>";
        } else {
            $user_info["name"] = $fullname;
        }
        if($email == "") {
            echo "<div class='alert alert-danger' role='alert'>Email is required!</div>";
        } else {
            $user_info["email"] = $email;
        }
        if($year == "") {
            echo "<div class='alert alert-danger' role='alert'>Year is required!</div>";
        } else {
            $user_info["birthday"] = $year;
        }
        if($day == "") {
            echo "<div class='alert alert-danger' role='alert'>Day is required!</div>";
        } else {
            $user_info["birthday"] .= "/$day";
        }
        if($month == "") {
            echo "<div class='alert alert-danger' role='alert'>Month is required!</div>";
        } else {
            $user_info["birthday"] .= "/$month";
        }
        if($gender == "") {
            echo "<div class='alert alert-danger' role='alert'>Gender is required!</div>";
        } else {
            $user_info["gender"] = $gender;
        }

        if($fullname == "" || $email == "" || $year == "" || $day == "" || $month == "" || $gender == "") {
            $is_valid = false;
        } else {
            $is_valid = true;
        }
    }  
?>