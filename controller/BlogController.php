<?php

use BlogDao as BlogDao;
use Blog as Blog;

class BlogController
{

    public static function dashboard(Router $router)
    {
        $blogDao = new BlogDao();
        $pattern = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pattern = $_POST["pattern"];
        }
        $blogs = $blogDao->findLike($pattern);
        $router->render("admin/layout", [
            "titelPage" => "BlogDashBoard",
            "style" => "/view//admin/blogs/blog-style.css",
            "page" => "blog",
            "action" => "dashboard",
            "blogs" => $blogs
        ]);
    }
    public static function create(Router $router)
    {
        $blogDao = new BlogDao();
        $blog = new Blog();
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = $_POST;
            $data["image"] = $_FILES["image"]["name"];

            if ($data["title"] == "") {
                $errors["titleError"] = "Error: Complete the Blog title";
            }
            if ($data["creator"] == "") {
                $errors["creatorError"] = "Error: Complete the creator name";
            }
            if ($data["stars"] == "") {
                $errors["starsError"] = "Error: Select the number of the stars";
            }
            if ($data["content"] == "") {
                $errors["contentError"] = "Error: Complete the information about the blog";
            } else if (strlen($data["content"]) < 50) {
                $errors["contentError"] = "Error: The blog information must be more than 50 characters";
            }
            if ($data["image"] == "") {
                $errors["imageError"] = "Error: Select an image";
            }

            $blog->setData($data);
            if (empty($errors)) {
                //Saving the image
                $image = $_FILES["image"];
                $extensionImage = explode(".", $image["name"])[1];
                $imageName = md5(uniqid(rand(), true)) . "." . $extensionImage;
                move_uploaded_file($image["tmp_name"], "view/img/data/blogs/" . $imageName);
                $blog->setImage($imageName);
                //Addig property
                $result = $blogDao->create($blog);
                if ($result) {
                    header("location: /admin/admin/blog/create?creation=true");
                }
            }
        }
        $router->render("admin/layout", [
            "titelPage" => "Blog-Creation",
            "style" => "/view//admin/blogs/blog-style.css",
            "page" => "blog",
            "action" => "create",
            "crudAction" => "Creating Blog",
            "errors" => $errors,
            "blog" => $blog
        ]);
    }
    public static function update(Router $router)
    {
        $idBlog = intval($_GET["idBlog"]);
        $blogDao = new BlogDao();
        $blog = $blogDao->find($idBlog);
        $errors = [];


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = $_POST;
            $data["image"] = $_FILES["image"]["name"];

            if ($data["title"] == "") {
                $errors["titleError"] = "Error: Complete the Blog title";
            }
            if ($data["creator"] == "") {
                $errors["creatorError"] = "Error: Complete the creator name";
            }
            if ($data["stars"] == "") {
                $errors["starsError"] = "Error: Select the number of the stars";
            }
            if ($data["content"] == "") {
                $errors["contentError"] = "Error: Complete the information about the blog";
            } else if (strlen($data["content"]) < 50) {
                $errors["contentError"] = "Error: The blog information must be more than 50 characters";
            }
          

            if (empty($errors)) {
                if ($data["image"] == "") {
                    $image = $blog->getImage();
                    $blog->setData($data);
                    $blog->setImage($image);
                } else {
                    //Get Image
                    $image = $_FILES["image"];
                    //Get Extension Image
                    $extensionImage = explode(".", $image["name"])[1];
                    //Generete new image name
                    $imageName = md5(uniqid(rand(), true)) . "." . $extensionImage;
                    //Saving new image
                    move_uploaded_file($image["tmp_name"], "view/img/data/blogs/" . $imageName);
                    //Deleting last imge
                    unlink("view/img/data/blogs/" . $blog->getImage());
                    $blog->setData($data);
                    $blog->setImage($imageName);
                }
                $result = $blogDao->update($blog);
                if ($result) {
                    header("location: /admin/admin/blog/update?idBlog=$idBlog&update=true");
                }
            } else {
                $image = $blog->getImage();
                $blog->setData($data);
                $blog->setImage($image);
            }
        }

        $router->render("admin/layout", [
            "titelPage" => "Blog-Updating",
            "style" => "/view//admin/blogs/blog-style.css",
            "page" => "blog",
            "action" => "update",
            "crudAction" => "Updating Blog",
            "errors" => $errors,
            "blog" => $blog
        ]);
    }
    public static function delete(Router $router)
    {
        $blogDao = new BlogDao();
        $idBlog = intval($_GET["idBlog"]);
        $blog = $blogDao->find($idBlog);
        unlink("view/img/data/blogs/" . $blog->getImage());
        $blogDao->delete($idBlog);
        header("location: /admin/admin/blog?delete=true");
    }
}
