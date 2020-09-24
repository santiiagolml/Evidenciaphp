<?php

/**
 * Class HomeController
 */
class HomeController
{

    public function index()
    {
    	require 'views/layout.php';
    	require 'views/home.php';
    }
}