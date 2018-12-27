<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Content\CPanel\Doctrine\Controller;

use Doctrine\ORM\QueryBuilder;
use MSBios\Content\CPanel\Controller\TextPageController as DefaultTextPageController;
use MSBios\Content\Resource\Doctrine\Entity\TextPage;
use MSBios\CPanel\Doctrine\Mvc\Controller\AbstractActionController;
use MSBios\Paginator\Doctrine\Adapter\QueryBuilderPaginator;

/**
 * Class TextPageController
 * @package MSBios\Content\CPanel\Doctrine\Controller
 */
class TextPageController extends AbstractActionController
{
    /**
     * @inheritdoc
     *
     * @return mixed|TextPage
     */
    protected static function factory()
    {
        return new TextPage;
    }

    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getResourceId()
    {
        return DefaultTextPageController::class;
    }

    /**
     * @param QueryBuilder $queryBuilder
     * @return QueryBuilderPaginator
     */
    public function __invoke(QueryBuilder $queryBuilder)
    {
        if ($query = $this->params()->fromQuery('q')) {
            $queryBuilder
                ->andWhere($queryBuilder->expr()->like('o.name', ':query'))
                ->setParameter('query', '%' . $query . '%');
        }

        $queryBuilder->orderBy('o.createdAt', 'DESC');

        return new QueryBuilderPaginator($queryBuilder);
    }
}
