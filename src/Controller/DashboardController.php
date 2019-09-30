<?php
/**
 * Created by PhpStorm.
 * User: xabier
 * Date: 30/09/19
 * Time: 18:00
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DashboardController
 * @package App\Controller
 * @Route(path="/", name="dashboard", methods={"GET"})
 */
class DashboardController extends AbstractController
{
    public function __invoke()
    {
        return $this->render('dashboard.html.twig');
    }
}