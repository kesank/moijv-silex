<?php


namespace Entity;

/**
 * Description of Game
 *
 * @author Etudiant
 */
class Game {
   
    /**
     *
     * @var integer
     */
   private $id;
   /**
    *
    * @var string 
    */
   private $title;
   /**
    *
    * @var string
    */
    
   private $image;
   /**
    *
    * @var \Entity\User 
    */
   private $user;
   /**
    *
    * @var \Entity\Category 
    */
   private $category;
   function getId() {
       return $this->id;
   }

   function getTitle() {
       return $this->title;
   }

   function getImage() {
       return $this->image;
   }

   function getUser() {
       return $this->user;
   }

   function getCategory() {
       return $this->category;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setTitle($title) {
       $this->title = $title;
   }

   function setImage($image) {
       $this->image = $image;
   }

   function setUser(\Entity\User $user) {
       $this->user = $user;
   }

   function setCategory(\Entity\Category $category) {
       $this->category = $category;
   }


}
