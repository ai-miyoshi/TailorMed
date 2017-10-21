名前： <?php echo h($name);?><br/>
電話番号：<?php echo h($phone);?><br/>
メールアドレス：<?php echo h($email);?><br/>
郵便番号：<?php echo h($zipcode);?><br/>
都道府県：<?php echo h($prefecture);?><br/>
住所：<?php echo h($address);?><br/>
年齢：<?php echo h($age);?><br/>
性別：<?php echo h($gender);?><br/>
がんの種類：<?php echo h($cancer_type);?><br/>
ステージ：<?php echo h($cancer_stage);?><br/>
初発診断日：<?php echo h($initial_date);?><br/>
抗がん剤の有無：<?php echo ($taking_anticancer_drug) ? '有':'無';?><br/>
使用中の抗がん剤の名称：<?php echo h($anticancer_drug_name);?><br/>
手術の有無：<?php echo ($had_surgery) ? '有':'無';?><br/>

その他：
<p>
<?php echo h($others);?>
</p>

