<?php

    class Action_SQL{

        //
        public function selecionar(){

            require "../Conexao/conexao.php";
            $stmt = $pdo->prepare("SELECT * FROM livros");
            $stmt-> execute();

            $resultado = $stmt;

            if(!$resultado){

                echo "<script alert('Erro ao procurar as informações'); window.location.href='../index.php'; </script>";
            }

        return $stmt;

        }

        public function selecionar_id(){}
        public function inserir(
            $nome_livro,
            $descricao,
            $classificacao,
            $genero,
            $referencias){

            require "../Conexao/conexao.php";
            $stmt = $pdo->prepare("INSERT INTO livros (nome_livro, descricao, classificacao, referencias) VALUES (:nome_livro, descricao, classificacao, referencias) ");
            $stmt->bindParam(":nome_livro", $nome_livro);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam(":classificacao", $classificacao);
            $stmt->bindParam(":genero", $genero);
            $stmt->bindParam(":referencias", $referencias);
            $stmt->execute();

            $resultado = $stmt;

             if(!$resultado){

                echo "<script alert('Erro ao Cadastrar o livro'); window.location.href='../index.php'; </script>";
            }else{

                echo "<sript> alert('Sucesso ao cadastrar o Livro');window.location.href='../View/cadastrar.php'; </script>";
            }

        }
        public function editar(){}
        public function deletar(){}


    }





?>