<?php

namespace App\Models;


use DBAbstractModel;

require_once('DBAbstractModel.php');

class Comment extends DBAbstractModel
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
    public function get()
    {
    }
    public function set($user_data = array())
    {
         foreach ($user_data as $key => $value) {
            $$campo = $value;
           
        } 
         $this->query="INSERT INTO comment(blog_id,user,comment,approved,created,updated) VALUES(:blog_id,:user,:comment,:approved,:created,:updated)";
            $this->parametros['blog_id']=$blog;
            $this->parametros['user']=$$campo->getUser();
            $this->parametros['comment']=$$campo->getComment();
            $this->parametros['approved']=1;
            $this->parametros['created']=$$campo->getCreated();
            $this->parametros['updated']=$$campo->getUpdated();
            $this->get_results_from_query();
            $this->mensaje='SH agregado correctamente';
    }
    public function edit()
    {
    }
    public function delete()
    {
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
