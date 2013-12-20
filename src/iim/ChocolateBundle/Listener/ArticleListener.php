<?php

namespace iim\ChocolateBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use iim\ChocolateBundle\Entity\Article;

class ArticleListener
{
	protected $security;
	
	public function __construct($security){

		$this->security = $security;

	}
	public function prePersist(LifecycleEventArgs $args){
		$entity = $args->getObject();
		//$entityManager = $args->getEntityManager();

		//agir seulement sur Article
		if ($entity instanceof Article) {
			$entity->setTitle('lol');
		}
	}
}