<?php

namespace App\DAO;

require_once __DIR__ . '/../Factory/ConnectionFactory.php';
require_once __DIR__ . '/../Model/Produto.php';

use App\Factory\ConnectionFactory;
use App\Model\Produto;
use Exception;
use PDO;
use PDOException;

class ProdutoDAO
{
    private ?PDO $conexao;

    public function __construct()
    {
        $conexao = ConnectionFactory::getConnection();
        $this->conexao = $conexao;
    }

    /**
     * @throws Exception
     */
    // No método cadastrarProduto()
    public function cadastrarProduto(Produto $produto): array
    {
        try {
            $query = "INSERT INTO produtos (imagem, tipo, nome, descricao, preco, quantidade, data_criacao) VALUES (?, ?, ?, ?, ?, ?, ?)";

            if (isset($this->conexao)) {
                $stmt = $this->conexao->prepare($query);
            }

            $imagem = $produto->getImagem();
            $stmt->bindParam(1, $imagem);
            $tipo = $produto->getTipo();
            $stmt->bindParam(2, $tipo);
            $nome = $produto->getNome();
            $stmt->bindParam(3, $nome);
            $descricao = $produto->getDescricao();
            $stmt->bindParam(4, $descricao);
            $preco = $produto->getPreco();
            $stmt->bindParam(5, $preco);
            $quantidade = $produto->getQuantidade();
            $stmt->bindParam(6, $quantidade);
            $dataCriacao = $produto->getDataCriacao();
            $dataCriacaoFormatada = $dataCriacao->format('Y-m-d H:i:s');
            $stmt->bindParam(7, $dataCriacaoFormatada);

            $stmt->execute();

            return array(
                'status' => 200,
                'message' => 'Produto cadastrado com sucesso.'
            );
        } catch (PDOException $e) {
            return array(
                'status' => $e->getCode(),
                'message' => 'Erro ao cadastrar produto: ' . $e->getMessage()
            );
        }
    }

}
