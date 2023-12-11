<?php

class Produto {
    
    private ?int $id;  
    private string $prato;    
    private string $ingredientes;       
    private string $imagem;
    private float $valor;
    
    public function __construct(?int $id, 
                                string $prato,  
                                string $ingredientes, 
                                string $imagem = "logo.png", 
                                float $valor)
    {
        $this->id = $id_Produto;
        $this->prato = $prato; 
        $this->ingredientes = $ingredientes;
        $this->imagem = $imagem;
        $this->valor = $valor;
    }

    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    
    /**
     * Get the value of nome
     */
    public function getPrato(): string
    {
        return $this->prato;
    }

    /**
     * Set the value of nome
     */
    public function setPrato(string $prato): self
    {
        $this->prato = $prato;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getIngredientes(): string
    {
        return $this->ingredientes;
    }

    /**
     * Set the value of descricao
     */
    public function setIngredientes(string $ingredientes): self
    {
        $this->ingredientes = $ingredientes;

        return $this;
    }

    /**
     * Get the value of imagem
     */
    public function getImagem(): string
    {
        return $this->imagem;
    }

    /**
     * Set the value of imagem
     */
    public function setImagem(string $imagem): self
    {
        $this->imagem = $imagem;

        return $this;
    }

    /**
     * Get the value of preco
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * Set the value of preco
     */
    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}
?>