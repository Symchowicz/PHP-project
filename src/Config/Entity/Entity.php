<?php
    namespace Entity;

    use Model\CommentManager;
    use Model\UserManager;

    class Post extends BaseEntity
    {
        private $id;
        private $date;
        private $title;
        private $content;
        private $authorId;

        /**
        * @return mixed
        */
        public function getId()
        {
            return $this->id;
        }

        /**
        * @return \DateTime
        */
        public function getDate(): \DateTime
        {
            return new \DateTime($this->Date);
        }
    }
?>