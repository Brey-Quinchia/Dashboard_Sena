<?php
    class ObjectController{
        protected $option1 = 'ProgramasEspeciales'; 
        protected $option2 = 'CoordinacionAcademica'; 
        protected $option3 = 'AmpliacionCobertura';
        public function View($type)
        {
            $opt1 = $this->option1; 
            $opt2 = $this->option3; 
            $opt3 = $this->option3; 
            switch ($type){
                case $opt1:
                    //*
                    include_once('../view/AlertSpecialProgram.php'); 
                case $opt2: 
                    //*
                    include_once('../view/AlertSpecialProgram.php'); 
                case $opt3: 
                    //* 
                    include_once('../view/AlertSpecialProgram.php');
            }
        }
        public function Model($type)
        {
            $opt1 = $this->option1; 
            $opt2 = $this->option3; 
            $opt3 = $this->option3;
            switch ($type){
                case $opt1:
                    //*
                    include_once('../model/AlertSpecialProgram.php'); 
                case $opt2: 
                    //*
                    include_once('../model/AlertSpecialProgram.php'); 
                case $opt3: 
                    //* 
                    include_once('../model/AlertSpecialProgram.php');
            }
        }
    }
?>