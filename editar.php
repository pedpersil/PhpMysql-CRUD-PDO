<?php 

include_once "conexao.php";

try {

    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_var($_POST['nome']);
    $email = filter_var($_POST['email']);
    $senha = filter_var($_POST['senha']);

    $update = $conn->prepare("UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id");
    $update->bindParam(':id', $id);
    $update->bindParam(':nome', $nome);
    $update->bindParam(':email', $email);
    $update->bindParam(':senha', $senha);
    $update->execute();

    header("location: index.php");


} catch (PDOException $e) {

    echo $e->getMessage();

}


?>