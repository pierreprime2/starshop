<?php

namespace App\Model;

class Starship
{
    public function __construct(
        private int $id,
        private string $name,
        private string $class,
        private string $captain,
        private string $status,
    ) {
    }

    

        /**
         * Get the value of status
         */ 
        public function getStatus()
        {
                return $this->status;
        }

        /**
         * Set the value of status
         *
         * @return  self
         */ 
        public function setStatus($status)
        {
                $this->status = $status;

                return $this;
        }

        /**
         * Get the value of captain
         */ 
        public function getCaptain()
        {
                return $this->captain;
        }

        /**
         * Set the value of captain
         *
         * @return  self
         */ 
        public function setCaptain($captain)
        {
                $this->captain = $captain;

                return $this;
        }

        /**
         * Get the value of class
         */ 
        public function getClass()
        {
                return $this->class;
        }

        /**
         * Set the value of class
         *
         * @return  self
         */ 
        public function setClass($class)
        {
                $this->class = $class;

                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }
}
