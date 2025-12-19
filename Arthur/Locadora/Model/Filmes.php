<?php 

    class Filmes{

        private $filme;
        private $ano;
        private $genero;
        private $classificacao;
        private $diretor;
        private $sinopse;
        private $status;

        //Função para conseguir acessar a variavel privada
        public function getFilme(){
            //Retorna o valor da variavel
            return $this->filme;
        }
        //Função para colocar valor na variavel privada
        public function setFilme($filme) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->filme = $filme;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 


        //Função para conseguir acessar a variavel privada
        public function getAno(){
            //Retorna o valor da variavel
            return $this->nome_ano;
        }
        //Função para colocar valor na variavel privada
        public function setAno($nome_ano) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->nome_ano = $nome_ano;
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
        public function getDiretor(){
            //Retorna o valor da variavel
            return $this->nome_diretor;
        }
        //Função para colocar valor na variavel privada
        public function setDiretor($nome_diretor) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->nome_diretor = $nome_diretor;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 

         //Função para conseguir acessar a variavel privada
        public function getSinopse(){
            //Retorna o valor da variavel
            return $this->nome_sinopse;
        }
        //Função para colocar valor na variavel privada
        public function setSinopse($nome_sinopse) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->nome_sinopse = $nome_sinopse;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 

         //Função para conseguir acessar a variavel privada
        public function getStatus(){
            //Retorna o valor da variavel
            return $this->nome_status;
        }
        //Função para colocar valor na variavel privada
        public function setStatus($nome_status) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->nome_status = $nome_status;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 
    }

?>