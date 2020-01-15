<?php
$host = "186.202.152.139";
$user = "decorlimp";
$pass = "lorenzo10";
$bd = "decorlimp";

// Create connection
$conecta = mysqli_connect($host, $user, $pass, $bd);
// Check connection
if (!$conecta) {
    die("Erro de conexão com localhost, o seguinte erro ocorreu -> " . mysqli_connect_error());
}

$query = "INSERT INTO contato (nome, email, assunto, mensagem, telefone, codigo)
VALUES ('teste_nome', 'teste_email', 'teste_assunto', 'teste_mensagem', 'teste_telefone', '')";

if (mysqli_query($conecta, $query)) {
    echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conecta);
}

mysqli_close($conecta);
?>