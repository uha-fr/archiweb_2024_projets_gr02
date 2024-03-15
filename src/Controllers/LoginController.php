<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); 
}

class LoginController
{
    function getView()
    {
        require VIEWSDIR.DS.'LoginView.php';
        $v = new LoginView();
        $html = $v->get();

        echo $html;
        http_response_code(200);
    }

    function login($username, $password)
    {
        require MODELSDIR.DS.'UserModel.php';
        $m = new UserModel();
        $user = $m->getUserByUsernameAndPassword($username, $password);

        if ($user) {
            $_SESSION['user'] = $username; 
            $_SESSION['error'] = "bon";
            $_SESSION['connexion'] =true;
            header("Location:  /archiweb_2024_projets_gr02-main/webapp"); 
            exit; 
        } else {
            $_SESSION['error'] = "pasbon";
            header("Location: /archiweb_2024_projets_gr02-main/webapp/login");
            exit;
        }
    }

    function signup($name,$email,$pass1,$pass2,$country,$gender,$condition)
    {
        $hashed_password = password_hash($pass1, PASSWORD_DEFAULT);

        require MODELSDIR.DS.'UserModel.php';
        $m = new UserModel();
        $result = $m->addUser($name, $hashed_password, $email, $hashed_password, $country, $gender);

        if ($result) {
            header("Location: /archiweb_2024_projets_gr02-main/webapp");
            exit();
        } else {
            header("Location: /signup.php?error=signup_failed");
            exit();
        }
    }
}
?>
