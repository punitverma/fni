<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Invoicedetails Controller
 *
 * @property \App\Model\Table\InvoicedetailsTable $Invoicedetails
 *
 * @method \App\Model\Entity\Invoicedetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InvoicedetailsController extends AppController
{

    public function checkOffer($off_id,$invoice_id){
       
        $this->loadModel('Offers');
        $offer=$this->Offers->get($off_id);

        if(!$offer->active)
            return null;
        
            $offer->active=false;
        
        $inv_val=0;
        $item_qty=[];
        $sql="select sum(amount) as amount from invoicedetails where invoice_id=?";
                $stmt = $conn->execute($sql,[$invoice_id]);
                $results = $stmt ->fetchAll('assoc');
                $inv_val=$results[0]['amount'];

        $sql="select item_id , sum(qty) as qty from invoicedetails where invoice_id=? group by item_id";
                $stmt = $conn->execute($sql,[$invoice_id]);
                $item_qty = $stmt ->fetchAll('assoc');
              


        $offers=$this->Offers->find()->where(['active'=>true]);
        $offers=$offers->toArray();
        $result=[];
       
            if($offer->type=='I'){
                   // debug($offer->invoice_value.'#'.$inv_val);
                    $offer->active=($offer->invoice_value<=$inv_val);
            }else{
                $offer->active=false;
                for($i=0;$i<count($item_qty);$i++){
                    $v=$item_qty[$i];
                    if($v['item_id']==$offer->if_item_id && $v['qty']>= $offer->if_item_qty){
                        $offer->active=true;
                  
                    }
                }
            }
           
      return $offer;   


    }

    public function add($offer_id=null)
    {

        $this->loadModel('Invoices');
        $invoicedetail = $this->Invoicedetails->newEmptyEntity();
        $u = $this->Authentication->getResult()->getData();
        $invoicedetail->discount=0;
        if ($this->request->is('post') && $this->request->is('ajax'))  {
            $invoicedetail = $this->Invoicedetails->patchEntity($invoicedetail, $this->request->getData());
            
            if($invoicedetail->qty<=0){
                return $this->response->withType('application/json')->withStringBody(json_encode(['result' => 'error']));    
            }
            
            $invoice=$this->Invoices->get($invoicedetail->invoice_id);

            if($invoice->trtype!='D')
            return $this->response->withType('application/json')->withStringBody(json_encode(['result' => 'error']));
            else
            if( empty( $invoice->toid) || $invoice->toid=='' )
            return $this->response->withType('application/json')->withStringBody(json_encode(['result' => '-Select-']));
            
            if($offer_id!=null && $invoice->type=='S' && strcasecmp(substr($invoice->toid,0,4) ,'FNIF')!=0){

                $offer=$this->checkOffer($offer_id,$invoice->id);

                if($offer!=null){

                    $item=$this->Invoicedetails->Items->get($offer->item_id, [
                        'contain' => ['Itemcats']]);
                        $invoicedetail->discount=$offer->discount;
                        $item->points=$offer->points;     
                }
                else{
                    return $this->response->withType('application/json')->withStringBody(json_encode(['result' => 'error']));
                }

            }else
            {
            $item=$this->Invoicedetails->Items->get($invoicedetail->item_id, [
                'contain' => ['Itemcats']]);
            }

            
            if( strcasecmp($invoice->toid ,$u->username)!=0 ) 
            if( strcasecmp(substr($invoice->toid,0,4) ,'FNIF')==0 )   {
                $this->loadModel('Frenchies');
                $f=$this->Frenchies->get($invoice->toid);

                if($f->frenchietype_id==4){
                    $invoicedetail->discount=4.5;
                }
                

            }
            

            $qty=$invoicedetail->qty;
            if($invoice->type=='P'){
                $price=$item->purchaseprice;
                $invoicedetail->price=$price;
           
                $invoicedetail->amount=round(($price + $price * $item->tax/100) * $qty,2);
            }
            else{
                $price=$item->saleprice;
                $invoicedetail->price=$price;
           
                if($invoicedetail->discount!=0)
                   { 
                    $price=$price *(100-$invoicedetail->discount)/100;
                    $invoicedetail->amount=round(($price + $price * $item->tax/100) * $qty,2);
                   }else{
                    $invoicedetail->amount=round(($item->dp) * $qty,2);
                   }
            }
            $invoicedetail->itemname=$item->name;
            $invoicedetail->points=$item->points*$qty;
            $invoicedetail->hsn=$item->hsn;
            $invoicedetail->itemcat=$item->itemcat->name;
           
           
            //$price=$price*(100-$invoicedetail->discount)/100;

            if($invoice->tostate<>$invoice->fromstate){
                $invoicedetail->igst_p=$item->tax;
                $invoicedetail->igst_a= round( $item->tax * $price * $qty /100,2);
            }else{
                $invoicedetail->sgst_p=$item->tax/2;
                $invoicedetail->sgst_a=round($item->tax * $price * $qty/200,2);

                $invoicedetail->cgst_p=$item->tax/2;
                $invoicedetail->cgst_a=round($item->tax * $price * $qty/200,2);
            }
                       
           
            if ($invoice->trtype=='D' && $this->Invoicedetails->save($invoicedetail)) {
                if(! is_null( $invoicedetail->dt_exp))
                {
                    $invoicedetail->dt_exp=$invoicedetail->dt_exp->format('d-m-Y');
                }
                if(! is_null( $invoicedetail->dt_manf))
                {
                    $invoicedetail->dt_manf=$invoicedetail->dt_manf->format('d-m-Y');
                }
                return $this->response->withType('application/json')->withStringBody(json_encode(['result' => 'ok','data'=>$invoicedetail]));
            }
            
        }
        return $this->response->withType('application/json')->withStringBody(json_encode(['result' => 'error']));
    }

    /**
     * Delete method
     *
     * @param string|null $id Invoicedetail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id ,$invoice_id)
    {

        
        $this->request->allowMethod(['get', 'delete']);
        $invoicedetail = $this->Invoicedetails->get($id, [
            'contain' => ['Invoices'],
        ]);
   
        if($this->request->is('ajax') && $invoicedetail->invoice_id==$invoice_id && $invoicedetail->invoice->trtype=='D') {
            if ($this->Invoicedetails->delete($invoicedetail)) {
                return $this->response->withType('application/json')->withStringBody(json_encode(['result' => 'ok','amount'=>$invoicedetail->amount,'points'=>$invoicedetail->points]));
                } 
        }
        return $this->response->withType('application/json')->withStringBody(json_encode(['result' => 'error']));

     
    }
}