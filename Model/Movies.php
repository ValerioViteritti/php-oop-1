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
    
    public function printInfoMovies(){
        echo "<li>Anno: $this->year</li>";
        echo "<li>Genere: $this->genres</li>";
        echo "<li>Durata: $this->runtime</li>";
    }
    
    
    public function printName(){

        echo $this->name;
    }







}
