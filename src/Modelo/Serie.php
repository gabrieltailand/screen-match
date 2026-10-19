<?php

// usando o conceito de Herança usando o 'extends'
class Serie extends Titulo
{
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $temporadas,
        public readonly int $episodioPorTemporada,
        public readonly int $minutosPorEpisodio 
    )

    {
        parent::__construct($nome, $anoLancamento, $genero);
    }

    #[Override]
    public function duracaoEmMinutos(): int
    {
        return $this->temporadas * $this->episodioPorTemporada * $this->minutosPorEpisodio;
    }
}