<?php
declare(strict_types=1);

class Guestbook
{
    public $allPosts=[];

/*    public function createJson($dataToSet)
    {
        $tempData = json_encode($dataToSet,JSON_PRETTY_PRINT);
        file_put_contents('json/guestbook.json', $tempData);

    }*/

    public function createData()
    {
        file_put_contents('json/guestbook.json',json_encode($this->allPosts));
    }

    public function loadData()
    {
        $temp = json_decode(file_get_contents('json/guestbook.json'));
        foreach ($temp as $post)
        {
            $newpost = new Post($post->authorName, $post->title, $post->content, $post->date);
            array_push($this->allPosts, $newpost);
        }
    }

    public function filPostsArray($post)
    {
        array_push($this->allPosts, $post);
    }

}