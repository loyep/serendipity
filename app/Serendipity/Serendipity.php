<?php

namespace App\Serendipity;

class Serendipity
{
    /**
     * @var Navbar
     */
    protected $navbar;

    /**
     * @var array
     */
    protected $script;

    /**
     * @var array
     */
    protected $css;

    /**
     * @var array
     */
    protected $js;

    /**
     * @var array
     */
    public static $extensions = [];

    public function __construct()
    {
        $this->script = collect();
        $this->css = collect();
        $this->js = collect();
    }

    public function page()
    {

    }

    public function form()
    {

    }

    public function grid()
    {

    }

    public function js($js = null)
    {
        dd(app('serendipity'));
    }
}