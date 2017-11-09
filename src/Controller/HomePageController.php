<?php
/**
 * Created by PhpStorm.
 * User: thomasdebacker
 * Date: 08/11/2017
 * Time: 09:27
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class HomePageController extends Controller
{
    /**
     *  @Route("/", name="homepage_controller")
     */

    public function index() {

        return $this->render(
            'homepage/homepage.html.twig'
        );
    }
}

