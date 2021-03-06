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
    public function showAction()
    {
        $xxx = new FirstClass();
        $xxx->setFcVar("10");
        $var1 = $xxx->sayHi();
        $var2 = $xxx->getFcVar();
        $var3 = 'fuck yeah';

        $templating = $this->container->get('templating');
        $html = $templating->render('users/users.html.twig', [
            'var1' => $var1,
            'var2' => $var2,
            'var3' => $var3
        ]);

        return new Response($html);

    }
}

