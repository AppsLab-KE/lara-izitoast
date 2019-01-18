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

    public function toast($title, $message, $type, $position)
    {
        $position = $position ?: 'center';

        $this->toast->push(['message' => $message, 'title' => $title, 'type' => $type, 'position' => $position]);

        app()->session->flash('toasts', $this->toast);

    }

    public function info($title, $message,$type, $position = null)
    {
        $this->toast($title, $message, $type, $position);
    }
}