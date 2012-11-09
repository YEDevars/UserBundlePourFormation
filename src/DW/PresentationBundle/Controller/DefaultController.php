<?php
/**
 * @author Yann-Eric <yann-eric@live.fr>
 */
namespace DW\PresentationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $Users = $this->getDoctrine()->getRepository('DWUserBundle:User')->findAll();
                
        return $this->render('DWPresentationBundle:Default:index.html.twig', array('Users' => $Users));
    }
    
}
