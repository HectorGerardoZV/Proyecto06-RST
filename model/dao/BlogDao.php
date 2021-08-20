<?php


class BlogDao
{
    public $db;

    public function __construct()
    {
        $this->db = new mysqli("localhost", "root", "adminhector", "realestate");
    }

    public function create(Blog $blog)
    {
        $query = "INSERT INTO blogs (title,creator,stars,content, image)
        VALUES (
            '{$blog->getTitle()}',
            '{$blog->getCreator()}',
            {$blog->getStars()},
            '{$blog->getContent()}',
            '{$blog->getImage()}'
        );";

        try {
            $result = $this->db->query($query);
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
        return false;
    }


    public function find($idBlog)
    {
        $query = "SELECT * FROM blogs WHERE idBlog=$idBlog;";
        try {
            $result = $this->db->query($query);
            $blog = new Blog($result->fetch_assoc());
            return $blog;
        } catch (\Throwable $th) {
            return null;
        }
        return null;
    }

    public function update(Blog $blog)
    {
        $query = "UPDATE blogs SET 
        title = '{$blog->getTitle()}', 
        creator = '{$blog->getCreator()}', 
        stars = {$blog->getStars()}, 
        content = '{$blog->getContent()}', 
        image = '{$blog->getImage()}' WHERE idBlog = {$blog->getIdBlog()};";

        try {
            $result = $this->db->query($query);
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
        return false;
    }

    public function delete($idBlog)
    {
        $query = "DELETE FROM blogs WHERE idBlog = $idBlog;";
        try {
            $result = $this->db->query($query);
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
        return false;
    }

    public function findAll()
    {
        $query = "SELECT * FROM blogs;";
        $blogs = [];
        try {
            $result = $this->db->query($query);
            while ($data = $result->fetch_assoc()) {
                $blog = new Blog($data);
                $blogs[] = $blog;
            }
        } catch (\Throwable $th) {
            return null;
        }
        return $blogs;
    }
    public function findLike($pattern)
    {
        $query = "";
        $blogs = [];
        if ($pattern == "") {
            $query = "SELECT * FROM blogs;";
        } else {
            $query = "SELECT * FROM blogs WHERE title LIKE '%$pattern%';";
        }
        try {
            $result = $this->db->query($query);
            while ($data = $result->fetch_assoc()) {
                $blog = new Blog($data);
                $blogs[] = $blog;
            }
        } catch (\Throwable $th) {
            return null;
        }
        return $blogs;
    }
    public function findMany($many)
    {
        $query = "SELECT * FROM blogs LIMIT $many;";
        $blogs = [];
        try {
            $result = $this->db->query($query);
            while ($data = $result->fetch_assoc()) {
                $blog = new Blog($data);
                $blogs[] = $blog;
            }
        } catch (\Throwable $th) {
            return null;
        }
        return $blogs;
    }
}
