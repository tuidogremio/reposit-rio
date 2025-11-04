<?php

    class Predios{

        //Declara as variaveis como privadas
        private $nome_predio;
        private $altura_predio;
        private $largura_predio;
        private $residentes;
        private $obs;

        //Abaixo estão os GETTERS e SETTERS

        //Função para conseguir acessar a variavel privada
        public function getNomePredio(){
            //Retorna o valor da variavel
            return $this->nome_predio;
        }
        //Função para colocar valor na variavel privada
        public function setNomePredio($nome_predio) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->nome_predio = $nome_predio;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 

        //Função para conseguir acessar a variavel privada
        public function getAlturaPredio(){
            //Retorna o valor da variavel
            return $this->altura_predio;
        }
        //Função para colocar valor na variavel privada
        public function setAlturaPredio($altura_predio) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->altura_predio = $altura_predio;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 

        //Função para conseguir acessar a variavel privada
        public function getLarguraPredio(){
            //Retorna o valor da variavel
            return $this->largura_predio;
        }
        //Função para colocar valor na variavel privada
        public function setLarguraPredio($largura_predio) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->largura_predio = $largura_predio;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 

        //Função para conseguir acessar a variavel privada
        public function getResidentes(){
            //Retorna o valor da variavel
            return $this->residentes;
        }
        //Função para colocar valor na variavel privada
        public function setResidentes($residentes) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->residentes = $residentes;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 

        //Função para conseguir acessar a variavel privada
        public function getObs(){
            //Retorna o valor da variavel
            return $this->obs;
        }
        //Função para colocar valor na variavel privada
        public function setObs($obs) : self{
            //Chama a variavel e iguala ela ao parametro recebido
            $this->obs = $obs;
            //Retorna o valor para ser adicionado pelo private
            return $this;
        } 
    }

?>