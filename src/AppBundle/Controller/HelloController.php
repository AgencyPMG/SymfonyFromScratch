<?php
/**
 * This file is part of the Symfony from Scratch tutorial
 *
 * @copyright   2015 PMG <https://www.pmg.com>
 * @license     http://opensource.org/licenses/mit MIT
 */

namespace PMG\FromScratch\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class HelloController extends Controller
{
    public function helloAction(Request $r)
    {
        return new Response(
            sprintf('Hello, %s', $r->get('name') ?: 'World'),
            200,
            ['Content-Type' => 'text/plain']
        );
    }
}
