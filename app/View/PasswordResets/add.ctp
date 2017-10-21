
        <?php
        echo $this->Form->create('User', array('action'=>'login'));
        ?>
        <div class="hidden">
            <!-- $pam check -->
            <div class="dummy">
                <input name="username" type="text" value="">
                <input name="password" type="password" value="">
            </div>
        </div>
        <?php
        echo $this->Form->end();
        ?>

        <?php
        echo $this->Form->create('PasswordReset', array('action'=>'add', 'role'=>'form'));
        echo $this->Form->input($imap['username'], array('label'=>array('for'=>'Username', 'id'=>'Username', 'text'=>'Username or Password'), 'class'=>'form-control', 'placeholder'=>'Username or Email', 'div'=>array('class'=>'form-group')));
        echo $this->Form->submit('Submit', array('class'=>'btn btn-primary'));
        echo $this->Form->end();
        ?>
