<?php

    require "../Conexao/conexao.php";

    class Action_SQL{

        //Realiza a instrução de selecionar
        public function selecionar(){

            require "../Conexao/conexao.php";
            $stmt = $pdo->prepare("SELECT * FROM cadastro_usuario");
            $stmt->execute();

            $resultado = $stmt;

            if(!$resultado){

                echo "<script> alert('Erro ao procurar as informações');window.location.href='../index.php'; </script>";

            }

            return $stmt;

        }

        //Realiza a instrução de selecionar por ID
        public function selecionar_id($id){

            require "../Conexao/conexao.php";

            if(isset($id) && $id != NULL){

                //Instrução de selecionar com id
                $stmt = $pdo->prepare("SELECT * FROM cadastro_usuario WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if(!$resultado){

                    echo "<script> alert('Erro ao selecionar');window.location.href='../index.php'; </script>";

                }
            
            }else{

                echo "<script> alert('Não foi encontrado o id');window.location.href='../View/home.php'; </script>";

            }
            
            return $stmt;

        }

        //Realiza a instrução de inserir
        public function inserir(
            $nome,
            $email,
            $senha,
            $telefone){

            require "../Conexao/conexao.php";
            $stmt = $pdo->prepare("INSERT INTO cadastro_usuario (nome, email, senha, telefone) VALUES (:nome, :email, :senha, :telefone)");
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":senha", $senha);
            $stmt->bindParam(":telefone", $telefone);
            $stmt->execute();

            $resultado = $stmt;

            if(!$resultado){

                echo "<script> alert('Erro ao cadastrar o usuario');window.location.href='../View/cadastrar.php'; </script>";

            }else{

                 echo "<script> alert('Sucesso ao cadastrar o usuario');window.location.href='../View/home.php'; </script>";

            }
            
        }

        //Realiza a instrução de editar
        public function editar(
            $id,
            $nome,
            $email,
            $senha,
            $telefone){


            if(isset($id) && $id != NULL){

                //Instrução de editar
                require "../Conexao/conexao.php";
                $stmt = $pdo->prepare("UPDATE cadastro_usuario SET nome = :nome, email = :email, senha = :senha, telefone = :telefone WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":senha", $senha);
                $stmt->bindParam(":telefone", $telefone);
                $stmt->execute();

                $resultado = $stmt;

                if(!$resultado){

                    echo "<script> alert('Erro ao editar o usuario');window.location.href='../View/home.php'; </script>";

                }else{

                    echo "<script> alert('Sucesso ao editar o usuario');window.location.href='../View/home.php'; </script>";

                }

            }else{

                echo "<script> alert('Não foi encontrado o id');window.location.href='../View/home.php'; </script>";

            }
             

        }

        //Realiza a instrução de deletar
        public function deletar($id){

            require "../Conexao/conexao.php";

            if(isset($id) && $id != NULL){

                //Instrução de deletar
                $stmt = $pdo->prepare("DELETE FROM cadastro_usuario WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if(!$resultado){

                    echo "<script> alert('Erro ao deletar');window.location.href='../View/home.php'; </script>";

                }else{

                    echo "<script> alert('Sucesso ao deletar o livro');window.location.href='../View/home.php'; </script>";

                }

            }else{

                echo "<script> alert('Não foi encontrado o id');window.location.href='../View/home.php'; </script>";

            }

        }

    }

?>