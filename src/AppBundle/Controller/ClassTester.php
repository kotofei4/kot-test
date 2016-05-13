<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\FirstClass;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ClassTester extends Controller
{

    /**
     * @Route("class_test/")
     */
    public function showAction()1
    {
        $xxx = new FirstClass();
        $xxx->setFcVar("10");
        $var1 = $xxx->sayHi();
        $var2 = $xxx->getFcVar();

        $templating = $this->container->get('templating');
        $html = $templating->render('users/users.html.twig', [
            'var1' => $var1,
            'var2' => $var2
        ]);

        return new Response($html);

    }
}

