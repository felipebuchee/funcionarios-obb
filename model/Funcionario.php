<?php

abstract class Funcionario
{
    protected string $nome;
    protected int $salarioBase = 1500;
    protected int $multiplicador;

    abstract function getSalario();
    abstract function getCargo();

    public function __toString(){
        return "Nome: ". $this->nome. ", Cargo: ". $this->getCargo(). ", Salário: ". $this->getSalario();
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of salarioBase
     */
    public function getSalarioBase(): int
    {
        return $this->salarioBase;
    }

    /**
     * Set the value of salarioBase
     */
    public function setSalarioBase(int $salarioBase): self
    {
        $this->salarioBase = $salarioBase;

        return $this;
    }

    /**
     * Get the value of multiplicador
     */
    public function getMultiplicador(): int
    {
        return $this->multiplicador;
    }

    /**
     * Set the value of multiplicador
     */
    public function setMultiplicador(int $multiplicador): self
    {
        $this->multiplicador = $multiplicador;

        return $this;
    }
}
