<div class="page relative">
    <div class="page_layout page_margin_top clearfix">
        <?php echo $this->element('header', array('title'=>'アナウンスメントリスト'));?>
        <div class="clearfix">
            <div class="vc_row wpb_row vc_row-fluid page_margin_top">
                <div class="columns no_width">
                    <?php foreach($data as $ann) { ?>
                        
                        <?php extract($ann['Announcement']); ?>

                        <?php echo $id;?>
                        &nbsp;
                        <?php echo $this->Html->link($title, '/announcements/edit/'.$id);?>
                        &nbsp;
                        <?php echo $this->Html->link('delete', 'javascript:void(0);', array('onclick'=>"if(confirm('Are you sure you want to delete?')){ window.location='/announcements/delete/$id';}"));?>
                        <br/><br/>
                    <?php }?>
                    <?php echo $this->element('paginator');?>
                </div>
            </div>
        </div>
    </div>
</div>
