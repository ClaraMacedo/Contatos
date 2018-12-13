<?php
require_once (APPLICATION_PATH.'\forms\Contact.php');
require_once (APPLICATION_PATH.'\models\Contact.php');


class ContactController extends Zend_Controller_Action
{
	public function init()
	{	          
	}
	 
	public function listAction(){
	    $contactModel = new Contact();
	    $Contact = $contactModel->fetchALL();
	    $this->view->Contact = $Contact;
	}

	public function createAction(){
	    $contactForm = new Application_Form_Contact();
	    $request = $this->getRequest();
	    if ($request->isPost()) {	     		
	     	if($contactForm->isValid($request->getPost())) {
				$contactModel = new Contact();
	     		$contactModel-> create();
	     		$this->_redirect('contact');
	     	}
	    }
	    $this->view->contactForm = $contactForm;
	}

 
}