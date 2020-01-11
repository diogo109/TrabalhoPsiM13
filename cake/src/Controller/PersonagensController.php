<?php

namespace App\Controller;

class PersonagensController extends AppController
{

	  public function view($id = null)
    {
        $personagens = $this->Personagens->find('all');
        $this->set(compact('personagens'));
    }
    public function index()
    {
         $this->set('personagens', $this->Personagens->find('all'));
    }
     public function add()
    {
        $personagens = $this->Personagens->newEntity();
        if ($this->request->is('post')) {
            $personagens = $this->Personagens->patchEntity($personagens, $this->request->getData());
            if ($this->Personagens->save($personagens)) {
                
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não é possível adicionar o seu artigo.'));
        }
        $this->set('personagens', $personagens);
    }
   
   public function edit($id = null)
{
    $personagens = $this->Personagens->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Personagens->patchEntity($personagens, $this->request->getData());
        if ($this->Personagens->save($personagens)) {
            
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Seu artigo não pôde ser atualizado.'));
    }

    $this->set('personagens', $personagens);
}
    

    public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $personagem = $this->Personagens->get($id);
    if ($this->Personagens->delete($personagem)) {
        
        return $this->redirect(['action' => 'index']);
    }
}


}