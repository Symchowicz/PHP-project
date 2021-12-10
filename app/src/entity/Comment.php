<?php

namespace App\entity;

class Comment{

    private int $comment_id;
    private $date;
    private int $user_id;
    private string $content;
    private int $post_id;



    //Getters//
    public function getComment_Id(){
        return($this->comment_id);
    }

    public function getDate(){
        return($this->date);
    }

    public function getUser_Id(){
        return($this->user_id);
    }

    public function getContent(){
        return($this->content);
    }
    public function getPost_Id(){
        return($this->post_id);
    }

    public function getAuthor(): User
    {
        return (new UserManager())->getUserById($this->user_id);
    }
    


    //Setter//
    public function setComment_id($newComment_Id){
        $this->comment_id = $newComment_id;
    }
    public function setDate($newDate){
        $this->date = $newDate;
    }
    public function setUser_id($newUser_Id){
        $this->user_id = $newUser_Id;
    }
    public function setContent($newContent){
        $this->content = $newContent;
    }
    public function setPost_id($newPost_Id){
        $this->post_id = $newPost_Id;
    }
    


}

?>