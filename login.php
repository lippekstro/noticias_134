<?php
require_once "cabecalho.php";

if (isset($_SESSION['usuario'])) {
    header("location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];

    try {
        $query = "select * from usuario where email = :email LIMIT 1";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $registro = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0) {
            if (password_verify($senha, $registro['senha'])) {
                $_SESSION['usuario']['nome'] = $registro['nome'];
                $_SESSION['usuario']['email'] = $registro['email'];
                $_SESSION['usuario']['id_usuario'] = $registro['id_usuario'];
                $_SESSION['usuario']['nivel_acesso'] = $registro['nivel_acesso'];

                header('location: index.php');
            } else {
                $erroMsg[] = "Email ou Senha errado";
            }
        } else {
            $erroMsg[] = "Email ou Senha errado";
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>

<div id="flex">
    <div id="login">
        <form action="login.php" method="post">
            <fieldset id="flex">
                <span class="material-symbols-outlined" id="fontcad">person</span>
                <div>
                    <label for="nome">Email</label>
                    <input type="name" id="email" name="email" value="" placeholder="seu email" autofocus>

                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" value="" placeholder="Digite sua Senha">

                    <button id="btn" type="submit">Confirma</button>
                    <p>Ainda não tem uma conta?</p>
                    <a href="cadastro.php">Criar conta</a>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<?php
require_once "rodape.php";
?>