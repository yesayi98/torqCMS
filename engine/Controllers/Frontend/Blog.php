<?php

/**
 * controller for single blogs
 */
class blogController extends Controller
{

  public function index()
  {
    $categoryModel = $this->__get("Categories");
    $blogCategory = $categoryModel->getCategoriesByCondition("type", 'blog');

    $this->View()->setAssign('Categories.blogCategory', $blogCategory);
  }

  public function detail()
  {
    $request = $this->getRequest()->get;
    $blogModel = $this->__get("Blog");
    $blog = $blogModel->getBlog($request["a"]);
    $similarBlogs = $blogModel->getBlogsByCategory($blog['category_id']);
    $category = $this->__get("Categories")->getCategoryById($blog['category_id']);

    $this->View()->setAssign('Blog.blog', $blog);
    $this->View()->setAssign('title', $this->View()->getAssign('blog')['name']);
    $this->View()->setAssign('Blog.similarBlogs', $similarBlogs);
    $this->View()->setAssign('Categories.category', $category);
  }

}


 ?>
