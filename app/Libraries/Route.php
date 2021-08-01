<?php

class Route {

    private $controlador = "Paginas";
    private $metodo = "index";
    private $parametros = [];

    public function __construct()
    {
        $url = $this->url() ? $this->url() : [0];
        if(file_exists("../app/Controllers/" . ucwords($url[0] . ".php"))){
            $this->controlador = ucwords($url[0]);
            unset($url[0]);//Elimina a posição zero do array, que contém o nome da página
        }

        require_once "../app/Controllers/" . $this->controlador . ".php";
        $this->controlador = new $this->controlador;

        if(isset($url[1])){
            if(method_exists($this->controlador, $url[1])){
                $this->metodo = ucwords($url[1]);
                unset($url[1]);  //Eliminia a posição 1 do array que contém o método
            }
        }
        //Quando chega aqui, o array é exibido a partir da posição 2 do array
        //O array values cria um novo array indexado, daí resolve o problema da posiçao 0 e 1
       $this->parametros = $url ? array_values($url) : [];

       //A função call_user_func_array chama uma função ou método definido pelo usuário passando um array
       //indexado de argumentos
       //O primeiro parâmetro pode ser o nome do método, ou pode ser um array:
       //   - index 0 = o nome da classe
       //   - index 1 = o nome do método
       //O segundo parâmetro é um array indexado de argumentos
    
        call_user_func_array([$this->controlador, $this->metodo], $this->parametros);
    }

    // retorna a url em um array
    private function url(){
        //o filtro FILTER_SANITIZE_URL remove todos os caracteres ilegais de uma URL
        $url = filter_input(INPUT_GET,'url',FILTER_SANITIZE_URL);
        //verifica se a url existe
        if(isset($url)):
            //trim — Retira espaço no ínicio e final de uma string
            //rtrim — Retira espaço em branco (ou outros caracteres) do final da string
            $url = trim(rtrim($url,'/'));
            //explode — Divide uma string em strings, retorna um array 
            $url = explode('/', $url);
            return $url;
        endif;
    }
}