<?php 


class Usuario{


    private $db;

    public function __construct()
    {
        $this->db  =new Database();
    }

    public function check_email_exist($email){
        $this->db->query("SELECT email FROM usuarios WHERE email = :e");
        $this->db->bind(":e", $email);

        if($this->db->resultado())
            return true;
        else
            return false;
    }
    public function insert_usuario($dados){
        $this->db->query("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
        $this->db->bind("nome", $dados["nome"]);
        $this->db->bind("email", $dados["email"]);
        $this->db->bind("senha", $dados["senha1"]);

        if($this->db->executa()){
            return true;
        }else{
            return false;
        }
    }
    public function check_login($email, $senha){
        $this->db->query("SELECT * FROM usuarios WHERE email = :email");
        $this->db->bind("email", $email);
       
        $resultado = $this->db->resultado();
        if($resultado){
            if(password_verify($senha, $resultado->senha)): 
                return $resultado;
            else:
                return false;
            endif;
        }
        else{
            return false;
        }
    }


}