<?php
class Contact extends Zend_Db_Table_Abstract {
    protected $_name = 'contato';
    
    public function create(){
        $front   = Zend_controller_Front::getInstance();
        $request = $front -> getRequest();
        $data    = array(
            'nome'     => $request->getPost('nome'),
            'email'    => $request->getPost('email'),
            'telefone' => $request->getPost('telefone'),
            'endereco' => $request->getPost('endereco')
        );
         $this->insert($data);
            //$this->insert($data);
    }

    public function edit(){
        $front = Zend_controller_Front::getInstance();
        $request = $front->getRequest();
        $data = array(
            'nome'     => $request->getPost('nome'),
            'email'    => $request->getPost('email'),
            'telefone' => $request->getPost('telefone'),
            'endereco' => $request->getPost('endereco')
        );
        $where = array('id = ?'=> $request->getParam("id"));
        $this->update($data, $where);
    }

    public function deleteContact() {
        $front   = Zend_Controller_Front::getInstance();
        $request = $front->getRequest();
        $where   = array('id = ?' => $request->getParam("id"));
        $this->delete($where);
   }
}

