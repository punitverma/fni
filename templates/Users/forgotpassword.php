<!--Main layout-->
<?php
$types=array('M'=>'Distributor','F'=>'Frenchie');
?>
<main>
    <div class="container">

        <!--Section: Main info-->
        <section class="mt-1 pt-1 wow">
            <div class="row">
                <div class="col-md-12 col-xl-10 col-sm-12 mb-4 mt-5">

                    <div class="card">
                        <div class="card-header info">
                           Forgot Password
                        </div>
                        <div class="card-body">
                        <?= $this->Form->create() ?>
                        <div class="col-md-6 col-sm-12">
                                <div class="md-form">
                                    <?= $this->Form->control('type', ['label' => false, 'class' => 'form-control','options'=>$types]); ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="md-form">
                                    <?= $this->Form->control('username', ['label' => 'Login ID', 'class' => 'form-control']); ?>
                                </div>
                            </div>
                           
                           
                            
                            
                        
                        <div class="col-md-6 col-sm-10">
                        
                        <?= $this->Form->button(__('Get OTP'),['id'=>'btnSave','class' => 'form-control primary']) ?>
                        
                        </div>
                        
                        <?= $this->Form->end() ?>
                        <div>
            <!-- Forgot password -->
            <a href="/forgotusername">Forgot Login Id?</a>
        </div>
                    </div>
                </div>
                    
            </div>

        </section>
    </div>
</main>
