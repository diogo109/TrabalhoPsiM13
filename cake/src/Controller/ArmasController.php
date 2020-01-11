<?php

namespace App\Controller;

class ArmasController extends AppController
{

	  public function view($id = null)
    {
        $armas = $this->Armas->find('all');
        $this->set(compact('armas'));
    }
    public function index()
    {
         $this->set('armas', $this->Armas->find('all'));
    }
     public function add()
    {
        $armas = $this->Armas->newEntity();
        if ($this->request->is('post')) {
            $armas = $this->Armas->patchEntity($armas, $this->request->getData());
            if ($this->Armas->save($armas)) {
                
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não é possível adicionar o seu artigo.'));
        }
        $this->set('armas', $armas);
    }
   
   public function edit($id = null)
{
    $armas = $this->Armas->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Armas->patchEntity($armas, $this->request->getData());
        if ($this->Armas->save($armas)) {
            
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Seu artigo não pôde ser atualizado.'));
    }

    $this->set('armas', $armas);
}
    

    public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $arma = $this->Armas->get($id);
    if ($this->Armas->delete($arma)) {
        
        return $this->redirect(['action' => 'index']);
    }
}


}