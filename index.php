<?php
header("Content-Type: text/html; charset=utf-8");
class News
{
    private $title;
    private $date;
    private $text;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    public function getJson($singleNewsName)
    {
        $json = file_get_contents($singleNewsName);
        $data = json_decode($json, true);
        $news = new News();
        $news->setTitle($data['news']['title']);
        $news->setDate($data['news']['date']);
        $news->setText($data['news']['text']);
        return $news;
    }
}
$allNews = scandir(__DIR__ . '/news');


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Новости</title>
    </head>
<body>
    <h2>Список новостей</h2>
        <?php
            $object = new News();
            foreach($allNews as $singleNews){
                if(pathinfo($singleNews, PATHINFO_EXTENSION) == 'json'){
                    $json = $object->getJson('news/' .$singleNews);

                        echo '<h3>'.$json->getTitle().'</h3>';
                        echo '<p>Дата: '.$json->getDate().'</p>';
                        echo '<p><strong>Текст:</strong></p>';
                        echo $json->getText();
                }
            }
        ?>
</body>
</html>
