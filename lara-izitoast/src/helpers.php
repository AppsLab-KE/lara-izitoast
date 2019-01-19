<?php
if (! function_exists('notify')){
    function notify($message = null, $title = null, $type = null, $position = null, $icon = null){
        $toaster =  app('toast');

        if (! is_null($message)){
            return $toaster->toast($message, $title, $type, $position);
        }

        return $toaster;
    }
}