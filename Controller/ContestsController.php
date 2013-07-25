<?php
App::uses('AppController', 'Controller');
/**
 * Contests Controller
 *
 * @property Contest $Contest
 */
class ContestsController extends AppController {

  public $components = array('RequestHandler');
  public $helpers = array('Js');

  /**
   * index method
   *
   * @return void
   */
  public function index() {
    $this->Contest->recursive = 0;
    $this->set('contests', $this->Contest->find('all',array(
      'order' => 'sort_order ASC'
    )));
  }

  public function admin_reorder() {
    foreach ($this->data['Contest'] as $key => $value) {
      $this->Contest->id = $value;
      $this->Contest->saveField("sort_order",$key + 1);
    }
    exit();
  }

  /**
   * admin_index method
   *
   * @return void
   */
  public function admin_index() {
    $this->Contest->recursive = 0;
    $this->set('contests', $this->paginate());
  }

  /**
   * admin_view method
   *
   * @throws NotFoundException
   * @param string $id
   * @return void
   */
  public function admin_view($id = null) {
    if (!$this->Contest->exists($id)) {
      throw new NotFoundException(__('Invalid contest'));
    }
    $options = array('conditions' => array('Contest.' . $this->Contest->primaryKey => $id));
    $this->set('contest', $this->Contest->find('first', $options));
  }

  /**
   * admin_add method
   *
   * @return void
   */
  public function admin_add() {
    if ($this->request->is('post')) {
      $this->Contest->create();
      if ($this->Contest->save($this->request->data)) {
        $this->Session->setFlash(__('The contest has been saved'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('The contest could not be saved. Please, try again.'));
      }
    }
  }

  /**
   * admin_edit method
   *
   * @throws NotFoundException
   * @param string $id
   * @return void
   */
  public function admin_edit($id = null) {
    if (!$this->Contest->exists($id)) {
      throw new NotFoundException(__('Invalid contest'));
    }
    if ($this->request->is('post') || $this->request->is('put')) {
      if ($this->Contest->save($this->request->data)) {
        $this->Session->setFlash(__('The contest has been saved'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('The contest could not be saved. Please, try again.'));
      }
    } else {
      $options = array('conditions' => array('Contest.' . $this->Contest->primaryKey => $id));
      $this->request->data = $this->Contest->find('first', $options);
    }
  }

  /**
   * admin_delete method
   *
   * @throws NotFoundException
   * @param string $id
   * @return void
   */
  public function admin_delete($id = null) {
    $this->Contest->id = $id;
    if (!$this->Contest->exists()) {
      throw new NotFoundException(__('Invalid contest'));
    }
    $this->request->onlyAllow('post', 'delete');
    if ($this->Contest->delete()) {
      $this->Session->setFlash(__('Contest deleted'));
      $this->redirect(array('action' => 'index'));
    }
    $this->Session->setFlash(__('Contest was not deleted'));
    $this->redirect(array('action' => 'index'));
  }
}
