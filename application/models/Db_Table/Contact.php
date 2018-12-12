<?php

class Application_Model_DbTable_Contact extends Zend_Db_Table_Abstract{ 
    protected $_nome = 'contato';
    
    public function create(){
        $front = Zend_controller_Front::getInstance();
        $request = $front -> getRequest();
        $data = array(
            'nome'  => $request->getPost('nome'),
            'email'=> $request->getPost('email'),
            'telefone' => $request->getPost('telefone'),
            'endereco' => $request->getPost('endereco')
        );
         $this->insert($data);
            //$this->insert($data);
    }
}
