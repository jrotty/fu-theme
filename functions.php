<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
	?>
	<!-- MDUI CSS -->
	<link
	  rel="stylesheet"
	  href="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css"
	  integrity="sha384-cLRrMq39HOZdvE0j6yBojO4+1PrHfB7a9l5qLcmRm/fiWXYY+CndJPmyu5FV/9Tw"
	  crossorigin="anonymous"
	/>
	<div class="mdui-card">
	
	 
	
	  <!-- 卡片的标题和副标题 -->
	  <div class="mdui-card-primary">
	    <div class="mdui-card-primary-title">Fu Theme</div>
	    <div class="mdui-card-primary-subtitle">模板设置</div>
	  </div>
	
	  
	  <!-- 卡片的按钮 -->
	  <div class="mdui-card-actions">
	    <a class="mdui-btn" href="https://github.com/finxel/fu-theme"><i class="mdui-icon material-icons">star_border</i>去github点个star</a>
	  </div>
	
	</div>
	<?php
    $logotext = new \Typecho\Widget\Helper\Form\Element\Text(
        'logotext',
        null,
        'null',
        _t('左侧标题文字'),
        null
    );
	$name = new \Typecho\Widget\Helper\Form\Element\Text(
	    'name',
	    null,
	    'null',
	    _t('昵称'),
	    _t('显示博主信息用')
	);
	$avatar = new \Typecho\Widget\Helper\Form\Element\Text(
	    'avatar',
	    null,
	    'null',
	    _t('头像链接'),
	    _t('比如https://q1.qlogo.cn/g?b=qq&nk=123456&s=640')
	);
	$shareinfo = new \Typecho\Widget\Helper\Form\Element\Text(
	    'shareinfo',
	    null,
	    'null',
	    _t('转载须知'),
	    _t('显示在文章最下面')
	);

    $form->addInput($logotext);$form->addInput($avatar);$form->addInput($name);$form->addInput($shareinfo);

}

/*
function themeFields($layout)
{
    $logoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'logoUrl',
        null,
        null,
        _t('站点LOGO地址'),
        _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO')
    );
    $layout->addItem($logoUrl);
}
*/
