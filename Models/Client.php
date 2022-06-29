<?php

/**
 * Client Model
 * Represent Client table in the database vente
 */
class Client{
    /**
     * name : name of the client
     *
     * @var string
     */
    public string $name;

    /**
     * id : the primary key and identifier of the user
     *
     * @var integer
     */
    public int $id;
    
    public function  __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}