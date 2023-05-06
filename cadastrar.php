<?php 

include_once "conexao.php";

try {
    $nome = filter_var($_POST['nome']);
    $email = filter_var($_POST['email']);
    $senha = filter_var($_POST['senha']);

    if (empty($nome) || empty($email) || empty($senha)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    // Criptografar a senha usando password_hash()
    // $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

    $insert = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
    $insert->bindParam(':nome', $nome);
    $insert->bindParam(':email', $email);
    $insert->bindParam(':senha', $senha);
    $insert->execute();

    header("location: index.php");


} catch (PDOException $e) {

    echo $e->getMessage();

}

?>
