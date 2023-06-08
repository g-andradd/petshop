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
        return $this->produtoDAO->cadastrarProduto($produto);
    }

}
