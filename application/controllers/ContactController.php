<?php

require_once (APPLICATION_PATH.'\form\Contact.php');
require_once (APPLICATION_PATH.'\models\Contact.php');

class ContactController extends Zend_Controller_Action {
 
     public function init()
     {
     }
 
     public function indexAction()
     {
        $contactModel = new Application_Model_Contact();
	    $Contact = $contactModel->fetchALL();
	    $this->view->Contact = $Contact;
     }

     public function createAction()
     {
        $contactForm = new Application_Form_Contact();
        $request = $this->getRequest();
        if ($request->isPost()) {
             if ($contactForm->isValid($request->getPost())) {
                  $contactModel = new Application_Model_Contact();
                  $contactModel->create();
                  $this->_redirect('contact');
             }
       }
       $this->view->contactForm = $contactForm;
     }
 
}