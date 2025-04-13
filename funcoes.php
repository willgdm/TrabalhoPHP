<?php 
    function adicionar_personagem($dados_post) {
        $novo = [
            "id" => uniqid(),
            "nome" => $dados_post["nome"],
            "ocupacao" => $dados_post["ocupacao"],
            "nascimento" => $dados_post["nascimento"],
            "falecimento" => $dados_post["falecimento"],
            "descricao" => $dados_post["descricao"],
            "imagem" => $dados_post["imagem"],
            "nacionalidade" => $dados_post["nacionalidade"]
        ];
        $_SESSION["novos_personagens"][] = $novo;
        return "Personagem cadastrado com sucesso!";
    }

    function buscar_personagem_por_id($id, $lista_personagens) {
        foreach ($lista_personagens as $p) {
            if ($p["id"] == $id) {
                return $p;
            }
        }
        return null;
    }
?>