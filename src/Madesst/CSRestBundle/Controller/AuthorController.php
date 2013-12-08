<?php

namespace Madesst\CSRestBundle\Controller;

use Hateoas\HateoasBuilder;
use Madesst\CsRestModelBundle\Model\AuthorQuery;
use Madesst\CsRestBundle\Controller\Base\BaseController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class AuthorController extends BaseController
{
    /**
     * @ApiDoc(
     *  resource=true,
     *  description="Returns a collection of Author in native order",
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
            AuthorQuery::create()->paginate($this->getRequest()->get('page', 1)),
            'madesst_cs_rest_authors');
    }

    /**
     * @ApiDoc(
     *  resource=true,
     *  description="Returns a existing Author",
     *  output="Madesst\CsRestModelBundle\Model\Author",
     *  statusCodes={
     *                        200="Returned when successfull",
     *                         404="Returned when object not found"}
     * )
     * )
     */
    public function getAction($id)
    {
        return $this->prepareView(AuthorQuery::create()->findOneById($id));
    }
}
