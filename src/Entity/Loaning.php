<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Entity;

/**
 * Description of Loaning
 *
 * @author Etudiant
 */
class Loaning {
    
   private $id;
   /**
    *
    * @var \Datetime 
    */
   private $dateEnd;
   /**
    *
    * @var \Datetime
    */
   private $dateStart;
   /**
    *The user that did this loaning
    * @var \Entity\User
    */
   private $user;
   /**
    *The game associated with loaning
    * @var \Entity\Game
    */
   private $game;
   function getId() {
       return $this->id;
   }

   function getDateEnd() {
       return $this->dateEnd;
   }

   function getDateStart() {
       return $this->dateStart;
   }

   function getUser() {
       return $this->user;
   }

   function getGame() {
       return $this->game;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setDateEnd(\Datetime $dateEnd) {
       $this->dateEnd = $dateEnd;
   }

   function setDateStart(\Datetime $dateStart) {
       $this->dateStart = $dateStart;
   }

   function setUser(\Entity\User $user) {
       $this->user = $user;
   }

   function setGame(type $game) {
       $this->game = $game;
   }


}
