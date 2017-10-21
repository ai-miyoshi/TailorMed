<div class="page relative">
    <div class="page_layout page_margin_top clearfix">
        <?php echo $this->element('header', array('title'=>'アナウンスメント'));?>
        <div class="clearfix">
            <div class="vc_row wpb_row vc_row-fluid page_margin_top">
                <div class="columns no_width">
                    <h3>Edit</h3>
                    <?php echo $this->Form->create('Announcement', array('class'=>'consult_form', 'id'=>'announcement_form', 'method'=>'POST', 'action'=>'edit'));?>
                    <fieldset class="left">
                        <label>タイトル</label>
                        <div class="block">
                            <?php echo $this->Form->input('title', array('type'=>'text', 'label'=>'', 'class'=>'text_input', 'div'=>'', 'autofocus'));?>
                        </div>
                    </fieldset>
                    <fieldset style="clear:both;">
                        <label>内容</label>
                        <div class="block">
                            <?php echo $this->Form->input('body', array('type'=>'textarea', 'label'=>'', 'class'=>'text_input', 'div'=>'', 'maxlength'=>500));?>
                        </div>
                    </fieldset>
                    <fieldset style="clear:both;">
                        <label></label>
                        <div class="block">
                            <a href="javascript:void(0);" onclick="$('#announcement_form').submit();" class="more large dark_blue">送信する</a>
                            <input type="hidden" name="action" value="announcement_form" />
                        </div>
                    </fieldset>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
