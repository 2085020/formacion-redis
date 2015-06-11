<?php

namespace RedisBundle\Controller;

use Predis\Client;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }


    /**
     * @Route("/", name="homepage")
     */
    public function homeAction()
    {
        /** @var \Predis\Client $redisCli */
        $redisCli = new Client([
            'scheme' => 'tcp',
            'host'   => '127.0.0.1',
            'port'   => 6379,
        ]);
        $redisCli->set("foo", 2);

        echo $redisCli->get('foo');
        exit;
    }


}
