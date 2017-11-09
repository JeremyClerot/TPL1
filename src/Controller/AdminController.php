<?php
/**
 * Created by PhpStorm.
 * User: thomasdebacker
 * Date: 08/11/2017
 * Time: 09:25
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;

class AdminController extends Controller
{
    /**
     *  @Route("/admin", name="admin_controller")
     */

    public function index(UserInterface $user) {

        dump($user);

        $this->getUser();

        return $this->render(
            'admin/admin.html.twig'
       );
    }
}

