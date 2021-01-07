<?php 

namespace App\Helpers;

class SavePhoto {
   
    public static function SaveImage($file) {
        if($file){
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move('images',$filename);
            return '/'.'images/'.$filename;    
        }else{
            return null;
        }
    }
    public static function ImageLink($filename){
        return asset($filename);
    }
}