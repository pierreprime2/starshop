<?php

namespace App\Model;

class Starship
{
        public function __construct(
                private int $id,
                private string $name,
                private string $class,
                private string $captain,
                private StarshipStatusEnum $status,
                private \DateTimeImmutable $arrivedAt
        ) {
        }

        public function getStatusImageFilename(): string
        {
                return match ($this->status) {
                        StarshipStatusEnum::WAITING => 'images/status-waiting.png',
                        StarshipStatusEnum::IN_PROGRESS => 'images/status-in-progress.png',
                        StarshipStatusEnum::COMPLETED => 'images/status-complete.png',
                };
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

        public function getStatusString(): string
        {
                return $this->status->value;
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

        /**
         * Get the value of arrivedAt
         */ 
        public function getArrivedAt()
        {
                return $this->arrivedAt;
        }

        /**
         * Set the value of arrivedAt
         *
         * @return  self
         */ 
        public function setArrivedAt($arrivedAt)
        {
                $this->arrivedAt = $arrivedAt;

                return $this;
        }
}
