<?php 

require_once __DIR__.'/../Model/Movies.php';

$db = [
    new Movies('Matrix', '2000', 'Fantasy', '2:00'),
    new Movies('Titanic', '1995', 'Drammatico', '2:20'),
    new Movies('Deadpool', '2012', 'Fantasy', '1:50'),
    new Movies('Avengers', '2010', 'Action-Fantasy', '2:30'),

];