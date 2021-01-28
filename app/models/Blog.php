<?php

namespace App\Models;

use DBAbstractModel;

require_once('DBAbstractModel.php');
class Blog extends DBAbstractModel
{
    private $title;
    private $blog;
    private $image;
    private $created;
    private $updated;
    private $tags;
    private $Author;
    private $comment = [];
    private $hora;


    private static $instancia;
    public static function getInstancia()
    {
        if (!isset(self::$instancia)) {

            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }
        return self::$instancia;
    }
    public function get()
    {
    }
    public function set($user_data = array(), $user_data2 = array())
    {
        foreach ($user_data as $campo => $value) {
            $$campo = $value;

            $this->query = "INSERT INTO blog(title,blog,author,image,created,tags,comment,updated) VALUES(:title,:blog,:author,:image,:created,:tags,:comment,:updated)";
            $this->parametros['title'] = $$campo->getTitle();
            $this->parametros['author'] = $$campo->getAuthor();
            $this->parametros['blog'] = $$campo->getBlog();
            $this->parametros['image'] = $$campo->getImage();
            $this->parametros['tags'] = $$campo->getTags();
            $this->parametros['comment'] = $$campo->getNComment();
            $this->parametros['created'] = $$campo->getCreated();
            $this->parametros['updated'] = $$campo->getUpdated();

            $this->get_results_from_query();
            $this->mensaje = 'SH agregado correctamente';
        }
        foreach ($user_data2 as $campo2 => $value) {
            $$campo2 = $value;
            $this->query = "INSERT INTO comment(blog_id,user,comment,approved,created,updated) VALUES(:blog_id,:user,:comment,:approved,:created,:updated)";
            $this->parametros['blog_id'] = $this->lastInsert();
            $this->parametros['user'] = $$campo2->getUser();
            $this->parametros['comment'] = $$campo2->getComment();
            $this->parametros['approved'] = 0;
            $this->parametros['created'] = $$campo2->getCreated();
            $this->parametros['updated'] = $$campo2->getUpdated();
            $this->get_results_from_query();
            $this->mensaje = 'SH agregado correctamente';
        }
    }
    public function edit()
    {
    }
    public function delete()
    {
    }

    public function blog()
    {
        $this->title = "";
        $this->blog = "";
        $this->image = "";
        $this->Author = "";
        $this->created = "";
        $this->updated = "";
        $this->tags = "";
    }
    public function setTitle($newTitle)
    {
        $this->title = $newTitle;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setBlog($newBlog)
    {
        $this->blog = $newBlog;
    }
    public function getBlog()
    {
        return $this->blog;
    }
    public function setImage($newImage)
    {
        $this->image = $newImage;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setAuthor($newAuthor)
    {
        $this->Author = $newAuthor;
    }
    public function getAuthor()
    {
        return $this->Author;
    }
    public function setTags($newTags)
    {
        $this->tags = $newTags;
    }
    public function getTags()
    {
        return $this->tags;
    }

    public function setCreated($dateTime)
    {


        $this->hora = $dateTime->format('H:i:s');
        $this->created = $dateTime->format('Y-m-d H:i:s');
    }

    public function getHora()
    {

        return $this->hora;
    }
    public function setUpdated($update)
    {
        $this->updated = $update;
    }
    public function getCreated()
    {
        return $this->created;
    }

    public function getUpdated()
    {
        return $this->updated;
    }
    public function addComment($Newcomment)
    {
        array_push($this->comment, $Newcomment);
    }
    public function getComment()
    {
        return $this->comment;
    }
    public function getNComment()
    {
        return count($this->comment);
    }
}
