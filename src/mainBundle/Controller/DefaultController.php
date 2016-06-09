<?php

namespace mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $postService=$this->get('corepost.service');
        $recentPosts=$postService->getRecentPosts(0,10);
        $posts=array();
        $i=0;
        foreach ($recentPosts as $recentPost){
        	$posts[$i]["thumbnail"]=$recentPost->getThumbnail();
        	$posts[$i]["description"]=substr($recentPost->getDescription(),0,150).'...';
        	$posts[$i]["title"]=$recentPost->getTitle();
        	$posts[$i]["bgColor"]=$recentPost->getBgColor();
        	$posts[$i]["id"]=$recentPost->getID();
        	$i++;
        }
        $toolService=$this->get('coretool.service');
        $userBrowserProfile=$toolService->fingerPrintBrowser();
        $ip=$userBrowserProfile["ip"];
        $userAgent=$userBrowserProfile["userAgent"];
        $device=$userBrowserProfile["device"];
        $encodedID=md5($ip.'_'.$userAgent);
        $_SESSION["UUID"]=$encodedID;
        $fpid=$toolService->saveFpBrowser();
        $pvid=$toolService->saveGeneralPV($encodedID);
        $tempUID=substr($encodedID,0,5);
        $tempUID=$tempUID.$fpid;
        $_SESSION["tempUID"]=$tempUID;
        $userService=$this->get('coreuser.service');
        $uid=$userService->createUserFromFpBrowser($encodedID,$tempUID);
    	return $this->render('mainBundle:Default:index.html.twig',array('posts'=>$posts,'tempUID'=>$tempUID));
    }
}
