<div class="page relative">
    <div class="page_layout page_margin_top clearfix">
        <?php echo $this->element('header', array('title'=>'管理ページ'));?>
        <div class="clearfix">
            <div class="vc_row wpb_row vc_row-fluid page_margin_top">
                <div class="columns no_width">
                    <?php echo $this->Html->link('アナウンスメントリスト', '/announcements/index');?>
                    <br/>
                    <br/>
                    <?php echo $this->Html->link('アナウンスメント追加', '/announcements/add');?>
                    <br/>
                    <br/>
                    <?php echo $this->Html->link('ユーザー設定', '/users/edit');?>
                    <br/>
                    <br/>
                    <?php echo $this->Html->link('パスワード変更', '/users/setpass');?>
                </div>
            </div>
        </div>
    </div>
</div>
