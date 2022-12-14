<?php

namespace App\Http;

class Response
{
    /**
     * @var $view
     */
    protected $view; //array, json, pdf

    /**
     * Response constructor.
     * @param $view
     */
    public function __construct($view)
    {
        $this->view = $view;// home, contact
    }

    /**
     * @return mixed
     */
    public function getView()
    {
        return $this->view;
    }

    public function send()
    {
        $view = $this->getView();
        $content = file_get_contents(viewPath($view));
        require viewPath("layouts/layout");
    }

}