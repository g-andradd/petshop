<?php

namespace App\Model;

use DateTime;

class Produto {
    private int $id;
    private string $imagem;
    private string $tipo;
    private string $nome;
    private string $descricao;
    private float $preco;
    private int $quantidade;
    private DateTime $dataCriacao;
    private ?DateTime $dataAlteracao;

    public function __construct($imagem, $tipo, $nome, $descricao, $preco, $quantidade) {
        $this->imagem = $imagem;
        $this->tipo = $tipo;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->dataCriacao = new DateTime();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getImagem(): string
    {
        return $this->imagem;
    }

    /**
     * @param string $imagem
     */
    public function setImagem(string $imagem): void
    {
        $this->imagem = $imagem;
    }

    /**
     * @return string
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * @param string $tipo
     */
    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * @param string $descricao
     */
    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    /**
     * @return float
     */
    public function getPreco(): float
    {
        return $this->preco;
    }

    /**
     * @param float $preco
     */
    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }

    /**
     * @return int
     */
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    /**
     * @param int $quantidade
     */
    public function setQuantidade(int $quantidade): void
    {
        $this->quantidade = $quantidade;
    }

    /**
     * @return DateTime
     */
    public function getDataCriacao(): DateTime
    {
        return $this->dataCriacao;
    }

    /**
     * @param DateTime $dataCriacao
     */
    public function setDataCriacao(DateTime $dataCriacao): void
    {
        $this->dataCriacao = $dataCriacao;
    }

    /**
     * @return DateTime
     */
    public function getDataAlteracao(): DateTime
    {
        return $this->dataAlteracao;
    }

    /**
     * @param DateTime $dataAlteracao
     */
    public function setDataAlteracao(DateTime $dataAlteracao): void
    {
        $this->dataAlteracao = $dataAlteracao;
    }



}
