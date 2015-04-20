<?php

/**
 * Rozpis presenter.
 */
class RozpisPresenter extends BasePresenter
{
  private $rozpisRepository;
  
  public function startup(){
    parent::startup();
    $this->rozpisRepository = $this->context->rozpisRepository;
  }
  public function renderDefault(){
    $this->template->rozpisy = $this->rozpisRepository->findAll();
 }
}

