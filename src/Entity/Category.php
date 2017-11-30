<?php

namespace Entity;

/**
 * Description of Category
 *
 * @author Etudiant
 */
class Category {
   
    private $id;
    
    
    private $name;
    
    public function getId(){
        return $this->id;
        
    }
    public function getName(){
        return $this->name;
    }
    
    public function setId($id){
        return $this->id=$id;
    }
    public function setName($name){
        return $this->name=$name;
    }
            
}
