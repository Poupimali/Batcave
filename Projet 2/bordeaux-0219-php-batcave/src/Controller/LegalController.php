<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace App\Controller;

/**
 * Class ItemController
 *
 */
class LegalController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Legal/index.html.twig');
    }
}
