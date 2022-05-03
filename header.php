<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', '  '); ?><?php $this->options->title(); ?></title>

<!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
<link rel="stylesheet" type="text/css" href="/usr/themes/fu-theme/assets/css/vendors.min.css"><link rel="stylesheet" type="text/css" href="/usr/themes/fu-theme/assets/css/apexcharts.css"><link rel="stylesheet" type="text/css" href="/usr/themes/fu-theme/assets/css/tether-theme-arrows.css"><link rel="stylesheet" type="text/css" href="/usr/themes/fu-theme/assets/css/tether.min.css"><link rel="stylesheet" type="text/css" href="/usr/themes/fu-theme/assets/css/shepherd-theme-default.css"><link rel="stylesheet" type="text/css" href="/usr/themes/fu-theme/assets/css/bootstrap.css?v=3"><link rel="stylesheet" type="text/css" href="/usr/themes/fu-theme/assets/css/bootstrap-extended.min.css"><link rel="stylesheet" type="text/css" href="/usr/themes/fu-theme/assets/css/components.min.css"><link rel="stylesheet" type="text/css" href="/usr/themes/fu-theme/assets/css/dark-layout.css"><link rel="stylesheet" type="text/css" href="/usr/themes/fu-theme/assets/css/semi-dark-layout.css"><link rel="stylesheet" type="text/css" href="/usr/themes/fu-theme/assets/css/vertical-menu.css"><link rel="stylesheet" type="text/css" href="/usr/themes/fu-theme/assets/css/palette-gradient.css"><link rel="stylesheet" type="text/css" href="/usr/themes/fu-theme/assets/css/dashboard-analytics.css"><link rel="stylesheet" type="text/css" href="/usr/themes/fu-theme/assets/css/card-analytics.css"><link rel="stylesheet" type="text/css" href="/usr/themes/fu-theme/assets/css/tour.css"><link rel="stylesheet" type="text/css" href="/usr/themes/fu-theme/assets/css/style.css">


		

</head>
<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                            <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                            <!--     i.ficon.feather.icon-menu-->
                            <li class="nav-item"><a  q class="nav-link" href="/"><i class="ficon feather icon-home"></i></a></li>
                           
                        </ul>
                        
                    </div>
                    <ul class="nav navbar-nav float-right">

                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        
                      
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand">
                    
                        <h2 class="brand-text"><?$this->options->logotext();?></h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                
                <li class=" navigation-header"><span>导航</span>
                </li>
                <li class="nav-item"><a href="/"><i class="feather icon-home"></i><span class="menu-title">首页</span></a>
                </li>
<li class=" nav-item"><a><i class="feather icon-box"></i><span class="menu-title">分类</span></a>
                    <ul class="menu-content">
                        <?php \Widget\Metas\Category\Rows::alloc()->listCategories('wrapClass=widget-list'); ?>
                    </ul>
</li>
<li class=" nav-item"><a><i class="feather icon-clock"></i><span class="menu-title">归档</span></a>
        <ul class="menu-content">
        <?php \Widget\Contents\Post\Date::alloc('type=month&format=F Y')
                        ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
</ul>
</li>

<li class=" navigation-header"><span>其他</span>
</li>
<li class="nav-item"><a href="<?php $this->options->feedUrl(); ?>"><i class="feather icon-link"></i><span class="menu-title">RSS链接</span></a>
</li>
<li class="nav-item"><a href="/admin"><i class="feather icon-user"></i><span class="menu-title">后台登录</span></a>
</li>


            
                    </ul>
               
                
        </div>
    </div>
<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">


    
    
