<?php

class Usuarios extends Controller
{

    public function __construct()
    {
        $this->usuarioModel = $this->model("Usuario");
    }

    public function cadastrar()
    {


        $form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

       
        $dados = [
            'nome' =>  '',
            'email' => '',
            'senha1' => '',
            'senha2' => '',
        ];

        $errors = [];

        if (isset($form)) {

            $dados = [
                'nome' =>  trim($form["nome"]),
                'email' => trim($form["email"]),
                'senha1' => trim($form["password1"]),
                'senha2' => trim($form["password2"]),
            ];

            if (in_array("", $form)) {
                if (empty($form["nome"])) {
                    $errors["nome_erro"] = "O campo nome não pode ser em branco.";
                }
                if (empty($form["email"])) {
                    $errors["email_erro"] = "O campo e-mail não pode ser em branco.";
                }
                if (empty($form["password1"])) {
                    $errors["senha1_erro"] = "O campo senha não pode ser em branco.";
                }
                if (empty($form["password1"])) {
                    $errors["senha2_erro"] = "O campo comfirme senha não pode ser em branco.";
                }
            } else {
                if ($this->usuarioModel->check_email_exist($form["email"])) {
                    $errors["email_erro"] = "Esse e-mail já está sendo usado por outro usuário.";
                } else if (strlen($form["password1"]) < 6) {

                    $errors["senha1_erro"] = "A senha tem que ter no mínimo 6 dígitos.";
                } else if (strcmp($form["password1"], $form["password2"]) != 0) {
                    $errors["senha2_erro"] = "As senhas devem ser iguais!";
                } else {

                    $dados['senha1'] =  password_hash($form["password1"], PASSWORD_DEFAULT);
                    if ($this->usuarioModel->insert_usuario($dados)) {

                        Url::redirect("usuarios/login");

                    } else {
                        die("erro ao cadastrar usuário");
                    }
                }
            }
        }

        $this->view('usuarios/cadastrar', $dados, $errors);
    }
    public function login()
    {
        $dados = [
            "nome" => "",
            "email" => ""
        ];

        $errors = [
            "nome_erro" => "",
            "email" => ""
        ];

        $form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($form)) {
            $dados = trim($form["email"]);
            $dados = trim($form["senha"]);

            if (in_array("", $form)) {

                if (empty($form["email"])) {
                    $errors["email_error"] = "Favor preencher o campo e-mail.";
                }
                if (empty($form["senha"])) {
                    $errors["senha_error"] = "Favor preencher o campo senha";
                }
            }else{
                
                $usuario = $this->usuarioModel->check_login($form["email"], $form["senha"]);
                if( $usuario){
                    $this->create_session($usuario);
                    Url::redirect("paginas/home");
               
                }else{
                    echo "Nenhuma conta encontrada";
                }
               
            }
        }


        $this->view('usuarios/login', $dados, $errors);
    }

    public function create_session($usuario){
        $_SESSION["usuario_id"] = $usuario->id;
        $_SESSION["usuario_nome"] = $usuario->nome;
        $_SESSION["usuario_email"] = $usuario->email;
    }

    public function sair(){
        unset($_SESSION["usuario_id"]);
        unset($_SESSION["usuario_nome"]);
        unset($_SESSION["usuario_senha"]);
        
        session_destroy();
        Url::redirect("paginas/home");
    }
}
