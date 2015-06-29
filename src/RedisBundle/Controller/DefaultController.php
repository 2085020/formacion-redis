<?php

namespace RedisBundle\Controller;

use Predis\Client;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('RedisBundle:Index:index.html.twig');
    }


    /**
     * @Route("/ex1", name="exercice 1")
     */
    public function ex1Action()
    {
        /** @var \Predis\Client $redisCli */
        $redisCli = new Client([
            'scheme' => 'tcp',
            'host'   => '127.0.0.1',
            'port'   => 6379,
        ]);


    }

    /**
     * @Route("/ex2", name="exercice 2")
     */
    public function ex2Action()
    {
        /** @var \Predis\Client $redisCli */
        $redisCli = new Client([
            'scheme' => 'tcp',
            'host'   => '127.0.0.1',
            'port'   => 6379,
        ]);


    }

    /**
     * @Route("/ex3", name="exercice 3")
     */
    public function ex3Action()
    {
        /** @var \Predis\Client $redisCli */
        $redisCli = new Client([
            'scheme' => 'tcp',
            'host'   => '127.0.0.1',
            'port'   => 6379,
        ]);


    }

    /**
     * @Route("/ex4", name="exercice 4")
     */
    public function ex4Action()
    {
        /** @var \Predis\Client $redisCli */
        $redisCli = new Client([
            'scheme' => 'tcp',
            'host'   => '127.0.0.1',
            'port'   => 6379,
        ]);


    }

    /**
     * @Route("/ex5", name="exercice 5")
     */
    public function ex5Action()
    {
        /** @var \Predis\Client $redisCli */
        $redisCli = new Client([
            'scheme' => 'tcp',
            'host'   => '127.0.0.1',
            'port'   => 6379,
        ]);


    }

    /**
     * @Route("/ex6", name="exercice 6")
     */
    public function ex6Action()
    {
        /** @var \Predis\Client $redisCli */
        $redisCli = new Client([
            'scheme' => 'tcp',
            'host'   => '127.0.0.1',
            'port'   => 6379,
        ]);


    }

}
