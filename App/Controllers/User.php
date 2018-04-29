<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User as UserModel;

/**
 * MyController
 *
 * @author Niroshan
 */
class User extends Controller {

    protected $user;

    function __construct($parms) {
        $this->user = new UserModel();
    }

    public function myFunction() {
        $user = $this->user->getDetails(1);
        dump($user);
    }

}

?>
