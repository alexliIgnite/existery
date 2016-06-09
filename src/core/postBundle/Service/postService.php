<?php
namespace core\postBundle\Service;

use Doctrine\ORM\EntityManager;

class postService
{

    /*
     * variable for entity manager
     * */
    private $em;

    /*
     * variable for saving local error
     * */
    public $error;

    /**
     * constructor
     * @param $entityManager
     * */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->error = null;
    }
    
    public function getRecentPosts($firstRecord,$numberOfPosts)
    {
    	$all = $this->em->getRepository('corepostBundle:post')->createQueryBuilder('p')
    	->orderBy('p.created','desc')
    	->setMaxResults($numberOfPosts)
    	->setFirstResult($firstRecord)
    	->getQuery();
    	$posts=$all->getResult();
    	return $posts;
    }
    
    public function getPostByID($ptid){
    	$post = $this->em->getRepository('corepostBundle:post')->find($ptid);
    	if(!$post){
    		return false;
    	}
    	return $post;
    }
}