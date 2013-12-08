<?php

namespace Madesst\CsRestModelBundle\Model;

use Madesst\CsRestModelBundle\Model\om\BaseAuthor;

class Author extends BaseAuthor
{
    public function getName()
    {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }
}
