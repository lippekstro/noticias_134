<?php

class Postagem{
    public $titulo;
    public $id_postagem
    public $conteudo;
    public $imagem;
    public $id_autor;
    public $id_categoria;
    public $date;
}

public function deletar (){
        $query = "DELETE FROM Postagem WHERE id_postagem=:id_postagem";
        //deleta pelo id
        $conexao = Conexao::conectar();
        // cria conexao
        $stmt = $conexao->prepare($query);
        // prepara a query
        $stmt->bindValue("id_postagem", $this->id_postagem);
        // vincula o valor
        $stmt->execute();
        // executa
}