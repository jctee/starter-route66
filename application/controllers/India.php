<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class India extends CI_Controller
{

	/**
	 * Display a Doge image for the /india index
	 */
	public function index()
	{
    // The following should be a relative link to your image file above
    $source = '../data/doge.jpg';
    // note that we could have referenced an image anywhere on our system

    // set the mime type for that image (jpeg, png, etc)
    header("Content-type: image/jpg");
    header('Content-Disposition: inline');
    readfile($source); // dish it
	}

}
