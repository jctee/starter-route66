<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Tango is routed to foxtrot
class Tango extends Application
{

	/**
	 * Function shows the 5th position actor.  This is routed to Foxtrot
   * that invokes showing the information with the key "5"
	 */
	public function index()
	{
    $this->show(5);
	}

}
