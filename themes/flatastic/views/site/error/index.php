<?php
$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
    'Error',
);
?>
<div class="clear"></div>
<!--breadcrumbs-->
<section class="breadcrumbs">
    <div class="container">
        <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10 current"><a href="<?php echo F::url('/site/default/index') ?>" class="default_t_color">Home<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li><a href="#" class="default_t_color">Error</a></li>
        </ul>
    </div>
</section>
<!--content-->
<div class="page_content_offset">
    <div class="container m_bottom_45">
<!--        <blockquote class="r_corners shadow f_size_large relative m_bottom_30">-->
            <?php echo CHtml::encode($message); ?>
<!--        </blockquote>-->
    </div>
</div>
