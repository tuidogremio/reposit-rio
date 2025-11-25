<?php 

    class Livros{

        private $nome_livro;
        private $descricao;
        private $genero;
        private $classificacao;
        private $referencias;

        //Função para conseguir acessar a variavel privada
        public function getNome_livro(){
            //Retorna o valor da variavel
            return $this->nome_livro;
        }
        //Função para colocar valor na variavel privada
        public function setNome_livro($nome_livro) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->nome_livro = $nome_livro;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 

        //Função para conseguir 020acessar a variavel privada
        public function getDescricao(){
            //Retorna o valor da variavel
            return $this->nome_descricao;
        }
        //Função para colocar valor na variavel privada
        public function setDescricao($nome_descricao) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->nome_descricao = $nome_descricao;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 

        //Função para conseguir acessar a variavel privada
        public function getGenero(){
            //Retorna o valor da variavel
            return $this->nome_genero;
        }
        //Função para colocar valor na variavel privada
        public function setGenero($nome_genero) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->nome_genero = $nome_genero;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 

        //Função para conseguir acessar a variavel privada
        public function getClassificacao(){
            //Retorna o valor da variavel
            return $this->nome_classificacao;
        }
        //Função para colocar valor na variavel privada
        public function setClassificacao($nome_classificacao) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->nome_classificacao = $nome_classificacao;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 

        //Função para conseguir acessar a variavel privada
        public function getReferencias(){
            //Retorna o valor da variavel
            return $this->nome_referencias;
        }
        //Função para colocar valor na variavel privada
        public function setReferencias($nome_referencias) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->nome_referencias = $nome_referencias;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 
    }

?>