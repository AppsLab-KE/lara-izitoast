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

    public function toast($title =null, $message = null, $type = null, $position = null, $icon = null)
    {
        $position = $position ?: 'center';

        $this->toast->push(['message' => $message, 'title' => $title, 'type' => $type, 'position' => $position]);

    }

    public function info($title, $message,$type, $position = null)
    {
        $this->toast($title, $message, $type, $position);
    }

    public function flash()
    {
        app()->session->flash('toasts', $this->toast);

        return $this;
    }
}