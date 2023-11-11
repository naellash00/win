<?php 

 $firstName = $_POST['firstName'];
 $lastName = $_POST['lastName'];
 $email = $_POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

if(isset($_POST['submit'])){

    if(empty($firstName)){
        $errors['firstNameError'] = 'please enter the first name';

    } 
    if(empty($lastName)){
        $errors['lastNameError'] = 'please enter the last name';

    } 
    if (empty($email)){ 
        $errors['emailError'] = 'please enter the email';
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'please enter a correct email';
    } 
    
    if(array_fliter($errors)){
        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        
        $sql = "INSERT INTO users(firstName, lastName, email)
        VALUES('$firstName', '$lastName', '$email')";

      if(mysqli_query($conn, $sql)){
    header('Location: index.php' .  $_SERVER['PHP_SELF'] );
    }
     else {
    echo 'Error: ' . mysqli_connect_error($conn);
     }
   
       
    }
     
}

?>