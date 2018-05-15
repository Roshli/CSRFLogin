<?php

session_start();//initialisin a session

if(empty($_SESSION['key']))
{
    $_SESSION['key']=base64_encode( openssl_random_pseudo_bytes(32));
    
}

//generate CSRF token
$token = base64_encode( openssl_random_pseudo_bytes(32));
$_SESSION['CSRF'] = $token; //store CSRF token in session variable

ob_start(); // start of outer buffer function

if(isset($_POST['sbmt']))
{
    ob_end_clean();
    
    loginvalidate($_POST['CSR'],$_COOKIE['session_id'],$_POST['user_name'],$_POST['user_pswd']);
}



function loginvalidate($user_CSRF,$user_sessionID, $username, $password)
{
    if($username=="Admin" && $password=="Admin" && $user_sessionID===session_id() && $user_CSRF==$_SESSION['CSRF'])
    {
        echo "<script> alert('Login Sucess') </script>";
        echo "Welcome Admin"."<br/>"; 
        //apc_delete('CSRF_token');
    }
    else
    {
        echo "<script> alert('Login Failed') </script>";
        echo "Login Failed ! "."<br/>"."Authorization Failed!! Please ReEnter User Name and Password!";
    }
}
?>

