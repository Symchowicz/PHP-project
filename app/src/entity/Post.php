<?php 
namespace App\Models;

class Post
{
    protected $post_id;
    protected $date;
    protected $title;
    protected $content;
    protected $user_id;

    // GET METHODS
    public function getPostId()
    {
        return $this->post_id
        ;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    // SET METHODS
    public function setDate(string $date)
    {
        $this->date = $date;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    /* CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    } */
}