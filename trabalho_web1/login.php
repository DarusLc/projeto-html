
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="estilo_login.css">
</head>
<body>
    <form class="login" action="testlogin.php" method="post">
        <div class="esquerda">
            <h1>faça seu login <br>E faça parte da nossa academia</h1>
            <img src="Workout.gif" alt="agachameto" class="esquerda-imagem">
        </div>
        <div class="direita">
            <div class="card-login">
                <div class="texto">
                    <label for="Usuario" class="label">Usuario</label>
                    <input type="email" name="email">
                </div>
                <div class="texto">
                    <label for="senha" class="label">Senha</label>
                    <input type="senha" name="senha">
                </div>

                <div id="click">
                    <p>Não tem conta clique <a href="form.php">aqui</a></p>
                </div>
                
                <button name= "submit" type= "submit" class="btn-login">Login</button>
            </div>
        </div>

    </main>

</body>
</html>