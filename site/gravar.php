<?php
$nome = $_POST["nome"];
$cidade = $_POST["cidade"];
$atividade = $_POST["atividade"];
$faculdade = !empty($_POST["facul"]) ? $_POST["facul"] : null;
$profissao = !empty($_POST["profi"]) ? $_POST["profi"] : null;
$salario = $_POST["salario"];
$gostaria = $_POST["gostaria"];
$idade = $_POST["idade"];
$sexo = $_POST["sexo"];
$feliz = $_POST["feliz"];
 
try {
    $pdo = new PDO('mysql:host=localhost;dbname=quiz', 'root', Null);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('INSERT INTO dados (nome, cidade, atividade, facul, profi, salario, gostaria, idade, sexo, feliz) VALUES (:nome, :cidade, :atividade, :facul, :profi, :salario, :gostaria, :idade, :sexo, :feliz)');
    $stmt->execute(array(
        ':nome' => $nome,
        ':cidade' => $cidade,
        ':atividade' => $atividade,
        ':facul' => $faculdade,
        ':profi' => $profissao,
        ':salario' => $salario,
        ':gostaria' => $gostaria,      
        ':idade' => $idade,
        ':sexo' => $sexo,
        ':feliz' => $feliz
    ));
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>

