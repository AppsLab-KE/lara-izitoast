<?php
/**
 * Created by PhpStorm.
 * User: marvincollins
 * Date: 1/17/19
 * Time: 10:09 PM
 */

namespace LaraIzitoast;


class Toaster
{
    public $toast;
    public function __construct()
    {
        $this->toast = collect();
    }

    public function toast($message = null, $title =null, $type = null, $position = null, $icon = null)
    {
        if (is_null($message)){
            return $this;
        }

        $position = $position ?: 'topRight';
        $options = ['message' => $message, 'title' => $title, 'type' => $type ?: 'info', 'position' => $position, 'icon' => $icon];

        $getToastOptions = config('lara-izitoast', true);

        foreach ($getToastOptions as $key => $option){
            $options[$key] = $option;
            if ($key == 'position'){
                $options[$key] = $position ?: $option;
            }
        }

        $this->toast->push($options);

        return $this->flash();

    }

    public function info($message, $title = null, $position = null, $icon = null)
    {
        return $this->toast($message, $title, 'info', $position, $icon);
    }

    public function success($message, $title = null, $position = null, $icon = null)
    {
        return $this->toast($message, $title, 'success', $position, $icon);
    }

    public function warning($message, $title = null, $position = null, $icon = null)
    {
        return $this->toast($message, $title, 'warning', $position, $icon);
    }

    public function error($message, $title = null, $position = null, $icon = null)
    {
        return $this->toast($message, $title, 'error', $position, $icon);
    }

    public function flash()
    {
        app()->session->flash('toasts', $this->toast);

        return $this;
    }
}