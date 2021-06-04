<?php


class Media
{
    private float $media = 0 ;

    public function __construct($notas)
    {
        $this->calculaMedia($notas, sizeof($notas));
    }
    public function calculaMedia(array  $notas, float $tamanho)
    {
        foreach ($notas as $nota)
        {
            $this->media += $nota;
        }
        $this->media /= $tamanho;
    }

    public function __tostring() :string
    {
        return $this->media;
    }
}