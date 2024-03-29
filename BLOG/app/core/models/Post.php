<?php

namespace App\Core\Models;

// use App\Core\Classes\Database\Db;

/**
 * Post class
 */
class Post extends Model
{
    public integer $id;
    public integer $user_id;
    public integer $category_id;
    public string $title;
    public string $description;
    public string $status;
    public date $date;

    /**
     * get all Post
     * @param
     * @return obj
     **/
    public static function getAll()
    {
        return self::select('SELECT * FROM posts');
    }

      /**
     * get one
     * @param
     * @return obj
     **/
    public static function getOne($data, $key, $value)
    {
        $res = self::select("SELECT $data FROM posts WHERE $key = ?", $value);
       
        $result = [];
        foreach($res as $value)
        {
            $result = $value->data;
        }
        return $result;
    }

    

}
