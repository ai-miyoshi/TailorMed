<script>
$(function() {
    $(".input_date").datepicker({
        dateFormat: "yy-mm-dd"
    });
});
</script>
<div class="page relative">
    <div class="page_layout page_margin_top clearfix">
        <?php echo $this->element('header', array('title'=>'検査受付窓口'));?>
        <div class="clearfix">
            <div class="vc_row wpb_row vc_row-fluid page_margin_top">
                <div class="columns no_width">

                    <h3>
                        まずはご相談ください
                    </h3>
                    <?php echo $this->Form->create('Consultation', array('class'=>'consult_form', 'id'=>'consult_form', 'method'=>'POST', 'action'=>'add'));?>
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
                        <fieldset class="left" style="clear:both;">
                            <br/>
                            <label>以下患者さまの情報をご選択ください</label>
                        </fieldset>
                        <fieldset class="left" style="clear:both;">
                            <label>年齢</label>
                            <div class="block">
                                <?php echo $this->Form->input('age', array('type'=>'text', 'label'=>'', 'class'=>'text_input', 'div'=>''));?>
                            </div>
                        </fieldset>
                        <fieldset class="right">
                            <label>性別</label>
                            <div class="block">
                                <?php
                                $options = array('女性' => '女性', '男性' => '男性');
                                $attributes = array('legend' => false, 'label'=>false, 'separator'=>' ', 'value'=>'女性');
                                echo $this->Form->radio('gender', $options, $attributes);
                                ?>
                            </div>
                        </fieldset>
                        <fieldset class="left" style="clear:both;">
                            <label>初発診断日</label>
                            <div class="block">
                                <?php echo $this->Form->input('initial_date', array('type'=>'text', 'label'=>'', 'class'=>'text_input input_date', 'div'=>''));?>
                            </div>
                        </fieldset>
                        <fieldset class="right">
                            <label>手術の有無</label>
                            <div class="block">
                                <?php
                                $options = array(1 => '有', 0 => '無');
                                $attributes = array('legend' => false, 'label'=>false, 'separator'=>' ', 'value'=>'1');
                                echo $this->Form->radio('had_surgery', $options, $attributes);
                                ?>
                            </div>
                        </fieldset>
                        <fieldset class="left" style="clear:both;">
                            <label>がんの種類</label>
                            <div class="block">
                                <?php echo $this->Form->input('cancer_type', array('type'=>'text', 'label'=>'', 'class'=>'text_input', 'div'=>''));?>
                            </div>
                        </fieldset>
                        <fieldset class="right">
                            <label>進行度</label>
                            <div class="block">
                                <?php echo $this->Form->input('cancer_stage',
                                    array(
                                        'label'=>'',
                                        'options'=>array(
                                            "1"=>"ステージ１",
                                            "2"=>"ステージ２",
                                            "3"=>"ステージ３",
                                            "4"=>"ステージ４"
                                        )
                                    ));?>
                            </div>
                        </fieldset>
                        <fieldset class="left" style="clear:both;">
                            <label>抗がん剤の有無</label>
                            <div class="block">
                                <?php
                                $options = array(1 => '有', 0 => '無');
                                $attributes = array('legend' => false, 'label'=>false, 'separator'=>' ', 'value'=>'1');
                                echo $this->Form->radio('taking_anticancer_drug', $options, $attributes);
                                ?>
                            </div>
                        </fieldset>
                        <fieldset class="right">
                            <label>使用中の抗がん剤の名称</label>
                            <div class="block">
                                <?php echo $this->Form->input('anticancer_drug_name', array('type'=>'text', 'label'=>'', 'class'=>'text_input', 'div'=>''));?>
                            </div>
                        </fieldset>
                        <fieldset style="clear:both;">
                            <label>その他（わかる範囲でご記入ください）</label>
                            <div class="block">
                                <?php echo $this->Form->input('others', array('type'=>'textarea', 'label'=>'', 'class'=>'text_input', 'div'=>'', 'maxlength'=>500));?>
                            </div>
                        </fieldset>
                        <fieldset style="clear:both;">
                            <label></label>
                            <div class="block">
                                <a href="javascript:void(0);" onclick="$('#consult_form').submit();" class="more large dark_blue">送信する</a>
                                <input type="hidden" name="action" value="consult_form" />
                            </div>
                        </fieldset>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
     </div>
 </div>
