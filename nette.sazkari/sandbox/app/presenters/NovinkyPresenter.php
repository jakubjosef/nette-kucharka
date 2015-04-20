<?php

/**
 * Novinky presenter.
 */
class NovinkyPresenter extends BasePresenter
{
  /** @var Sazkari\NovinkyRepository */
  private $novinkyRepository;
  public function __construct(Sazkari\NovinkyRepository $novinkyRepository) {
     $this->novinkyRepository = $novinkyRepository;
  }
  public function renderDefault($page = 1){
    $paginator = new Nette\Utils\Paginator;
      $paginator->setItemCount($this->novinkyRepository->countItem());
      $paginator->setItemsPerPage(6);
      $paginator->setPage($page);
      $this->template->pageNavigator = $paginator;
      $this->template->news = $this->novinkyRepository->findAll()
              ->order('datetime DESC')
              ->limit($paginator->getLength(), $paginator->getOffset());
 }
  
}

