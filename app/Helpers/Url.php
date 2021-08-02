<?php 


class Url{
    public static function redirect($url){
        header("Location:" . "blog/app/Views" . DIRECTORY_SEPARATOR . $url);

    }
}