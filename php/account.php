<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Conta</title>
<link rel="stylesheet" href="./css/account.css">
</head>
<body>

<div class="account-container">

    <div class="form-box">

        <!-- LOGIN -->
        <form action="login.php" method="POST">
            <div class="logo">
                    <div class="logo-icon"></div>
                </div>
            <h2>Login</h2>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>

        <!-- REGISTRO -->
        <form action="register.php" method="POST">
            <h2>Criar Conta</h2>
            <input type="text" name="name" placeholder="Nome" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Registrar</button>
        </form>

    </div>

</div>

</body>
</html>