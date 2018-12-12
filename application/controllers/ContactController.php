<?php

require_once (APPLICATION_PATH.'\forms\Contact.php'); //aqui  pode vir a ser form

class ContactController extends Zend_Controller_Action {
 
     public function init()
     {
     }
 
     public function listAction()
     {
          $contactModel = new Application_Model_DbTable_Contact(); 
          $contacts = $contactModel->fetchAll();
          $this->view->contacts = $contacts;
     }

     public function createAction()
     {
        $contactForm = new Application_Form_Contact();
        $request = $this->getRequest();
        if ($request->isPost()) {
             if ($contactForm->isValid($request->getPost())) {
                  $contactModel = new Application_Model_DbTable_Contact();
                  $contactModel->create();
                  $this->_redirect('contact');
             }
       }
       $this->view->contactForm = $contactForm;
     }
 
}