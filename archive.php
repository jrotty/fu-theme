<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="alert alert-primary mb-2" role="alert">
<strong><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ''); ?></strong>
</div>
    <?php if ($this->have()): ?>
        <div class="row my-3">
                                                        <?php while ($this->next()): ?>
        <div class="col-xl-4 col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="card-content">
        									<a href="<?php $this->permalink() ?>">
                                            <img class="card-img-top img-fluid" src="/usr/themes/fu-theme/assets/cover/<?php echo rand(1,7);?>.jpg" alt="Card image cap" />
                                            <div class="card-body">
                                                <h4 class="card-title"><?php $this->title() ?></h4>
                                                <p class="card-text"><?php $this->content('- 阅读剩余部分 -'); ?></p>
                                                <p class="card-text"><i class="feather icon-user"></i><?php $this->author(); ?></p>
                                                <p class="card-text"><small class="text-muted"><?php $this->date(); ?></small></p>
                                            </div></a>
                                        </div>
                                    </div>
                                </div>
        							
                                                        <?php endwhile; ?></div>
    <?php else: ?>
            <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
    <?php endif; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main -->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
