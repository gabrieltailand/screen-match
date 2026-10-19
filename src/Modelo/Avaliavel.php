<?php

// Todos os métodos são abstratos
interface Avaliavel
{
    public function avalia(float $nota): void;
    public function media(): float;
}
