<?php

namespace App\entity;

class Post{

    private $post_id;
    private $date;
    private string $title;
    private string $content;
    private int $user_id;



    //Getters//
    public function getPost_Id(){
        return($this->post_id);
    }

    public function getDate(){
        return($this->date);
    }

    public function getTitle(){
        return($this->title);
    }

    public function getContent(){
        return($this->content);
    }
    public function getUser_Id(){
        return($this->user_id);
    }

    public function getAuthor(): User
    {
        return (new UserManager())->getUserById($this->user_id);
    }


    //Setter//
    public function setDate($newDate){
        $this->date = $newDate;
    }
    public function setTitle($title){
        $this->title = $newTitle;
    }
    public function setContent($newContent){
        $this->content = $newContent;
    }

    public function setUser_id($newUser_Id){
        $this->user_id = $newUser_Id;
    }
    


}

?>