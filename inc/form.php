<?php 
// deleted $ 
$firstName =  $_POST['firstName'];
$lastName =   $_POST['lastName'];
$email =      $_POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];




if (isset ($_POST['submit'])) {

    
        if(empty($firstName)){
            $errors['firstNameError'] = 'Enterd To The First Name';
        }
        if(empty($lastName)){
            $errors['lastNameError'] = 'Enterd To The last Name';
        
        }if(empty($email)){
            $errors['emailError'] = 'Enterd To Theemail Name';
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['emailError'] = 'Enterd To The email Name';
        
        }
        
        //التحقق من عدم وجود اخطاء
        if(!array_filter($errors)){
            $firstName =  mysqli_real_escape_string($conn, $_POST['firstName']); 
            $lastName =   mysqli_real_escape_string($conn, $_POST['lastName']);
            $email =      mysqli_real_escape_string($conn, $_POST['email']);

            $sql = "INSERT INTO users(firstName, lastName, email)
                      VALUES('$firstName', '$lastName', '$email')";
        
            if(mysqli_query($conn, $sql)){
                header ('location: index.php');
            }else{
                echo 'Erorr:' . mysqli_error($conn);
        
            }
        


        }
}
       
       
       
             /* $firstName =  mysqli_real_escape_string($conn, $_POST['firstName']); 
                $lastName =   mysqli_real_escape_string($conn, $_POST['lastName']);
                $email =      mysqli_real_escape_string($conn, $_POST['email']);
         
            
                $sql = "INSERT INTO users(firstName, lastName, email)
                      VALUES('$firstName', '$lastName', '$email')";
                */