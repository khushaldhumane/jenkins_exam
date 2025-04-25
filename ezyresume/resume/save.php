<?php
require_once 'config.php';

if (isset($_POST['submit'])) 
{
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $profession = $_POST['profession'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $skill1 = $_post['skill1'];
    $skill_level1 = $_POST['skill_level1'];
    $hobby1 = $_POST['hobby1'];
    $about = $_POST['about_me'];
    $institute1 = $_POST['institute1'];
    $degree1 = $_POST['degree1'];
    $from1 = $_POST['from1'];
    $to1 = $_POST['to1'];
    $grade1 = $_POST['grade1'];
    $title1 = $_POST['title1'];
    $discription1 = $_POST['discription1'];

    $sql = "INSERT INTO resume_details (first_name,last_name,profession,email,phone,skill1,skill_level1,hobby1,about_me,institute1,degree1,from1,to1,grade1,title1,description1) VALUES('$fname','$lname','$profession','$email','$phone','$skill1','$skill_level1','$hobby1','$about','$institute1','$degree1','$from1','$to1','$grade1','$title1','$discription1')";

    mysqli_close($conn);

}

?>