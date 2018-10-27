<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php require 'core/mylib/tag.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>博客日志 -聊城信息港</title>
	<meta name="Description" content="聊城博客日志，免费博客申请，免费个人主页空间。一站通会员账号+二级个性域名=您的全免费Blog" />
	<meta name="keywords" content="聊城博客,免费个人主页,聊城空间" />
	<link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/blog.css" type="text/css"/>
	<link rel="shortcut icon" href="<?php echo $this->_var['theme_path']; ?>/img/favicon.ico">
	<link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/css.css" type="text/css">
	<script type="text/javascript" src="<?php echo $this->_var['theme_path']; ?>/js/system.js"></script>
</head>
<body>
<?php echo $this->fetch('header.html'); ?>
<div class="content">
	<div class="l">
		<dl class="blog_list">
            <?php $article = randArticle('blog_article', 34);?>
            <?php for($i=0; $i< 34; $i++): ?>
	            <dt><a href="<?= $article[$i]['url']; ?>" target="_blank"><?= $article[$i]['title']; ?></a><em><?= $article[$i]['author']; ?></em></dt>
	            <dd><?=$article[$i]['description'];?><cite><?=randTime()?></cite></dd>
            <?php endfor;?>
		</dl>
		<div class="page"><em>共<?php rand(100,1000)?>条</em>
			<?php
			$page = rand(1, 999);
			echo '<a href="/blog_'.rand(10000,99999).'/">上一页&gt;</a>';
			for ($i=0;$i<9;$i++){
				echo '<a href="/blog_'.rand(10000,99999).'/">'.($page+$i).'</a>';
			}
            echo '<a href="/blog_'.rand(10000,99999).'/">下一页&gt;</a>';
			?>
		</div>
	</div>
	<div class="r">
		<div class="box">
			<h5>近期活跃会员</h5>
			<ul>
                <?php $article = randArticle('blog_article', 9);?>
                <?php for($i=0; $i< count($article); $i++): ?>
				<li>
					<a href="<?= $article[$i]['url']; ?>" target="_blank">
						<img src="<?=randPic('liaocheng/liaocheng/face')?>" style="width:60px;height:60px;" alt="<?= $article[$i]['title']; ?>"/>
						<p><?= randName();?></>
					</a>
				</li>
                <?php endfor;?>
			</ul>
		</div>
		<div class="box t_10">
			<h5>赞助商推广链接</h5>
			<div class="ad">

			</div>
		</div>
	</div>
</div>
<?php echo $this->fetch('footer.html'); ?>
</body>
</html>