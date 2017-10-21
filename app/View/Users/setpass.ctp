<div class="page relative">
    <div class="page_layout page_margin_top clearfix">
        <?php echo $this->element('header', array('title'=>'パスワード変更'));?>
        <div class="clearfix">
            <div class="vc_row wpb_row vc_row-fluid page_margin_top">
                <div class="columns no_width">
                    <h3>Change Password</h3>
                    <?php echo $this->Form->create('User', array('class'=>'consult_form', 'id'=>'user_setpass_form', 'method'=>'POST', 'action'=>'setpass'));?>
                        <fieldset class="left" style="clear:both;">
                            <label>パスワード</label>
                            <div class="block">
                                <?php echo $this->Form->input($imap['password'], array('label'=>'', 'class'=>'form-control', 'placeholder'=>'New Password', 'type'=>'password', 'div'=>array('class'=>'form-group')));?>
                            </div>
                        </fieldset>
                        <fieldset class="left" style="clear:both;">
                            <label>パスワード（確認）</label>
                            <div class="block">
                                <?php echo $this->Form->input('password_confirm', array('label'=>'', 'class'=>'form-control', 'placeholder'=>'Retype New Password', 'type'=>'password', 'div'=>array('class'=>'form-group')));?>
                            </div>
                        </fieldset>
                        <fieldset style="clear:both;">
                            <label></label>
                            <div class="block">
                                <a href="javascript:void(0);" onclick="$('#user_setpass_form').submit();" class="more large dark_blue">送信する</a>
                                <input type="hidden" name="action" value="user_setpass_form" />
                            </div>
                        </fieldset>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
