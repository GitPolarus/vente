<?php
namespace Models;
/**
 * Client Model representing the Client Entity 
 */
class Client{
    /**
     * id: unique identifier of the client
     *
     * @var integer
     */
    public int $id;

    /**
     * name: the name of the client
     *
     * @var string
     */
    public string $name;
    
    /**
     * __construct of Client
     *
     * @param  int $id
     * @param  string $name
     * @return void
     */
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function __toString()
    {
        return "Client {
         id : $this->id |    
         name: $this->name
        }<br/>";
    }
}