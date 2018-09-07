<?php
class Article{
    public $id;
    public $title;
    protected $content;
    protected $author;

    const LIFE_TIME = 24;

    /*public static $count;

    public static function countUp(){
        self::$count++;
    }*/
    public function __construct($id = null, $title = null, $content = null, $author = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    public function display(){
        echo $this->prepareTitle();
        echo $this->prepareContent();
    }

    protected function prepareTitle(){
        return "<h1>{$this->title}</h1>";
    }

    protected function prepareContent(){
        return "<p>{$this->content}</p>";
    }
}

class News extends Article{
    public $data;

    public function __construct($id = null, $title = null, $content = null, $author = null, $data = null)
    {
        parent::__construct($id, $title, $content, $author );
        $this->data = $data;
    }

    public function display(){
        parent::display();
        echo $this->displayData();
    }

    public function displayData(){
        echo "<p>{$this->data}</p>";
    }
}

$article1 = new Article(1, 'article 1', 'sdjksdjkfdskjh', 'Vasya Pupkin');
$article1->display();

$article2 = new News(2, 'News 1', 'jsdgfg7tuysg', 'Petya Vasechkin');
$article2->data = date("Y-m-d");
$article2->display();





