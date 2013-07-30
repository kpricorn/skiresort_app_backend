<?php
App::uses('AppController', 'Controller');
/**
 * Events Controller
 *
 * @property Event $Event
 */
class EventsController extends AppController {

  public $components = array('RequestHandler');
  public $helpers = array('Js');

  /**
   * index method
   *
   * @return void
   */
  public function index() {
    $this->Event->recursive = 0;
    $this->set('events', $this->Event->find('all',array(
      'order' => 'sort_order ASC'
    )));
  }

  public function admin_reorder() {
    foreach ($this->data['Event'] as $key => $value) {
      $this->Event->id = $value;
      $this->Event->saveField("sort_order",$key + 1);
    }
    exit();
  }

  /**
   * admin_index method
   *
   * @return void
   */
  public function admin_index() {
    $this->Event->recursive = 0;
    $this->set('events', $this->paginate());
  }

  /**
   * admin_view method
   *
   * @throws NotFoundException
   * @param string $id
   * @return void
   */
  public function admin_view($id = null) {
    if (!$this->Event->exists($id)) {
      throw new NotFoundException(__('Invalid event'));
    }
    $options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
    $this->set('event', $this->Event->find('first', $options));
  }

  /**
   * admin_add method
   *
   * @return void
   */
  public function admin_add() {
    if ($this->request->is('post')) {
      $this->Event->create();
      if ($this->Event->save($this->request->data)) {
        $this->Session->setFlash(__('The event has been saved'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('The event could not be saved. Please, try again.'));
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
    if (!$this->Event->exists($id)) {
      throw new NotFoundException(__('Invalid event'));
    }
    if ($this->request->is('post') || $this->request->is('put')) {
      if ($this->Event->save($this->request->data)) {
        $this->Session->setFlash(__('The event has been saved'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('The event could not be saved. Please, try again.'));
      }
    } else {
      $options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
      $this->request->data = $this->Event->find('first', $options);
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
    $this->Event->id = $id;
    if (!$this->Event->exists()) {
      throw new NotFoundException(__('Invalid event'));
    }
    $this->request->onlyAllow('post', 'delete');
    if ($this->Event->delete()) {
      $this->Session->setFlash(__('Event deleted'));
      $this->redirect(array('action' => 'index'));
    }
    $this->Session->setFlash(__('Event was not deleted'));
    $this->redirect(array('action' => 'index'));
  }
}
