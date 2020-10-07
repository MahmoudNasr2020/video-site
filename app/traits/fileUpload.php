<?php
namespace App\traits;

trait fileUpload{

   public  function fileUpload($file,$path){

        $file_extension = $file->getClientOriginalExtension();

        $file_name = time().'.'.$file_extension;

        $folder = $path ;

        $file->move($folder,$file_name);

        return $file_name;

    }

}
