<div class="page relative">
    <div class="page_layout page_margin_top clearfix">
        <?php echo $this->element('header', array('title'=>'アカデミアサポートメンバー'));?>
        <div class="clearfix">
            <div class="vc_row wpb_row vc_row-fluid page_margin_top">
                <div class="columns no_width">

                    <h3>
                        まずはご相談ください
                    </h3>
                    <?php echo $this->Form->create('AcademiaSupport', array('class'=>'consult_form', 'id'=>'research_sample_form', 'method'=>'POST', 'action'=>'add'));?>
                        <fieldset class="left">
                            <label>お名前</label>
                            <div class="block">
                                <?php echo $this->Form->input('name', array('type'=>'text', 'label'=>'', 'class'=>'text_input', 'div'=>'', 'autofocus'));?>
                            </div>
                        </fieldset>
                        <fieldset class="right">
                            <label>お電話番号</label>
                            <div class="block">
                                <?php echo $this->Form->input('phone', array('type'=>'text', 'label'=>'', 'class'=>'text_input', 'div'=>''));?>
                            </div>
                        </fieldset>
                        <fieldset style="clear:both;">
                            <label>ご所属</label>
                            <div class="block">
                                <?php echo $this->Form->input('organization', array('type'=>'text', 'label'=>'', 'class'=>'text_input', 'div'=>''));?>
                            </div>
                        </fieldset>
                        <fieldset class="left" style="clear:both;">
                            <label>メールアドレス</label>
                            <div class="block">
                                <?php echo $this->Form->input('email', array('type'=>'text', 'label'=>'', 'class'=>'text_input', 'div'=>''));?>
                            </div>
                        </fieldset>
                        <fieldset class="right">
                            <label>メールアドレス（確認用）</label>
                            <div class="block">
                                <?php echo $this->Form->input('email_confirm', array('type'=>'text', 'label'=>'', 'class'=>'text_input', 'div'=>''));?>
                            </div>
                        </fieldset>
                        <fieldset class="left" style="clear:both;">
                            <label>郵便番号</label>
                            <div class="block">
                                <?php echo $this->Form->input('zipcode', array('type'=>'text', 'label'=>'', 'class'=>'text_input', 'div'=>''));?>
                            </div>
                        </fieldset>
                        <fieldset class="right">
                            <label>都道府県</label>
                            <div class="block">
                                <?php echo $this->element('area_selectbox');?>
                            </div>
                        </fieldset>
                        <fieldset style="clear:both;">
                            <label>ご住所</label>
                            <div class="block">
                                <?php echo $this->Form->input('address', array('type'=>'text', 'label'=>'', 'class'=>'text_input', 'div'=>''));?>
                            </div>
                        </fieldset>
                        <fieldset style="clear:both;">
                            <label>ご研究内容をご記入ください</label>
                            <div class="block">
                                <?php echo $this->Form->input('research', array('type'=>'textarea', 'label'=>'', 'class'=>'text_input', 'div'=>'', 'maxlength'=>2000));?>
                            </div>
                        </fieldset>
                        <fieldset style="clear:both;">
                            <label></label>
                            <div class="block">
                                <a href="javascript:void(0);" onclick="$('#research_sample_form').submit();" class="more large dark_blue">送信する</a>
                                <input type="hidden" name="action" value="research_sample_form" />
                            </div>
                        </fieldset>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
 </div>
 <br/>
