<?php

namespace App\entity;

class Post{

    private $date;
    private string $title;
    private string $content;
    private int $user_id;

    public function __construct($date, string $title, string $content, int $user_id)
    {
        $this->date = $date;
        $this->title = $title;
        $this->content = $content;
        $this->user_id = $user_id;
    }


    //Afficher//
    public function afficheDate(){
        echo($this->date);
        echo("<br>");
    }

    public function afficheTitle(){
        echo($this->title);
        echo("<br>");
    }

    public function afficheContent(){
        echo($this->content);
        echo("<br>");
    }
    public function afficheUser_Id(){
        echo($this->user_id);
        echo("<br>");
    }


    //Getters//
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