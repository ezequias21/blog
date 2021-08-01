<?php

Class paginas extends Controller{


    public function index(){
    
        $this->view('paginas/home');
    }

    public function colaboradores(){
        $this->view('paginas/colaboradores');
    }
    public function sobre(){
        $dados = [
            'tituloPagina' =>'Sobre nós',
            'descricao' =>'Sobre nós',
        ];
        $this->view('paginas/sobre', $dados);
    }
    
}

?>