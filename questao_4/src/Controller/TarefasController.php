<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

/**
 * Tarefas Controller
 *
 * @property \App\Model\Table\TarefasTable $Tarefas
 *
 * @method \App\Model\Entity\Tarefa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TarefasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tarefas = $this->paginate($this->Tarefas);

        $this->set(compact('tarefas'));
    }

    /**
     * View method
     *
     * @param string|null $id Tarefa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tarefa = $this->Tarefas->get($id, [
            'contain' => []
        ]);

        $this->set('tarefa', $tarefa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tarefa = $this->Tarefas->newEntity();
        if ($this->request->is('post')) {
            $tarefa = $this->Tarefas->patchEntity($tarefa, $this->request->getData());
            if ($this->Tarefas->save($tarefa)) {
                $this->Flash->success(__('Tarefa Criada'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao criar, tente novamente.'));
        }
        $this->set(compact('tarefa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tarefa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tarefa = $this->Tarefas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tarefa = $this->Tarefas->patchEntity($tarefa, $this->request->getData());
            if ($this->Tarefas->save($tarefa)) {
                $this->Flash->success(__('Tarefa editada com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro, tente novamente.'));
        }
        $this->set(compact('tarefa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tarefa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tarefa = $this->Tarefas->get($id);
        if ($this->Tarefas->delete($tarefa)) {
            $this->Flash->success(__('Tarefa Excluida'));
        } else {
            $this->Flash->error(__('Erro ao excluir, tente novamente'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
