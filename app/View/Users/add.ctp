<script>
$(document).ready(function(){
    $('.retype').bind("paste",function(e) {
        e.preventDefault();
    });
});
</script>

<div class="page relative">
    <div class="page_layout page_margin_top clearfix">
        <?php echo $this->element('header', array('title'=>'企業情報'));?>
        <div class="clearfix">
            <div class="vc_row wpb_row vc_row-fluid page_margin_top">
                <div class="columns no_width">

                    <h3>Register</h3>
                    <label>Password Policy</label>
                    <blockquote>
                        <ul>
                            <li>At least 8 characters long.</li>
                            <li>Must contain letter and number.</li>
                        </ul>
                    </blockquote>
                    <?php
                    echo $this->Form->create('User', array('action'=>'add', 'role'=>'form'));
                    echo $this->Form->input($imap['username'], array('label'=>array('for'=>'Username', 'text'=>'Minecaft Username', 'class'=>'control-label'), 'class'=>'form-control', 'placeholder'=>'Minecraft Username', 'id'=>'Username', 'div'=>array('class'=>'form-group')));
                    echo $this->Form->input($imap['email'], array('label'=>array('for'=>'Email', 'text'=>'Email Address', 'class'=>'control-label'), 'id'=>'Email', 'class'=>'form-control', 'placeholder'=>'Email', 'div'=>array('class'=>'form-group')));
                    echo $this->Form->input('email_confirm', array('label'=>array('for'=>'EmailRetype', 'text'=>'Retype Email Address', 'class'=>'control-label'), 'id'=>'EmailRetype', 'class'=>'form-control', 'placeholder'=>'Retype Email Address', 'div'=>array('class'=>'form-group retype')));
                    echo $this->Form->input($imap['password'], array('type'=>'password', 'label'=>array('for'=>'Pass', 'text'=>'Password', 'class'=>'control-label'), 'id'=>'Pass', 'class'=>'form-control', 'placeholder'=>'Password', 'div'=>array('class'=>'form-group')));
                    echo $this->Form->input('password_confirm', array('type'=>'password', 'label'=>array('for'=>'PassRetype', 'text'=>'Retype Password', 'class'=>'control-label'), 'id'=>'PassRetype', 'class'=>'form-control', 'placeholder'=>'Retype Password', 'div'=>array('class'=>'form-group retype')));
                    echo $this->Form->button('Submit', array('class'=>'btn btn-primary'));

                    echo $this->Form->end();
                    ?>
                    <div style="display:none;">
                        <!-- $pam check -->
                        <div class="dummy">
                            <input name="username" type="text" value="">
                            <input name="email" type="text" value="">
                            <input name="password" type="password" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
