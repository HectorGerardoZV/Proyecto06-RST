<?php

class Blog{

    private $idBlog;
    private $title;
    private $creator;
    private $stars;
    private $content;
    private $image;

    public function __construct($data = [])
    {
        $this->idBlog = $data["idBlog"]??-1;
        $this->title = $data["title"]??"";
        $this->creator = $data["creator"]??"";
        $this->stars = $data["stars"]??1;
        $this->content = $data["content"]??"";
        $this->image = $data["image"]??"";
    }

    public function setData($data = []){
        $this->title = $data["title"]??"";
        $this->creator = $data["creator"]??"";
        $this->stars = $data["stars"]??1;
        $this->content = $data["content"]??"";
        $this->image = $data["image"]??"";
    }

    /**
     * Set IdBlog
     */
    public function setIdBlog($idBlog){
        $this->idBlog = $idBlog;
    }
    /**
     * Get IdBlog
     */
    public function getIdBlog(){
        return $this->idBlog;
    }
    /**
     * Set Title
     */
    public function setTitle($title){
        $this->title = $title;
    }
    /**
     * Get Title
     */
    public function getTitle(){
        return $this->title;
    }
    /**
     * Set Creator
     */
    public function setCreator($creator){
        $this->title = $creator;
    }
    /**
     * Get Creator
     */
    public function getCreator(){
        return $this->creator;
    }
    /**
     * Set Stars
     */
    public function setSatars($stars){
        $this->stars = $stars;
    }
    /**
     * Get Stars
     */
    public function getStars(){
        return $this->stars;
    }
    /**
     * Set Content
     */
    public function setContent($content){
        $this->content = $content;
    }
    /**
     * Get Content
     */
    public function getContent(){
        return $this->content;
    }
    /**
     * Set Image
     */
    public function setImage($image){
        $this->image = $image;
    }
    /**
     * Get Image
     */
    public function getImage(){
        return $this->image;
    }



}
