<div class="page relative">
    <div class="page_layout page_margin_top clearfix">
        <?php echo $this->element('header', array('title'=>'検査の流れ'));?>
        <div class="flow clearfix page_margin_top">
          <h3>検査受付医療機関</h3>
          <div class="page_margin_top">
            <p>MSK-IMPACT検査は
            <?php echo $this->Html->link("順天堂大学 医学部附属 順天堂医院","https://www.juntendo.ac.jp/hospital/clinic/shuyo/patient/p_release001.html",array( 'target' => '_blank' ) ); ?>
            ，
            <?php echo $this->Html->link("横浜市立大学附属病院","http://www.yokohama-cu.ac.jp/fukuhp/ganidensikensa20161209.html",array( 'target' => '_blank' ) ); ?>
            で検査受付を行なっております。</p>
            <p>検査を希望される方は各医療機関のHPを確認の上，お問い合わせください。</p>
            <p>弊社では患者様からの直接のお問い合わせには対応できかねます。</p>
          </div>

          <div class="page_margin_top">
            <h3>検査の流れ</h3>
            <div class="page_margin_top flow-table">
              <ol class="flow-list">
                <li>診療予約</li>
                  <p>以下のいずれかの医療機関に「MSK-IMPACT検査希望」としてご連絡ください。<br/>
                    <?php echo $this->Html->link("順天堂大学医学部附属順天堂医院　腫瘍内科","https://www.juntendo.ac.jp/hospital/clinic/shuyo/patient/p_release001.html",array( 'target' => '_blank' ) ); ?>
                    <br/>
                    <?php echo $this->Html->link("横浜市立大学附属病院　消化器内科　肝胆膵消化器病学","http://www.yokohama-cu.ac.jp/fukuhp/ganidensikensa20161209.html",array( 'target' => '_blank' ) ); ?></p>
                  </p>

                <li>医療機関での診察</li>
                  <p>患者様は医療機関から指定された日に医療機関にて診察を受けてください。<br/>
                    診察の際に，検査の詳細，検査同意書に関する説明があります。</p>

                <li>医療機関にて検体の品質確認</li>
                  <p>医療機関にて病理検体がMSK-IMPACT検査に適しているか，品質確認を行います。</p>

                <li>医療機関からテーラーメッド社へ検体を送付</li>
                  <p>医療機関にて検体の品質確認を行なった後，医療機関から弊社に検体が送られます</p>

                <li>テーラーメッド社からMSKがんセンターへ検体を送付</li>
                  <p>弊社にて検査に必要な書類の英訳を行なった後，検体をNYの<a href="https://www.mskcc.org/">MSKがんセンター</a>に空輸します。</p>

                <li>MSKがんセンターでMSK-IMPACT検査を実施</li>
                  <p>検査期間はMSKがんセンターが検体を受領してから約4週間です。</p>
                  <p>※検体の品質確認は行なっていますが，検体の保存状態によっては遺伝子検査を実施できない場合があります</p>

                <li>テーラーメッド社で検査結果の受領及び翻訳</li>
                  <p>MSKがんセンターから送付された検査結果を弊社が受領し，翻訳します。翻訳作業は本検査に精通した医師が行ないます。</p>

                <li>テーラーメッド社から医療機関へ検査結果の送付</li>
                  <p>検査結果の原本(英語)と翻訳した検査結果の両方をテーラーメッド社から医療機関担当医師へ送付いたします。</p>

                <li>医療機関にて結果の報告</li>
                  <p>患者様は医療機関から指定された日に医療機関にて診察を受けてください。<br/>
                    担当医より検査結果及び今後の治療方針について詳細説明があります。</p>
              </ol>
            </div>
          </div>

            <div class="page_margin_top">
              <p>
                以上が検査の流れです。医療機関受診方法については，各医療機関HPにて確認してください。</br>
                <?php echo $this->Html->link("順天堂大学医学部附属順天堂医院　腫瘍内科","https://www.juntendo.ac.jp/hospital/clinic/shuyo/patient/p_release001.html",array( 'target' => '_blank' ) ); ?>
                <br/>
                <?php echo $this->Html->link("横浜市立大学附属病院　消化器内科　肝胆膵消化器病学","http://www.yokohama-cu.ac.jp/fukuhp/ganidensikensa20161209.html",array( 'target' => '_blank' ) ); ?></p>
            </div>

            <h3 class="page_margin_top">検査に関するその他の情報</h3>
                <p><a href="/pages/about">MSK-IMPACT検査について</a></p>
                <p><a href="/pages/pricing">検査費用</a></p>
                <p><a href="/pages/evidence">MSK-IMPACTに関する論文</a></p>
        </div>
    </div>
</div>
