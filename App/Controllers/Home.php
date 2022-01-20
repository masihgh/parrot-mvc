<?php

namespace App\Controllers;

use Core\View;
/*Import Model To Use
use App\Models\User;
*/

//use \Core\Controller as Controller;
/**
 * Home controller
 * Action name starts with action
 * actionindex = index Action
 */
class Home //extends Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    static function showProfile($data,$data)
    {
        echo 'showProfile Home'.$data;
		//View::renderTemplate('welcome-to-pussy-cat.html');
    }
	
}
