<?php

use Nette\Application\UI;


/**
 * Sign in/out presenters.
 */
class SignPresenter extends BasePresenter
{
	protected function createComponentSignInForm()
	{
		$form = new UI\Form;
		$form->addText('email', 'Email:')
			->setRequired('Prosím zadej svůj e-mail');
		$form->addPassword('heslo', 'Heslo:')
			->setRequired('Prosím zadej svoje heslo');
		$form->addCheckbox('remember', 'Pamatovat si mě');
		$form->addSubmit('send', 'Přihlásit');
		$form->onSuccess[] = $this->signInFormSucceeded;
		return $form;
	}
	public function signInFormSucceeded($form)
	{
		$values = $form->getValues();

		if ($values->remember) {
			$this->getUser()->setExpiration('+ 14 days', FALSE);
		} else {
			$this->getUser()->setExpiration('+ 20 minutes', TRUE);
		}

		try {
			$this->getUser()->login($values->email, $values->heslo);
                        $this->flashMessage('Uživatel byl úspěšně přihlášen');
		} catch (Nette\Security\AuthenticationException $e) {
			$form->addError($e->getMessage());
                        $this->flashMessage('Nelze se přihlasit');
			return;
		}

		$this->redirect('Homepage:');
	}



	public function actionOut()
	{
		$this->getUser()->logout();
		$this->flashMessage('Uživatel byl odhlášen');
		$this->redirect('Homepage:');
	}

}
