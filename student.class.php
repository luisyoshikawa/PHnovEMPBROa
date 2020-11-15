<?php

    class Student{
        private $reg;
        private $name;
        private $firsttest;
        private $sectest;
        private $project;

        public function getreg(){
            return $this->reg;
            
        }
        public function setreg($regnew){
            $this->reg = $regnew;
            
        }

        public function getproject(){
            return $this->project;
            
        }

        public function setproject($newproject){
            $this->project = $newproject;
            
        }


        public function gettest(){
            return $this->firsttest;
            
        }

        public function settest1($newtest1){
            $this->firsttest = $newtest1;
            
        }
        public function gettest2(){
            return $this->sectest;
            
        }

        public function settest2($newtest2){
            $this->sectest = $newtest2;
            
        }
        public function getname(){
            return $this->name;
            
        }
        public function setname($newname){
            $this->name = $newname;
            
        }






        public function getgrade(){
            $firsttest = $this->firsttest;
            $secondtest = $this->sectest;
            $project = $this->project;

            $verify = ($firsttest * 3.5) + ($secondtest * 3.5) + ($project * 3.0);
            if($verify >= 70){
                echo "aprovado! </br>";
            } else {
                echo "reprovado!! </br>";
            }
        }
    }

?>