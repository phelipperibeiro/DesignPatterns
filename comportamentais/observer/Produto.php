<?php

class Produto implements \SplSubject
{

    protected $id;
    protected $nome;
    protected $categoria;

    /**
     *
     * @var SplObserver 
     */
    protected $observadores = [];

    public function __construct($id, $nome)
    {
        $this->id = $id;
        $this->nome = $nome;
    }

    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->nome;
    }

    public function setNome($value)
    {
        $this->nome = $value;
        $this->notify();
        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($value)
    {
        $this->categoria = $value;
        return $this;
    }

    public function detach(\SplObserver $observer)
    {
        
    }

    public function attach(\SplObserver $observer)
    {
        $this->observadores[] = $observer;
    }

    public function notify()
    {
        foreach ($this->observadores as $observador) {
            $observador->update($this);
        }
    }

}
