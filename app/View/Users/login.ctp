<div class="page relative">
    <div class="page_layout page_margin_top clearfix">
        <?php echo $this->element('header', array('title'=>'ログイン'));?>
        <div class="clearfix">
            <div class="vc_row wpb_row vc_row-fluid page_margin_top">
                <div class="columns no_width">

                    <h3>Login</h3>
                    <?php echo $this->Form->create('User', array('class'=>'consult_form', 'id'=>'login_form', 'method'=>'POST', 'action'=>'login'));?>
                    <fieldset class="left">
                        <label>Username</label>
                        <div class="block">
                            <?php
                            echo $this->Form->input($imap['username'], array('label'=>'', 'class'=>'form-control', 'placeholder'=>'Username', 'div'=>array('class'=>'form-group')));
                            ?>
                        </div>
                    </fieldset>
                    <fieldset class="left">
                        <label>Password</label>
                        <div class="block">
                            <?php
                            echo $this->Form->input($imap['password'], array('label'=>'', 'class'=>'form-control', 'placeholder'=>'Password', 'type'=>'password', 'div'=>array('class'=>'form-group')));
                            ?>
                        </div>
                    </fieldset>
                    <fieldset style="clear:both;">
                        <label></label>
                        <div class="block">
                            <a href="javascript:void(0);" onclick="$('#login_form').submit();" class="more large dark_blue">送信する</a>
                            <input type="hidden" name="action" value="login_form" />
                        </div>
                    </fieldset>
                    <?php
                    echo $this->Form->end();
                    ?>

                    <div style="display:none;">
                        <!-- $pam check -->
                        <div class="dummy">
                            <input name="username" type="text" value="">
                            <input name="password" type="password" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
