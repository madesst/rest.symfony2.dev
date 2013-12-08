<?php

namespace Madesst\CSRestBundle\Controller;

use Hateoas\HateoasBuilder;
use Madesst\CSRestBundle\Hateoas\PropelPagerWrapper;
use Madesst\CsRestModelBundle\Model\BookQuery;
use Madesst\CsRestBundle\Controller\Base\BaseController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class BookController extends BaseController
{
    /**
     * @ApiDoc(
     *  resource=true,
     *  description="Returns a collection of Book in native order",
     *  filters={
     *      {"name"="page", "dataType"="integer", "default"="1"},
     *  },
     *  statusCodes={
     *                        200="Returned when successfull"}
     * )
     * )
     */
    public function allAction()
    {
        return $this->preparePagination(
            BookQuery::create()->paginate($this->getRequest()->get('page', 1)),
            'madesst_cs_rest_books');
    }

    /**
     * @ApiDoc(
     *  resource=true,
     *  description="Returns a existing Book",
     *  output="Madesst\CsRestModelBundle\Model\Book",
     *  statusCodes={
     *                        200="Returned when successfull",
     *                         404="Returned when object not found"}
     * )
     * )
     */
    public function getAction($id)
    {
        return $this->prepareView(BookQuery::create()->findOneById($id));
    }
}
