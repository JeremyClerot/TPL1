<?php
/**
 * Created by PhpStorm.
 * User: thomasdebacker
 * Date: 08/11/2017
 * Time: 11:07
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    /**
     *  @Route("/login", name="security_controller")
     */

    public function login(Request $request, AuthenticationUtils $authenticationUtils) {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastusername = $authenticationUtils->getLastUsername();

        return $this->render(
            'login.html.twig', array (
                'last_username' => $lastusername,
                'error' => $error,
            )
        );
    }
}