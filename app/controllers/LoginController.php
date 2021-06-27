<?php

namespace App\Controllers;

use App\Core\App;

class LoginController {

    public function makeLogin() {
        
        session_start();
        $_SESSION['erros'] = ([]);


        try {
            if (!isset($_POST['email']) && !empty($_POST['email'])) {
                $_SESSION['erros'][] = "O Campo email não pode ficar vazio ou ter um valor inválido";

                return redirect('login');

            } else if (!isset($_POST['password']) && !empty($_POST['password'])) {
                $_SESSION['erros'][] = "O Campo senha não pode ficar vazio ou ter um valor inválido";

                return redirect('login');

            } else {
                $email = $_POST['email'];
                $user = App::get('database')->selectColumn('users', 'email', $email);

                
                if (empty($user)) {
                    $_SESSION['erros'][] = "Não existe usuário cadastrado com este email";

                    return redirect('login');

                } else {
                    $user = $user[0];
                    
                    $hash = md5($_POST['password']);

                    if ($hash == $user->password) {
                        $this->sessionStart($user);
                        if(isset($_SESSION['logged']) && $_SESSION['logged'])
                        {
                            return redirect('admin/home');
                        }

                    } else {
                        $_SESSION['erros'][] = "Senha inválida";
                        return redirect('login');
                    }
                }
            }
        } catch (Exception $e) {
            $_SESSION['erros'][] = "{$e->getMessage()}";
        }
    }

    private function sessionStart($user)
    {
      if (session_status() !== PHP_SESSION_ACTIVE) { //Verificar se a sessão não já está aberta.
        session_start();
      }

      $_SESSION['nome_usuario'] = $user->name;
      $_SESSION['email_usuario'] = $user->email;
      $_SESSION['logged'] = true;
    }

    public function sessionVerify() {
        // var_dump($_SESSION);
        // die();

        if (!$_SESSION['logged']) {       
          return redirect('login');
        }
    }

    public function logout()
    {
        session_start();

        //Apagando todos os dados da sessão:
        session_unset();
        //Destruindo a sessão:
        session_destroy();
        $_SESSION['logged'] = false;

        return redirect('login');
    }
}