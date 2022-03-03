<?php


class Zaloguj extends Controller
{
    public function logowanie()
    {
        if(!Session::checkLogged())
        {
            $data = [
                'errors' => isset($_SESSION['temp']) ? $_SESSION['temp'] : []
            ];
            Session::flushTemp();
            $this->view('zaloguj',$data);
        } else {
            header("Location: ". Resources::route('home'));
        }
    }
    public function rejestracja()
    {
        $data = [
            'errors' => isset($_SESSION['temp']) ? $_SESSION['temp'] : []
        ];
        Session::flushTemp();
        $this->view('rejestracja',$data);
    }
    public function rejestracjaPost()
    {
        if($_POST['haslo'] == $_POST['haslo_powtorzone'])
        {
            $res = $this->model('Users')->getUser($_POST['login'])->toArray();
            if(count($res)==0)
            {
                $res = $this->model('Users')->addUser($_POST['login'], $_POST['haslo'], $_POST['e-mail']);
                if($res->getInsertedCount() == 1)
                {
                    Session::addTemp('success_register', '<span style="color: darkgreen; font-size: 15px;">Konto utworzone!</span>');
                } else {
                    Session::addTemp('error_register', '<span style="color: orangered; font-size: 15px;">Wystąpił błąd!</span>');
                }
            } else {
                Session::addTemp('error_duplicateuser', '<span style="color: orangered; font-size: 15px;">Konto o tym loginie już istnieje!</span>');
            }
        } else {
            Session::addTemp('error_pass', '<span style="color: orangered; font-size: 15px;">Błędne powtórzone hasło!</span>');
        }

        header("Location: ". Resources::route('zaloguj/rejestracja'));
    }
    public function wyloguj() {
        Session::logout();
        header("Location: ". Resources::route('home'));
    }
    public function loguj()
    {
        $login=$_POST['login'];
        $password=$_POST['haslo'];

        $res = $this->model('Users')->getUser($login)->toArray();
        if(count($res)>0) {
            $user = $res[0];

            if(password_verify($password, $user->password)) {
                Session::login($user->_id, $user->login);
                Session::addTemp('success_login', '<span style="color: orangered; font-size: 15px; font-weight: bold;text-align: right;">Zalogowano!</span>');
                header("Location: ". Resources::route('home'));
            } else {
                Session::addTemp('error_login', '<span style="color: orangered; font-size: 15px;">Błędne hasło!</span>');
            }
        }
        header("Location: ". Resources::route('zaloguj/logowanie'));
    }
}