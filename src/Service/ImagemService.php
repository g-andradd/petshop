<?php

namespace App\Service;

class ImagemService
{
    private $diretorioBase = "C:\\xampp\\htdocs\\petshop\\templates\\imgs\\";

    public function uploadImagem($imagemTemp, $nomeImagem): bool
    {
        $caminhoImagem = $this->diretorioBase . $nomeImagem;

        return move_uploaded_file($imagemTemp, $caminhoImagem);
    }

    /**
     * @return string
     */
    public function getDiretorioBase(): string
    {
        return $this->diretorioBase;
    }


}
