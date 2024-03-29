<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\Time;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
public  function beforeFilter(Event $event){
    $this->Auth->allow(['signup','forgetpassword','logout','home']);


}
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function home(){

    }
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));


    }

    public function signup()
    {

        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));


    }

    public function login()
    {


        //check if user is logged in
            if($this->Auth->user('id')){

                //$this->Auth->setUser();
                $this->Flash->warning(__('You are alredy Logged in .'));
                return $this->redirect(['controller'=>'Users','action'=>'index']);
            }
            if ($this->request->is('post')) {//check if login form submitted.

                $user=$this->Auth->identify();

                if($user){
                    $this->Auth->setUser($user);

                    $this->Flash->success(__('Login Successful.'));
                    return $this->redirect(['controller'=>'Users','action'=>'index']);
                }

                $this->Flash->error(__('Sorry the login  was not correct'));
            }




    }

public function logout(){

    $this->Flash->success('You are now logged out.');
   // return $this->redirect(['controller'=>'Users','action'=>'home']);
    return $this->redirect($this->Auth->logout());

 }

    public function forgetpassword(){

        //forget password
    }
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $checkRegistrationTime=new Time($user->created);
        if($checkRegistrationTime->wasWithinLast('3 weeks')){
        debug("You register within 3 weeks ago");
        }
        else{
            debug("You register more than 3 weeks ago");
        }

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
