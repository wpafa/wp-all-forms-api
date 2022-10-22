<?php

namespace Routes\CF7;

use Routes\CF7\Form;
//use Routes\WEF\Entry;
//use Routes\WEF\EntryMeta;

class Route
{

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
	 * Init all routes.
	 */
    public function initRoutes()
    {
        (new Form($this->name))->initRoutes();
        //(new Entry($this->name))->initRoutes();
        //(new EntryMeta($this->name))->initRoutes(); 
    }

}
