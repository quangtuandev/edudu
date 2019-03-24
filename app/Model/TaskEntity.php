<?php

namespace App\Model;

    class TaskEntity{
    
        public $id;
        public $title;
        public $start;
        public $end;
        public $status;

        function __construct($title, $start, $end, $status){
            $this->title      = $title;
            $this->start = $start;
            $this->end   = $end;
            $this->status    = $status;
        }
        function Task($title, $start, $end){
            $this->title      = $title;
            $this->start = $start;
            $this->end   = $end;
        }
    }
?>