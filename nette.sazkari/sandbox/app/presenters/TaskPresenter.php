<?php

/**
 * News presenter.
 */
class TaskPresenter extends BasePresenter
{
  private $listRepository;
  
  protected function startup(){
    parent::startup();
    $this->listRepository = $this->context->listRepository;
  }
  public function actionDefault($id){
    $this->list = $this->listRepository->find($id);
  }
  public function renderDefault(){
  $this->template->list = $this->list;
  $this->template->tasks = $this->listRepository->tasksOf($this->list);
  }
  
}

