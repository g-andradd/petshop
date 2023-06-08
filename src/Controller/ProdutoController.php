<?php

namespace App\Controller;

require_once __DIR__ . '/../Service/ProdutoService.php';
require_once __DIR__ . '/../Service/ImagemService.php';
require_once __DIR__ . '/../Model/Produto.php';

use App\Model\Produto;
use App\Service\ImagemService;
use App\Service\ProdutoService;
use Exception;

class ProdutoController
{

    private ProdutoService $produtoService;

    public function __construct()
    {
        $this->produtoService = new ProdutoService();
    }

    public function cadastrar(): void
    {
        $imagemTemp = $_FILES["imagem"]["tmp_name"];
        $nomeImagem = $_FILES["imagem"]["name"];
        $tipo = $_POST["tipo"];
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $preco = $_POST["preco"];
        $quantidade = $_POST["quantidade"];

        $imagemService = new ImagemService();

        if (!$imagemService->uploadImagem($imagemTemp, $nomeImagem)) {
            echo '<script>alert("Erro ao fazer o upload da imagem.");</script>';
            $this->redirect("/petshop/cadastro_produto?success=false");
            return;
        }

        $produto = new Produto($nomeImagem, $tipo, $nome, $descricao, $preco, $quantidade);

        $resultado = $this->produtoService->cadastrarProduto($produto);

        var_dump($resultado);
        if ($resultado['status'] === 200) {
            $this->redirect("/petshop/produtos?success=true");
        } else {
            echo '<script>alert("'. $resultado['status'] . $resultado['message'] . '");</script>';
            $this->redirect("/petshop/cadastro_produto?success=false");
        }
    }


    function redirect($url): void
    {
        header("Location:  " . $url);
        exit();
    }


}