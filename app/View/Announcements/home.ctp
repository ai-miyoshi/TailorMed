<?php
    echo $this->Html->script('jquery.carouFredSel-5.6.4-packed');
    echo $this->Html->script('jquery.sliderControl');
    echo $this->Html->script('jquery.timeago');
    echo $this->Html->script('jquery.hint');
    echo $this->Html->script('jquery.isotope.min');
    echo $this->Html->script('jquery.isotope.masonry');
    echo $this->Html->script('main');
?>
<!-- slider -->
<ul class="slider">
    <li style="background-image: url('images/slider/img1.jpg');">
        &nbsp;
    </li>
    <li style="background-image: url('images/slider/img2.jpg');">
        &nbsp;
    </li>
    <li style="background-image: url('images/slider/img3.jpg');">
        &nbsp;
    </li>
</ul>
<div class="page relative noborder">
    <!-- top message -->
    <div class="slider_content_box clearfix">
        <div class="slider_content" style="display: block;">
            <h1 class="title">
                全米No.1の<br/>がん遺伝子検査
            </h1>
            <h2 class="subtitle">
                がん細胞が持つ遺伝子異常を詳細に解析し<br/>
                新たな治療法の選択肢を見出す<br/>
            </h2>
        </div>
        <div class="slider_content">
            <h1 class="title">
                468種の<br/>がん遺伝子を判別
            </h1>
            <h2 class="subtitle">
                自身のがんに効果がある<br/>
                最適な薬剤を見つけ出す<br/>
            </h2>
        </div>
        <div class="slider_content">
            <h1 class="title">
                全米最高峰の<br/>信頼性の高い検査
            </h1>
            <h2 class="subtitle">
                2014年全米No.1がん専門病院に選出された<br/>
                MSKがんセンターでの遺伝子検査<br/>
            </h2>
        </div>
    </div>

    <!-- home box -->
    <ul class="home_box_container clearfix">
        <li class="home_box light_blue animated_element animation-fadeIn duration-500">
            <h2>
                <?php echo $this->Html->link('がん遺伝子検査とは', '/pages/about');?>
            </h2>
            <div class="news clearfix">
                <p class="text">
                    全米No.1がん専門病院に選出されたがんセンターで実施する「MSK-IMPACT」とは
                </p>
                <?php echo $this->Html->link('詳細はこちら', '/pages/about', array('class'=>'more light icon_small_arrow margin_right_white'));?>
            </div>
        </li>

        <li class="home_box blue animated_element animation-slideRight duration-800 delay-250">
            <h2>
                <?php echo $this->Html->link('提携医療機関について', '/pages/flow');?>
            </h2>
            <div class="news clearfix">
              <p class="text">
                順天堂大学医学部附属順天堂医院，横浜市立大学附属病院にてがん遺伝子検査を受けることができます。
              </p>
              <?php echo $this->Html->link('詳細はこちら', '/pages/flow', array('class'=>'more light icon_small_arrow margin_right_white'));?>
            </div>
        </li>

        <li class="home_box dark_blue animated_element animation-slideRight200 duration-800 delay-500">
          <h2>
              <?php echo $this->Html->link('個人情報保護方針', '/pages/philosophy');?>
          </h2>
          <div class="news clearfix">
            <p class="text">
                  患者様の個人情報である遺伝子情報や医療情報は，関連法規に基づき厳重に管理しております。
              </p>
              <?php echo $this->Html->link('詳細はこちら', '/pages/philosophy', array('class'=>'more light icon_small_arrow margin_right_white'));?>
          </div>
        </li>
    </ul>



    <!-- <table class="home-links page_margin_top_section">
        <tr>
        <td>
            <a style="color: rgb(255, 255, 255); border-color: rgb(49, 86, 163); background-color: rgb(49, 86, 163);" onmouseover="this.style.color='#FFFFFF';this.style.backgroundColor='#42b3e5';this.style.borderColor='#42b3e5'" onmouseout="this.style.color='#FFFFFF';this.style.backgroundColor='#3156A3';this.style.borderColor='#3156A3'" title="Large Button" href="https://docs.google.com/forms/d/e/1FAIpQLSf2hDGE6IQZ2FUAk_41jeKLT3g_Bxl6nG2IWeJh1spDj2_dBQ/viewform" class="mc_button xlarge">お問い合わせ</a>
        </td>
        <td>
            <a style="color: rgb(255, 255, 255); border-color: rgb(49, 86, 163); background-color: rgb(49, 86, 163);" onmouseover="this.style.color='#FFFFFF';this.style.backgroundColor='#42b3e5';this.style.borderColor='#42b3e5'" onmouseout="this.style.color='#FFFFFF';this.style.backgroundColor='#3156A3';this.style.borderColor='#3156A3'" title="Large Button" href="/pages/attention" class="mc_button xlarge">注意事項</a>
        </td>
        </tr>
    </table> -->

    <!-- box2 -->
    <br/><br/><br/>
    <ul class="home_box_container clearfix page_margin_top_section animated_element animation-fadeIn duration-500 delay-850">
        <li class="home_box light_blue">
            <h2>
                <?php echo $this->Html->link('患者様へ', '/pages/hospitals');?>
            </h2>
            <div class="news clearfix">
                <p class="text">
                    検査を希望される患者様は，主治医と相談の上提携医療機関へお問い合わせください。
                </p>
                <?php echo $this->Html->link('詳細はこちら', '/pages/hospitals', array('class'=>'more light icon_small_arrow margin_right_white'));?>
            </div>
        </li>

        <li class="home_box blue">
            <h2>
                <?php echo $this->Html->link('医療関係者様へ', '/pages/recruitment');?>
            </h2>
            <div class="news clearfix">
              <p class="text">
                提携医療機関を募集しております。がんゲノム検査の普及のためにも，ご協力をお願いいたします。
              </p>
              <?php echo $this->Html->link('詳細はこちら', '/pages/recruitment', array('class'=>'more light icon_small_arrow margin_right_white'));?>
            </div>
        </li>

        <li class="home_box dark_blue">
          <h2>
              <?php echo $this->Html->link('運営からのメッセージ', '/pages/greetings');?>
          </h2>
          <div class="news clearfix">
            <p class="text">
                  全米最高峰のがん遺伝子検査「MSK-IMPACT」の日本窓口を立ち上げた医師の思いとは
              </p>
              <?php echo $this->Html->link('詳細はこちら', '/pages/greetings', array('class'=>'more light icon_small_arrow margin_right_white'));?>
          </div>
        </li>
    </ul>

    <!-- ニュース -->
    <div class="clearfix">
      <?php if($announcements) {?>
          <h3 class="page_margin_top_section">ニュース</h3>
          <div class="announcements-wrapper announcement clearfix page_margin_top">
          <?php foreach($announcements as $announcement) {?>
          <?php extract($announcement['Announcement'])?>
              <ul class="columns no_width">
                  <li><h2　class="colums_title_color"><span class="announcement-date"><?php echo date_format(date_create($created), 'Y/m/d');?><?php echo $title;?></span></h2>
                      <br/>
                      <p class="colums_body"><?php echo $body;?></p>
                  </li>
              </ul>
          <?php }?>
          <?php }?>
        </div>
    </div>
</div>
