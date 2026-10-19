<?php

abstract class Titulo implements Avaliavel
{
    private array $notas;

    // Método construtor: um método chamado automaticamente sempre que um objeto é instanciado
    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
    )

    {
        $this->notas = [];
    }

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeDeNotas = count($this->notas);

        return $somaNotas / $quantidadeDeNotas;
    }

    // implementação de método abstrato
    abstract public function duracaoEmMinutos(): int;
}