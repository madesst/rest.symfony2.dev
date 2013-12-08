<?php
/**
 * Created by PhpStorm.
 * User: madesst
 * Date: 08.12.13
 * Time: 16:29
 */
namespace Madesst\CsRestBundle\Controller\Base;

use FOS\RestBundle\Controller\FOSRestController;
use Madesst\CSRestBundle\Hateoas\PropelPagerWrapper;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\View\View;
use JMS\Serializer\SerializationContext;
use Hateoas\Representation\PaginatedCollection;
use Hateoas\Representation\Collection;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BaseController extends FOSRestController
{
    protected function prepareView($data = null, $statusCode = 200)
    {
        if (!$data) {
            throw new NotFoundHttpException();
        }

        $context = new SerializationContext();
        $view = new View($data, $statusCode);
        $view->setSerializationContext($context);
        return $this->handleView($view);
    }

    protected function preparePagination(\PropelModelPager $pager, $route_name, $statusCode = 200)
    {
        return $this->prepareView(new PropelPagerWrapper($pager, $route_name), $statusCode);
    }
}