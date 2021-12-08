<?php


    class PostManager extends BaseManager
    {
        /**
        * @param int|null$number
        * @return array
        */
        public function getPosts(int $number): array
        {
            if ($number) {
                $query = $this->db->prepare('SELECT * FROM posts_table ORDER BY post_id DESC LIMIT :limit');
                $query->bindValue(':limit',$number,\PDO::PARAM_INT);
                $query->execute();
            } else {
                $query = $this->db->query(' SELECT * FROM posts_table ORDER BY post_id DESC');
            }
            $query->setFetchMode(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE,
            'Entity\Post');

            return$query->fetchAll();
        }

        /**
        * @param int $id
        * @return Post|bool
        */
        public function getPostById(int $id)
        {
            $query = $this->db->prepare('SELECT* FROM posts_table WHERE post_id = :post_id') ;
            $query->bindValue(':post_id',$id,\PDO::PARAM_INT);
            $query->execute();
            $query->setFetchMode(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE,'Entity\Post');
            return$query->fetch();
        }
    }

?>