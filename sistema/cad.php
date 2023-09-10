<?php
    include "configuracao.php";
    switch ($_REQUEST["acao"]){
        case "cadastrar" : 
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $dataNascimento = $_POST["dataNascimento"];
            $senha = $_POST["senha"];
            $departamento = $_POST["departamentoId"];

            $sql = "INSERT INTO usuario (nome, email, dataNascimento, senha, departamentoId) VALUES ('{$nome}','{$email}', '{$dataNascimento}', '{$senha}', '{$departamento}')";
            $res = $conn->query($sql);
            if($res==true){
                echo "<script>alert('Cadastro com Sucesso!');</script>";
                echo "<script>window.location.href = '../paginas/listarUsuario.php';</script>";
            }else{
                echo "<script>alert('Não foi possível cadastrar!');</script>";
                echo "<script>window.location.href = '../paginas/listarUsuario.php';</script>";
            }  
            break;             
            break;            
        case "editar" : 
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $dataNascimento = $_POST["dataNascimento"];
            $senha = $_POST["senha"];
            $departamento = $_POST["departamentoId"];

            $sql = "UPDATE usuario SET nome='{$nome}', email='{$email}', dataNascimento='{$dataNascimento}', senha='{$senha}', departamentoId='{$departamento}' WHERE id=".$_POST["id"];
            $res = $conn->query($sql);
            if($res==true){
                echo "<script>alert('Alterado com Sucesso!');</script>";
                echo "<script>window.location.href = '../paginas/listarUsuario.php';</script>";
            }else{
                echo "<script>alert('Não foi possível alterar!');</script>";
                echo "<script>window.location.href = '../paginas/listarUsuario.php';</script>";
            }  
            break;
        case "excluir" : 
            $sql = "DELETE FROM usuario WHERE id=".$_GET["id"];
            $res = $conn->query($sql);
            if($res==true){
                echo "<script>alert('Excluído com Sucesso!');</script>";
                echo "<script>window.location.href = '../paginas/listarUsuario.php';</script>";
            }else{
                echo "<script>alert('Não foi possível excluir!');</script>";
                echo "<script>window.location.href = '../paginas/listarUsuario.php';</script>";
            }  
        break;
    }
