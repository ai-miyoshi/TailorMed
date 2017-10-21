<div class="page relative">
    <div class="page_layout page_margin_top clearfix">
        <?php echo $this->element('header', array('title'=>'ユーザー設定'));?>
        <div class="clearfix">
            <div class="vc_row wpb_row vc_row-fluid page_margin_top">
                <div class="columns no_width">
                    <h3>Edit Account</h3>
                
                    <?php echo $this->Form->create('User', array('class'=>'consult_form', 'id'=>'user_edit_form', 'method'=>'POST', 'action'=>'edit'));?>
                        <fieldset class="left" style="clear:both;">
                            <label>メールアドレス</label>
                            <div class="block">
                                <?php echo $this->Form->input($imap['email'], array('label'=>'', 'id'=>'Email', 'class'=>'form-control', 'placeholder'=>'Email', 'div'=>array('class'=>'form-group')));?>
                            </div>
                        </fieldset>
                        <fieldset class="left" style="clear:both;">
                            <label>メールアドレス（確認）</label>
                            <div class="block">
                                <?php echo $this->Form->input('email_confirm', array('label'=>'', 'id'=>'emailretype', 'class'=>'form-control', 'placeholder'=>'retype email address', 'div'=>array('class'=>'form-group retype')));?>
                            </div>
                        </fieldset>
                        <fieldset style="clear:both;">
                            <label></label>
                            <div class="block">
                                <a href="javascript:void(0);" onclick="$('#user_edit_form').submit();" class="more large dark_blue">送信する</a>
                                <input type="hidden" name="action" value="user_edit_form" />
                            </div>
                        </fieldset>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
