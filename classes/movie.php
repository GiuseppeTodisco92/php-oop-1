<?php

class Movie {
    public $title;
    public $moviedirector;
    public $genre;
    public $year;


    public function __construct($_title, $_moviedirector, $_genre, $_year)
    {
        $this->title = $_title;
        $this->moviedirector = $_moviedirector;
        $this->genre = $_genre;
        $this->year = $_year;
    }

}