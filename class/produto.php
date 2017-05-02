<?php 

class Produto {
	private $id;
	private $nome;
	private $preco;
	private $descricao;
	private $categoria;
	private $usado;

	/* GETTERS E SETTERS */

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function _setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of nome.
     *
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Sets the value of nome.
     *
     * @param mixed $nome the nome
     *
     * @return self
     */
    public function _setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Gets the value of preco.
     *
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Sets the value of preco.
     *
     * @param mixed $preco the preco
     *
     * @return self
     */
    public function _setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Gets the value of descricao.
     *
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Sets the value of descricao.
     *
     * @param mixed $descricao the descricao
     *
     * @return self
     */
    public function _setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Gets the value of categoria.
     *
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Sets the value of categoria.
     *
     * @param mixed $categoria the categoria
     *
     * @return self
     */
    public function _setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Gets the value of usado.
     *
     * @return mixed
     */
    public function getUsado()
    {
        return $this->usado;
    }

    /**
     * Sets the value of usado.
     *
     * @param mixed $usado the usado
     *
     * @return self
     */
    public function _setUsado($usado)
    {
        $this->usado = $usado;

        return $this;
    }
	/* Métodos */

	public function precoComDesconto($valor = 0.1) {
		if ($valor > 0 && $valor <= 0.5) {
		return $this->preco -= $this->preco * $valor;
		}
	}
}