<?php
namespace Robinson\Frontend\Controllers;

class CategoryController extends ControllerBase
{
    public function indexAction()
    {
        $categories = $this->getDI()->get('Robinson\Frontend\Model\Category');
        $this->view->category = $categories->findFirst(
            'status = ' . \Robinson\Frontend\Model\Category::STATUS_VISIBLE .
            ' AND categoryId = ' . (int) $this->dispatcher->getParam('id')
        );

        $this->view->categoryId = $this->view->category->getCategoryId();
        $this->tag->prependTitle($this->view->category->getCategory());
        $this->view->metaDescription = \Phalcon\Tag::tagHtml('meta', array(
            'name' => 'description',
            'content' => $this->view->category->getCategory() . ' - ' . $this->view->season->name,
        ));

        if ((int) $this->dispatcher->getParam('id') === 3) {
            //$this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_ACTION_VIEW);
            $this->view->setMainView('layouts/english');
            $this->view->pick('index/english');
        }
    }
}
