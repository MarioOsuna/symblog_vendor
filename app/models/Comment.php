<?php

namespace App\Models;



class Comment 
{
    private $user;
    private $comment;
    private $blog;
    private $created;
    private $approved;
    private $updated;

    public function Comment()
    {
        $this->user="";
        $this->comment="";
        $this->blog="";
        $this->created="";
        $this->approved="";
        $this->updated="";
    }
   
    public function setUser($newUser)
    {
        $this->user=$newUser;
    
    }
    public function getUser(){
        return $this->user;
    }
    public function setComment($newComment){
        $this->comment=$newComment;
    }
    public function getComment(){
        return $this->comment;
    }
    public function setBlog($newBlog){
        $this->blog=$newBlog;
    }
    public function getBlog(){
        return $this->blog;
    }
    public function setCreated($dateTime){
        $this->hora = $dateTime->format('H:i:s');
        $this->created = $dateTime->format('Y-m-d H:i:s');
    }
    public function getCreated(){
        return $this->created;
    }
   
    public function getUpdated(){
        return $this->created;
    }

    /**
     * Get the value of approved
     */ 
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set the value of approved
     *
     * @return  self
     */ 
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }
}
