<?php
/**
 * 花里胡哨的Typecho主题
 * @package Fu Theme
 * @version 1.0
 * @author Finxel
 * @link https://github.com/finxel/fu-theme
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div class="row">
                        
                                        <div class="row my-3">
                                                <?php while ($this->next()): ?>
<div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
									<a href="<?php $this->permalink() ?>">
                                    <img class="card-img-top img-fluid" src="/usr/themes/fu-theme/assets/cover/<?php echo rand(1,7);?>.jpg" alt="Card image cap" />
                                    </a>
									<div class="card-body">
                                        <h4 class="card-title"><?php $this->title() ?></h4>
                                        <p class="card-text"><i class="feather icon-user"></i><?php $this->author(); ?></p>
                                    </div>
									<div class="card-footer text-muted">
									                                    <span class="float-left"><?php $this->date(); ?></span>
									                                    <span class="float-right">
									                                        <a href="<?php $this->permalink() ?>" class="card-link">Read More</a>
									                                    </span>
									                                </div>
									
                                </div>
                            </div>
                        </div>
							
                                                <?php endwhile; ?></div>
                                                
                                            
                                   
                                
   

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
