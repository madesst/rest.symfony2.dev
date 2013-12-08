<?php
/**
 * Created by PhpStorm.
 * User: madesst
 * Date: 08.12.13
 * Time: 19:24
 */
namespace Madesst\CSRestBundle\Hateoas;

class PropelPagerWrapper
{
    protected $pager;
    protected $route;

    public function __construct(\PropelModelPager $pager, $route)
    {
        $this->pager = $pager;
        $this->route = $route;
    }

    public function getResults()
    {
        return $this->pager->getResults();
    }

    public function getRoute()
    {
        return $this->route;
    }

    public function getCurrentPage()
    {
        return $this->pager->getPage();
    }

    public function getFirstPage()
    {
        return $this->pager->getFirstPage();
    }

    public function getLastPage()
    {
        return $this->pager->getLastPage();
    }

    public function getNextPage()
    {
        return $this->pager->getNextPage();
    }

    public function getPrevPage()
    {
        return $this->pager->getPreviousPage();
    }
}