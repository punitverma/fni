<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Frenchy $frenchy
 */
$reg=['Y'=>'Yes','N'=>'No'];
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="frenchies form content">
            <?= $this->Form->create($frenchy,['onsubmit'=>'return check(this)']) ?>
            <fieldset>
                <legend><?= __('Add Franchise') ?></legend>
                <?php
                    echo $this->Form->control('frenchietype_id', ['label'=>'Type','options' => $frenchietypes, 'empty' => true]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('pan',['label'=>'PAN NO:']);
                    echo $this->Form->control('registered',['options'=>$reg,'selected'=>'Y']);
                    echo $this->Form->control('gst',['label'=>'GST NO:','class'=>'']);
                    echo $this->Form->control('mobile');
                    echo $this->Form->control('address');
                    echo $this->Form->control('state_id', ['options' => $states]);
                    echo $this->Form->control('district_id', ['options' => null,'empty'=>'--DISTRICT--']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Create')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<script>
function check(f){

var txtPANCard = document.getElementById("pan");
     var regex = /([A-Z]){5}([0-9]){4}([A-Z]){1}$/;
var ret=false;
     if (regex.test(txtPANCard.value.toUpperCase()) ) {
         ret= true;
     } else {
         message('error','PAN is not valid');

      ret= false;
     }
return ret;
}

$(function(){
    $('#registered').on('change', function() {
        var id = $(this).val();
        if(id=='Y'){
            $("#gst").show();
            $("label[for='gst']").html('GST No.');

        }
        else{
            $("#gst").hide();
            $("label[for='gst']").html('GST No : N/A');

        }
    });   
  $('#state-id').on('change', function() {

    var id = $(this).val();
    
    var targeturl = '/districts';
    if(id == '0'){
      $('#district-id').html(`<option value="-1">Select State</option>`);
    }else{
      
	    $('#district-id').html(`<option value="-1">Select State</option>`); 	
		  $.ajax({
              type:'get',
              url: targeturl+"/"+id,                  
			  //data:'id='+id+'&type=state',
			  dataType: 'json',
			  success:function(result){
				  // $("#divLoading").removeClass('show');
				  $.each(result.result, function (key, data) {
                    $('#district-id').append('<option value="'+ key +'">'+ data+'</option>');
                  });
                   

			  }
		  });	
	  }
	});


});
</script>