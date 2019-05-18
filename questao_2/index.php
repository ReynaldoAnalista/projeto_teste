<?php
$senha = $_POST['senha'];

if (isset($_SESSION['senha']) && $_SESSION['senha'] == "123456") {
    header("Location: http://www.google.com");
    exit();
}

if (isset($_POST['senha']) && $_POST['senha'] == "123456") {
    $_SESSION['senha'] = $senha;
    header("Location: http://www.google.com");
    exit();
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Questão 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <link href="index.css" rel="stylesheet">
</head>
<body class="text-center">
    <form method="post" action="index.php" class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">Insira a Senha</h1>
        <input type="password" name="senha" class="form-control" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acesso</button>
    </form>
</body>
</html>