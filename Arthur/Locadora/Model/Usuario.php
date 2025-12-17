<?php 

    class Usuario{

        private $nome;
        private $email;
        private $senha;
        private $telefone;

        //Função para conseguir acessar a variavel privada
        public function getnome(){
            //Retorna o valor da variavel
            return $this->nome;
        }
        //Função para colocar valor na variavel privada
        public function setnome($nome) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->nome = $nome;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 

        //Função para conseguir 020acessar a variavel privada
        public function getemail(){
            //Retorna o valor da variavel
            return $this->nome_email;
        }
        //Função para colocar valor na variavel privada
        public function setemail($nome_email) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->nome_email = $nome_email;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 

        //Função para conseguir acessar a variavel privada
        public function getsenha(){
            //Retorna o valor da variavel
            return $this->nome_senha;
        }
        //Função para colocar valor na variavel privada
        public function setsenha($nome_senha) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->nome_senha = $nome_senha;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 

        //Função para conseguir acessar a variavel privada
        public function gettelefone(){
            //Retorna o valor da variavel
            return $this->nome_telefone;
        }
        //Função para colocar valor na variavel privada
        public function settelefone($nome_telefone) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->nome_telefone = $nome_telefone;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 
    }

?>