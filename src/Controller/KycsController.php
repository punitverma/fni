<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\I18n\FrozenDate;
/**
 * Kycs Controller
 *
 * @property \App\Model\Table\KycsTable $Kycs
 *
 * @method \App\Model\Entity\Kyc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KycsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
     //   $this->viewBuilder()->setLayout('member');
        $u= $this->Authentication->getResult()->getData();
        $kyc= $this->Kycs->find('all')->where(['member_id'=>$u->username])->first();
        $kycdoc= null;
        if(empty($kyc)){
            $kyc = $this->Kycs->newEmptyEntity();
            $kyc->member_id=$u->username;
            $kyc->pan='';
            $kyc->ifsc='';
            $kyc->name='';
            $kyc->accno='';
            $this->Kycs->save($kyc);

        }else{
            $kycdoc=$this->Kycs->Kycdocs->find()->where(['kyc_id'=>$kyc->id])->first();
        }
        
        if ($this->request->is(['post','put']) && $kyc->approveby==null && $kyc->approveon==null) { // 
            
            $kyc = $this->Kycs->patchEntity($kyc, $this->request->getData());
            $kyc->member_id=$u->username;
            $kyc->approveby=null;
            $kyc->approveon=null;

            $kyc->pan=strtoupper($kyc->pan);
            $kyc->bank=strtoupper($kyc->bank);
            $kyc->branch=strtoupper($kyc->branch);
            $kyc->ifsc=strtoupper($kyc->ifsc);
        
            

            
            if ($this->Kycs->save($kyc)) {
                $this->Flash->success(__('The kyc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kyc could not be saved. Please, try again.'));
        }
        $kyc['doc']=empty($kycdoc);
        $this->set(compact('kyc'));

    }   
   public function list($status=null){
    $u= $this->Authentication->getResult()->getData();
    if($u->role_id!=2)
        return;

        $this->paginate = [
            'contain' => ['Members'],
        ];

        if($status!=null && $status!='A'){
            $this->paginate['conditions']=['Members.kyc'=>$status,];
        }
        else
            $status='A';

        $kycs = $this->paginate($this->Kycs);

        $this->set(compact('kycs','status'));

    }

    public function view($id){
        $kyc=$this->Kycs->get($id,['contain'=>['Members','Kycdocs']]);
        //$this->loadmodel('Banks');
        
        //$bank=$this->Banks->find()->where(['IFSC'=>$kyc->ifsc])->first();

        $this->set(compact('kyc'));
    }

    
    public function action($status,$mem_id){
        
        $u= $this->Authentication->getResult()->getData();
        
        if($u->role_id!=2 || !($status=='Y' || $status=='R') )
            return ;

        $kyc=$this->Kycs->find()->contain(['Members'])->where(['member_id'=>$mem_id])->first();
        $mem=$kyc->member;
        if( $kyc->approveby==null || $mem->dt_activate==null){

            $kyc->approveby=$u->username;
            $kyc->approveon=new FrozenDate();

            $mem->kyc=$status;
            $mem->dt_activate=new FrozenDate();

            if($this->Kycs->save($kyc) && $this->Kycs->Members->save($mem)){
                $this->Flash->success(__('The kyc has been done.'));

            }else{
                $this->Flash->error(__('Please choose a file to upload.'));
        
            }
          
        }
        $this->redirect(['controller' => 'kycs', 'action' => 'list',$status]);

    }

}
