<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Article;

class Articles extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
            
        
        
        for($i=0;$i<10;$i++)
        {
            $article = new Article();
            $article->setTitle('Titre de l\'article '.$i)
                    ->setContent('Contenu de l\'article'.$i)
                    ->setPicture('https://via.placeholder.com/150')
                    ->setCreatedAt(new \DateTime())
                    ->setPublishedAt(new \DateTime());
                    
            $manager->persist($article);    
            
        }
        

        $manager->flush();
    }
}
