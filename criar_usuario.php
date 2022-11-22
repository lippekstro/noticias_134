<?php
require_once "cabecalho.php";
?>

    <div class="card-usuario">
            <div class="img-usuario">
                <span class="material-symbols-outlined" id="fontcad">person</span>
            </div>
            
            <div class="criar-usuario">
                <form action="" method="post">
                    <div class="label-usuario">
                        <label for="nome">Nome </label>
                        <input type="text" id="name" name="nome" style="border: none;">
                    </div>
                    
                    <div class="label-usuario">
                        <label for="email">Email </label>
                        <input type="text" id="email" name="email" style="border: none;">
                    </div>
                    
                    <div class="label-usuario">
                        <label for="senha">Senha </label>
                        <input type="password" id="senha" name="senha" style="border: none;">
                    </div>
                    
                    <div >
                        <input type="submit" value="CADASTRAR" id="butao-cadastrar"> 
                    </div>  
                </form>
            </div>
        </div>

<?php
require_once "rodape.php";
?>