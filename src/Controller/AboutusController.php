<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aboutus Controller
 *
 *
 * @method \App\Model\Entity\Aboutus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AboutusController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $aboutus = $this->paginate($this->Aboutus);

        $this->set(compact('aboutus'));
    }

    /**
     * View method
     *
     * @param string|null $id Aboutus id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aboutus = $this->Aboutus->get($id, [
            'contain' => []
        ]);

        $this->set('aboutus', $aboutus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aboutus = $this->Aboutus->newEntity();
        if ($this->request->is('post')) {
            $aboutus = $this->Aboutus->patchEntity($aboutus, $this->request->getData());
            if ($this->Aboutus->save($aboutus)) {
                $this->Flash->success(__('The aboutus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aboutus could not be saved. Please, try again.'));
        }
        $this->set(compact('aboutus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aboutus id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aboutus = $this->Aboutus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aboutus = $this->Aboutus->patchEntity($aboutus, $this->request->getData());
            if ($this->Aboutus->save($aboutus)) {
                $this->Flash->success(__('The aboutus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aboutus could not be saved. Please, try again.'));
        }
        $this->set(compact('aboutus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aboutus id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aboutus = $this->Aboutus->get($id);
        if ($this->Aboutus->delete($aboutus)) {
            $this->Flash->success(__('The aboutus has been deleted.'));
        } else {
            $this->Flash->error(__('The aboutus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
