
<!--الصفحه الاولى قبل التعديل-->
<?php 
$firstName =   $_POST['firstName'];
$lastName =    $_POST['lastName'];
$email =       $_POST['email'];

if (isset ($_POST['submit'])) {

    
  //تامين المدخلات من الاختراق
  $firstName =   mysqli_real_escape_string ($conn, $_POST['firstName']);
  $lastName =    mysqli_real_escape_string ($conn, $_POST['lastName']);
  $email =       mysqli_real_escape_string ($conn, $_POST['email']);
 //توصيل المتغيرات في قواعد البيانات
    $sql = "INSERT INTO users(firstName, lastName, email)
             VALUES('$firstName', '$lastName', '$email')";



            if(empty($firstName)){
                echo 'Enterd To The First Name';
            }elseif(empty($lastName)){
                echo 'Enterd To The Second Name';

            }elseif(empty($email)){
                echo 'Enterd To The Email';
            }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo 'Enterd To The Correct Email';

            }else{
                if(mysqli_query($conn, $sql)){
                    header ('location: index.php');
                }else{
                    echo 'Erorr:' . mysqli_error($conn);
    
                }
            }

            
}


