<?php
    class Movie{
        public $title;
        public $genre;
        public $runningTime;
        public $country;
        public $language;

        function __construct($_title, $_genre, $_runningTime, $_country, $_language)
        {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->runningTime = $_runningTime;
            $this->country = $_country;
            $this->language = $_language;
        }

        public function setTitle($_title){
            $this->title = $_title;
        }
    };
?>