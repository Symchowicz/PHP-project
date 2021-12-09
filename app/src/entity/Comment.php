<?php

namespace App\entity;

class Comment{

    private string $comment_id;
    private $date;
    private string $user_id;
    private int $content;

    public function __construct(string $comment_id, int $user_id, string $content)
    {
        $this->date = $date;
        $this->comment_id = $comment_id;
        $this->content = $content;
        $this->user_id = $user_id;
    }


    //Afficher//
    public function afficheDate(){
        echo($this->date);
        echo("<br>");
    }

    public function afficheComment_id(){
        echo($this->comment_id);
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

    public function getComment_id(){
        return($this->comment_id);
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
    public function setComment_id($comment_id){
        $this->comment_id = $newComment_id;
    }
    public function setContent($newContent){
        $this->content = $newContent;
    }

    public function setUser_id($newUser_Id){
        $this->user_id = $newUser_Id;
    }
    


}

?>