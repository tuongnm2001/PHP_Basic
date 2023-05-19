<?php 
    class Student{

        public $name = "Nguyen Minh Tuong " ;

        protected $email ;

        private $address ;

        public function setName($value){
            $this->name = $value ;
        }

        public function getName(){
            return $this->name ;
        }
    }
?>