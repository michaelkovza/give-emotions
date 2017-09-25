<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 21.09.2017
 * Time: 18:52
 */

namespace InWhiteBoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    public function authAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('InWhiteBoxBundle:Security:auth.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }
}
