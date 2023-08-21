<?php
include 'includes/header.php';


class Db{

    protected $nombre;

    public function __construct(string $nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }
}