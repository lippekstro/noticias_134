<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,1,200" />
    <link rel="stylesheet" href="css/mystyle.css">
    <title>Criar Novo Usuario</title>
</head>
<body>
    <div class="card">
        <div class="img-usuario">
            <img src="img/novo-usuario2.png" id="img-usuario">
        </div>
        <div class="criar-usuario">
            <form action="" method="post">
                <div class="label-usuario">
                    <label for="nome">Nome: </label>
                    <input type="text" id="nome" name="nome">
                </div>
                <div class="label-usuario">
                    <label for="idade">Email: </label>
                    <input type="text" id="email" name="email">
                </div>
                <div class="label-usuario">
                    <label for="idade">Senha: </label>
                    <input type="number" id="senha" name="senha">
                </div>
                <div >
                    <input type="submit" value="CADASTRAR" id="bottom-cadastrar"> 
                </div>  
            </form>
        </div>

    </div>
</body>
</html>