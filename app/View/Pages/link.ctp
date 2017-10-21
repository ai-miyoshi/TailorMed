<div class="page relative">
    <div class="page_layout page_margin_top clearfix">
        <?php echo $this->element('header', array('title'=>'リンク'));?>
        <div class="clearfix">
            <div class="vc_row wpb_row vc_row-fluid page_margin_top">
                <div class=" no_width">
                  <h3>MSK-IMPACT検査を導入している医療機関</h3>
                  <div class="page_margin_top">
                      <!-- 別窓でリンクを表示 -->
                    <p>
                      <?php echo $this->Html->link("順天堂大学医学部附属順天堂医院　腫瘍内科","http://www.juntendo.ac.jp/hospital/clinic/shuyo/",array( 'target' => '_blank' ) ); ?>
                    </p>
                    <p>
                      <?php echo $this->Html->link("横浜市立大学附属病院　消化器内科　肝胆膵消化器病学","http://ycu-hepabiligi.jp/patient/oncogene.html",array( 'target' => '_blank' ) ); ?>
                    </p>
                  </div>
                  <br/><br/><br/><br/>

                    <h3>MSK-IMPACT検査を実施しているアメリカのがんセンター</h3>
                    <div class="page_margin_top">
                      <p>
                        <?php echo $this->Html->link("メモリアルスローンケタリングがんセンター (MSKがんセンター)","https://www.mskcc.org/",array( 'target' => '_blank' ) ); ?>
                      </p>
                    </div>
                    <br/><br/><br/><br/>

                    <h3>共同研究を行なっている医療機関</h3>
                    <div class="page_margin_top">
                      <p>
                        <?php echo $this->Html->link("北海道大学大学院医学研究科　腫瘍病理学分野","http://patho2.med.hokudai.ac.jp/",array( 'target' => '_blank' ) ); ?>
                      </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
