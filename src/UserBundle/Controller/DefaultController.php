<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }

    public function documentAction()
    {
        return $this->render('UserBundle:Default:document.html.twig');
    }

    public function changepassAction()
    {
        return $this->render('UserBundle:Default:changepass.html.twig');
    }

    public function registerAction()
    {
        return $this->render('UserBundle:Default:register.html.twig');
    }

    public function userpageAction()
    {
        return $this->render('UserBundle:Default:userpage.html.twig');
    }
}
