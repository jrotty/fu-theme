<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="row">
<div class="col-xs-12 col-md-8 ">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <h3 class="card-text"><?php $this->title() ?></h3>
                                                <h4 class="card-title"><?php $this->content('- 阅读剩余部分 -'); ?></h4>
												<div class="alert alert-primary mb-2" role="alert">
												<strong>转载须知:</strong> <?$this->options->shareinfo();?>
												</div>
                                                <p class="card-text"><small class="text-muted"><?php $this->date(); ?></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="col-xs-12 col-md-4">
									<div class="card">
									                                    <div class="card-body">
									                                        <div class="d-flex justify-content-start align-items-center mb-1">
									                                            <div class="avatar mr-1">
									                                                <img src="<?$this->options->avatar();?>" alt="avtar img holder" height="45" width="45">
									                                            </div>
									                                            <div class="user-page-info">
									                                                <p class="mb-0">作者:<?$this->options->name();?></p>
									                                                <span class="font-small-2"><?php $this->date(); ?></span>
									                                            </div>
									                                            <div class="ml-auto user-like text-danger"><i class="fa fa-heart"></i></div>
									                                        </div>
                              
							<img class="card-img-top img-fluid" src="/usr/themes/fu-theme/assets/cover/<?php echo rand(1,7);?>.jpg" alt="Card image cap" />
								                                    
																		<li class="list-group-item">
																		<span class="badge badge-pill bg-info float-right">上</span>
																		 上一篇: <?php $this->thePrev('%s', '没有了'); ?>
																	</li>
																		                                        <li class="list-group-item">
																		                                            <span class="badge badge-pill bg-warning float-right">下</span>
																		                                           下一篇: <?php $this->theNext('%s', '没有了'); ?>
																		                                        </li>
								                                     
								                                </div>
								                            </div></div></div>

    <?php $this->need('comments.php'); ?>

        


<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
