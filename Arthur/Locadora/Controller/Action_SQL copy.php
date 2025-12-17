<?php

    require "../Conexao/conexao.php";

    class Action_SQL{

        //Realiza a instrução de selecionar
        public function selecionar(){

            require "../Conexao/conexao.php";
            $stmt = $pdo->prepare("SELECT * FROM filmes");
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
                $stmt = $pdo->prepare("SELECT * FROM filmes WHERE id = :id");
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
            $filme,
            $descricao,
            $alugado,
            $quem_alugou,
            $ano,
            $genero,
            $classificacao,
            $diretor,
            $sinopse,
            $status){

            require "../Conexao/conexao.php";
            $stmt = $pdo->prepare("INSERT INTO filmes (filme, descricao, alugado, quem_alugou, ano, genero, classificacao, diretor, sinopse, status) VALUES (:filme, :descricao, :alugado, :quem_alugou, :ano, :genero, :classificacao, :diretor, :sinopse, :status)");
            $stmt->bindParam(":filme", $filme);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam(":alugado", $alugado);
            $stmt->bindParam(":quem_alugou", $quem_alugou);
            $stmt->bindParam(":ano", $ano);
            $stmt->bindParam(":genero", $genero);
            $stmt->bindParam(":classificacao", $classificacao);
            $stmt->bindParam(":diretor", $diretor);
            $stmt->bindParam(":sinopse", $sinopse);
            $stmt->bindParam(":status", $status);
            $stmt->execute();

            $resultado = $stmt;

            if(!$resultado){

                echo "<script> alert('Erro ao cadastrar o filme');window.location.href='../View/cadastrar.php'; </script>";

            }else{

                 echo "<script> alert('Sucesso ao cadastrar o filme');window.location.href='../View/home.php'; </script>";

            }
            
        }

        //Realiza a instrução de editar
        public function editar(
            $id,
            $filme,
            $descricao,
            $alugado,
            $quem_alugou,
            $ano,
            $genero,
            $classificacao,
            $diretor,
            $sinopse,
            $status){


            if(isset($id) && $id != NULL){

                //Instrução de editar
                require "../Conexao/conexao.php";
                $stmt = $pdo->prepare("UPDATE filmes SET filme = :filme, descricao = :descricao, alugado = :alugado, quem_alugou = :quem_alugou, ano = :ano, genero = :genero, classificacao = :classificacao, diretor = :diretor, sinopse = :sinopse, status = :status WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->bindParam(":filme", $filme);
                $stmt->bindParam(":descricao", $descricao);
                $stmt->bindParam(":alugado", $alugado);
                $stmt->bindParam(":quem_alugou", $quem_alugou);
                $stmt->bindParam(":ano", $ano);
                $stmt->bindParam(":genero", $genero);
                $stmt->bindParam(":classificacao", $classificacao);
                $stmt->bindParam(":diretor", $diretor);
                $stmt->bindParam(":sinopse", $sinopse);
                $stmt->bindParam(":status", $status);
                $stmt->execute();

                $resultado = $stmt;

                if(!$resultado){

                    echo "<script> alert('Erro ao editar o filme');window.location.href='../View/home.php'; </script>";

                }else{

                    echo "<script> alert('Sucesso ao editar o filme');window.location.href='../View/home.php'; </script>";

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
                $stmt = $pdo->prepare("DELETE FROM filmes WHERE id = :id");
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