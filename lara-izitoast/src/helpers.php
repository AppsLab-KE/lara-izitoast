<?php
if (! function_exists('toast')){
    function toast($message, $title, $type, $position = null){
        $toaster =  app('toast');
        return $toaster->toast($message, $title, $type, $position);
    }
}