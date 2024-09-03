<?php 

class Movies {
    
    public $name;
    public $year;
    public $genres;
    public $runtime;


    function __construct($_name, $_year, $_genres, $_runtime){
        $this->name = $_name;
        $this->year = $_year;
        $this->genres = $_genres;
        $this->runtime = $_runtime;

    }
       







}
