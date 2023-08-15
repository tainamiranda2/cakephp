<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Clube Controller
 *
 * @method \App\Model\Entity\Clube[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClubeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index($arg)
    {
       // $clube = $this->paginate($this->Clube);

       // $this->set(compact('clube'));
       var_dump("clubes:" . $arg);

       die();
    }

    /**
     * View method
     *
     * @param string|null $id Clube id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clube = $this->Clube->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('clube'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clube = $this->Clube->newEmptyEntity();
        if ($this->request->is('post')) {
            $clube = $this->Clube->patchEntity($clube, $this->request->getData());
            if ($this->Clube->save($clube)) {
                $this->Flash->success(__('The clube has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clube could not be saved. Please, try again.'));
        }
        $this->set(compact('clube'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Clube id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clube = $this->Clube->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clube = $this->Clube->patchEntity($clube, $this->request->getData());
            if ($this->Clube->save($clube)) {
                $this->Flash->success(__('The clube has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clube could not be saved. Please, try again.'));
        }
        $this->set(compact('clube'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Clube id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clube = $this->Clube->get($id);
        if ($this->Clube->delete($clube)) {
            $this->Flash->success(__('The clube has been deleted.'));
        } else {
            $this->Flash->error(__('The clube could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
