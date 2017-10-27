<?php
class blogController extends Controller
{
    public function create()
    {
        $this->render('blog.create');
    }
    public function store()
    {
        $article = new Model('articles');
        $article->titre = $_POST['titre'];
        $article->auteur = $_POST['auteur'];
        $article->article = $_POST['article'];
        $article->save();
        header('location: /blog/index');

    }
    public function index()
    {
        $article = new Model('articles');
        $GLOBALS['blog'] = $article->all();
        $this->render('blog.index');
    }
    public function edit()
    {
        $article = new Model('articles');
        $article->find($_GET['id']);
        $GLOBALS['blog'] = $article;
        $this->render('blog.edit');
    }
    public function Update()
    {
    $article = new Model('articles');
    $article->find($_GET['id']);
    $article->titre = $_POST['titre'];
    $article->auteur = $_POST['auteur'];
    $article->article = $_POST['article'];
    $article->save();
     header('location:/blog/index');
    }

    public function delete()
    {
    $article = new Model('articles');
    $article->delete($_GET['id']);
    header('location:/blog/index');
    }

}
