<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Golf extends Application
{
	/**
	 * Golf Controller uses a regular expression to route any /i/ address value
   * to show actor 6.
	 */
	public function index()
	{
    $this->show(6);
	}

}
