<?php

class Photos extends Database
{
    public function saveDataForImages($filename, $title, $author, $private)
    {
        $data=['filename'=>$filename,
            'title'=>$title,
            'author'=>$author,
            'private'=>$private];

        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->insert($data);
        self::getStatement()->executeBulkWrite(DB_NAME.'.photos', $bulk);
    }

    public function getImages()
    {
        $query = new MongoDB\Driver\Query(array());

        return self::getStatement()->executeQuery(DB_NAME.'.photos',$query);
    }
}
