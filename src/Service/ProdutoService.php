<?php

namespace App\Service;

use App\DAO\ProdutoDAO;
use App\Model\Produto;

require_once __DIR__ . '/../DAO/ProdutoDAO.php';
require_once __DIR__ . '/../Model/Produto.php';

class ProdutoService
{
    private ProdutoDAO $produtoDAO;

    public function __construct()
    {
        $this->produtoDAO = new ProdutoDAO();
    }

    public function cadastrarProduto(Produto $produto): array
    {
        return $this->produtoDAO->cadastrar($produto);
    }

    public function buscarProdutos(): array
    {
        $produtosPDO = $this->produtoDAO->buscarTodos();
        $produtos = [];

        foreach ($produtosPDO as $produtoPDO) {
            $produto = $this->getProduto($produtoPDO);
            $produtos[] = $produto;
        }

        return $produtos;
    }

    public function buscarProdutoPorId(int $id): ?Produto
    {
        $produtoPDO = $this->produtoDAO->buscarPorId($id);

        if ($produtoPDO->rowCount() > 0) {
            $produto = $produtoPDO->fetch();
            return $this->getProduto($produto);
        }

        return null;
    }

    private function getProduto(array $produtoData): Produto
    {
        $imagem = $produtoData['imagem'];
        $tipo = $produtoData['tipo'];
        $nome = $produtoData['nome'];
        $descricao = $produtoData['descricao'];
        $preco = $produtoData['preco'];
        $quantidade = $produtoData['quantidade'];
        $id = $produtoData['id'];
        $produto = new Produto($imagem, $tipo, $nome, $descricao, $preco, $quantidade);
        $produto->setId($id);

        return $produto;
    }
}
