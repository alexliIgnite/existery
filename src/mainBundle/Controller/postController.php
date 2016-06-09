<?php

namespace mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class postController extends Controller
{
    public function getFullPostAction($ptid)
    {
    	$postService=$this->get('corepost.service');
    	$post=$postService->getPostByID($ptid);
    	return $this->render('mainBundle:Default:fullPost.html.twig',array('post'=>$post));
    }
}
