<?php

namespace td\TdEvalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('tdTdEvalBundle:Default:index.html.twig');
    }
}
