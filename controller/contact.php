<?php
class blogController extends Controller
{
    public function create()
    {
        $this->render('blog.create');
    }
    public function store()
    {
        $blog = new Model('blog');
        $blog ->prenom = $_POST['titre'];
        $blog ->nom = $_POST['auteur'];
        $blog->save();
        header('location:/blog/index');

    }
    public function index()
    {
        $blog = new Model('blog');
        $GLOBALS['blog'] = $blog->all();
        $this->render('blog.index');
    }
    public function edit()
    {
        $blog = new Model('blog');
        $blog->find($_GET['id']);
        $GLOBALS['blog'] = $blog;
        $this->render('blog.edit');
    }
    public function Update()
    {
    $blog = new Model('blog');
    $blog->find($_GET['id']);
    $blog->prenom = $_POST['titre'];
    $blog->nom = $_POST['auteur'];
    $blog->save();
    // header('location:/blog/index');
    }

    public function delete()
    {
    $blog = new Model('blog');
    $blog->delete($_GET['id']);
    // header('location:/blog/index');
    }

}




























 ?>
