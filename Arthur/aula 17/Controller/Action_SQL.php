<?php

    require "conexao/conexao.php";

    class Action_SQL{

        //Realiza a instrução de selecionar
        public function selecionar(){

            require "../conexao/conexao.php";
            $stmt = $pdo->prepare("SELECT * FROM email");
            $stmt->execute();

            $resultado = $stmt;

            if(!$resultado){

                echo "<script> alert('Erro ao procurar as informações');window.location.href='../envio_email.php'; </script>";

            }

            return $stmt;

        }

        //Realiza a instrução de selecionar por ID
        public function selecionar_id($id){

            require "../conexao/conexao.php";

            if(isset($id) && $id != NULL){

                //Instrução de selecionar com id
                $stmt = $pdo->prepare("SELECT * FROM email WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if(!$resultado){

                    echo "<script> alert('Erro ao selecionar');window.location.href='envio_email.php'; </script>";

                }
            
            }else{

                echo "<script> alert('Não foi encontrado o id');window.location.href='envio_email.php'; </script>";

            }
            
            return $stmt;

        }

        //Realiza a instrução de inserir
        public function inserir(
            $nome,
            $idade,
            $email,
            $altura,
            $peso,
            $signo){

            require "conexao/conexao.php";
            $stmt = $pdo->prepare("INSERT INTO email (nome, idade, email, altura, peso, signo) VALUES (:nome, :idade, :email, :altura, :peso, :signo )");
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":idade", $idade);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":altura", $altura);
            $stmt->bindParam(":peso", $peso);
            $stmt->bindParam(":signo", $signo);
            $stmt->execute();

            $resultado = $stmt;

            if(!$resultado){

                echo "<script> alert('Erro ao cadastrar o Email');window.location.href='envio_email.php'; </script>";

            }else{

                 echo "<script> alert('Sucesso ao cadastrar o Email');window.location.href='envio_email.php'; </script>";

            }
            
        }

    }

?>