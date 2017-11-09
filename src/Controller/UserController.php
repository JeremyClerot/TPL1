<?php
/**
 * Created by PhpStorm.
 * User: thomasdebacker
 * Date: 08/11/2017
 * Time: 09:02
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     *  @Route("/user", name="user_controller")
     */

    public function afficher() {
        $this->getUser();

        return $this->render(
            'user/user.html.twig'
        );
    }
}
