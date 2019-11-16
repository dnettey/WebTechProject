<?php
/**
 * @author Emmanuel Antwi
 * @author Daniel Nettey
 * A moduel that handles the signup page
 */


 
 //get database 
 include_once("../mydatabase.php");


 //get user object
 include_once('../objects/user.php');

 //Instantiate database
 $database_connection = new Database();
 $db = $database_connection->getconnecion();

$user = new User($db);

//setting user profile
if (isset($_POST['register_user'])){
    $user->fullname = $_POST['name'];
    $user->email =   $_POST['email'];
    $user->phone = $_POST['phone'];
    $user->country = $_POST['country'];
    $user->password = base64_encode($_POST['password']);
    $user->created = date('Y-m-d');

}

//create the user and application
if($user->signup()){
<<<<<<< HEAD
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Signup!",
        "username" => $user->fullname
    );
=======
    $user->applicant();
    header("Location: http://localhost/WebTechProject/admission_portal_frontend/");
>>>>>>> feaa02b72cef1a2efef7c185a85bfcce2178a20d
}else{
    header("Location: http://localhost/WebTechProject/admission_portal_frontend/register.php");
}


?>