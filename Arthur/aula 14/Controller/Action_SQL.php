<?php

    require "../Conexao/conexao.php";

    class Action_SQL{

        //Realiza a instrução de selecionar
        public function selecionar(){

            require "../Conexao/conexao.php";
            $stmt = $pdo->prepare("SELECT * FROM livros");
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
                $stmt = $pdo->prepare("SELECT * FROM livros WHERE id = :id");
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
            $nome_livro,
            $descricao,
            $classificacao,
            $genero,
            $referencias){

            require "../Conexao/conexao.php";
            $stmt = $pdo->prepare("INSERT INTO livros (nome_livro, descricao, classificacao, genero, referencias) VALUES (:nome_livro, :descricao, :classificacao, :genero, :referencias)");
            $stmt->bindParam(":nome_livro", $nome_livro);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam(":classificacao", $classificacao);
            $stmt->bindParam(":genero", $genero);
            $stmt->bindParam(":referencias", $referencias);
            $stmt->execute();

            $resultado = $stmt;

            if(!$resultado){

                echo "<script> alert('Erro ao cadastrar o livro');window.location.href='../View/cadastrar.php'; </script>";

            }else{

                 echo "<script> alert('Sucesso ao cadastrar o livro');window.location.href='../View/home.php'; </script>";

            }
            
        }

        //Realiza a instrução de editar
        public function editar(
            $id,
            $nome_livro,
            $descricao,
            $classificacao,
            $genero,
            $referencias){


            if(isset($id) && $id != NULL){

                //Instrução de editar
                require "../Conexao/conexao.php";
                $stmt = $pdo->prepare("UPDATE livros SET nome_livro = :nome_livro, descricao = :descricao, classificacao = :classificacao, genero = :genero, referencias = :referencias WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->bindParam(":nome_livro", $nome_livro);
                $stmt->bindParam(":descricao", $descricao);
                $stmt->bindParam(":classificacao", $classificacao);
                $stmt->bindParam(":genero", $genero);
                $stmt->bindParam(":referencias", $referencias);
                $stmt->execute();

                $resultado = $stmt;

                if(!$resultado){

                    echo "<script> alert('Erro ao editar o livro');window.location.href='../View/home.php'; </script>";

                }else{

                    echo "<script> alert('Sucesso ao editar o livro');window.location.href='../View/home.php'; </script>";

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
                $stmt = $pdo->prepare("DELETE FROM livros WHERE id = :id");
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