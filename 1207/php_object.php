<?php
class WebPage
{
    public $title;
    public $color;
    public function show()
    {
        echo <<<HTML_TEXT
          <!DOCTYPE html>
          <html><title>$this->title</title></head>
          <body sytle=color:'red'><p>WebPage 類別</p></body></html>
    HTML_TEXT;
    }
}
header("Contect-type:text/html;charset=UTF-8");
$page1 = new Webpage;
$page1->title = '這是第一頁';

$page1->show();
