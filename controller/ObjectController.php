<?php
    class ObjectController{
        private $option1 = 'ProgramasEspeciales'; 
        private $option2 = 'CoordinacionAcademica'; 
        private $option3 = 'AmpliacionCobertura';
        public function View($type)
        {
            $opt1 = $this->option1; 
            $opt2 = $this->option2; 
            $opt3 = $this->option3; 
            switch ($type){
                case $opt1:
                    //*
                    $viewInclude = '../view/AlertSpecialProgram.php';
                    break;
                case $opt2: 
                    //*
                    $viewInclude = '../view/AlertSpecialProgram.php';
                    break; 
                case $opt3: 
                    //* 
                    $viewInclude = '../view/AlertSpecialProgram.php';
                    //include_once('../view/AlertSpecialProgram.php');
                    break; 
            }
            return $viewInclude;
        }
        public function ModelInclude($type)
        {
            $opt1 = $this->option1; 
            $opt2 = $this->option3; 
            $opt3 = $this->option3;
            switch ($type){
                case $opt1:
                    //*
                    $ModelInclude ='../models/SpecialProgram.php';
                    break;  
                case $opt2: 
                    //*
                    $ModelInclude= '../models/AlertSpecialProgram.php'; 
                    break;
                case $opt3: 
                    //* 
                    $ModelInclude= '../models/AlertSpecialProgram.php';
                    break; 
            }
            return $ModelInclude;
        }
    }
?>