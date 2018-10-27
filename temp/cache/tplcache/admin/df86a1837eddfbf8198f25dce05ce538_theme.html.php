<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php echo $this->fetch('header.html'); ?>
<body class="body-main">
<ul id="admin_sub_title">
	<li class="sub"><a href="javascript:void(0)">模板设置</a></li>
	<li class='tips'>共有<?php echo $this->_var['total']; ?>套模板</li>
</ul>
<style type="text/css">
.list img{ border:1px solid #eee;height:120px;width:150px}
.list li{ float:left;margin:10px;background:#f8f8f8;padding:10px;border-right:1px dotted #ccc;}
.list p{ margin-bottom:5px;padding-bottom:5px;position: relative;}
.list .name{ border-bottom:1px dotted #bbb;text-align:center;}
.returnmsg{ color:red}
.theme_name {
    padding: 2px 4px;
    color: #fff;
    background-color: #555;
    border-radius: 4px;
	position: absolute;
    right: 6px;
    bottom: 6px;
	opacity: 0.8;
}
</style>
<div id="admin_right_b">
<ul id="classlist">
<li <?php if($this->_var['type'] == ''): ?>class="cur"<?php endif; ?>><a href="?admin-theme-index">全部分类</a></li>
<?php $_from=$this->_var['class_list']; if(!is_array($_from) && !is_object($_from)){ settype($_from, 'array'); }; $this->push_vars('k', 'vo');if(count($_from)):
    foreach($_from AS $this->_var['k'] => $this->_var['vo']):
?>
	<li <?php if($this->_var['type'] == $this->_var['vo']['dirname']): ?>class="cur"<?php endif; ?>><a href="?admin-theme-index-type-<?php echo $this->_var['vo']['dirname']; ?>"><?php echo $this->_var['vo']['name']; ?>(<b><?php echo empty($this->_var['vo']['num']) ? 0 : $this->_var['vo']['num']; ?></b>)</a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars(); ?>
</ul>
<table border="0" align="center" cellpadding="8" cellspacing="1" class="tableConfig">
<tr class="item_title">
	<td colspan="5"><i class="typcn typcn-cog"></i> 模板列表 (<span class="tips" style="color:red">注：未绑定模板的域名将会随机调用模板，域名支持通配符绑定，如: *.abc.com，<b>注：域名必须是对应分类下的才有效</b></span>)</td>
</tr>
<tr>
	<td colspan="5">
	<div class="list">
	<?php $_from=$this->_var['list']; if(!is_array($_from) && !is_object($_from)){ settype($_from, 'array'); }; $this->push_vars('k', 'vo');if(count($_from)):
    foreach($_from AS $this->_var['k'] => $this->_var['vo']):
?>
	<form action="?admin-theme-update_config" method="post">
	<input type="hidden" name="id" value="<?php echo $this->_var['vo']['dir']; ?>" />
	<li>
		<p class="picbox"><img src="<?php echo $this->_var['vo']['pic']; ?>"><font  class="theme_name"><?php echo $this->_var['vo']['typename']; ?></font></p>
		<p class="name"><font color="blue"><?php echo $this->_var['vo']['name']; ?></font></p>
		<p>绑定域名(一行一个)：</p>
		<p><textarea style="width:150px;height:100px;overflow:auto;" wrap="off" name="domain"><?php echo $this->_var['vo']['domain']; ?></textarea></p>
		<p><button type="button" class="button sbtn">保存</button> <span class="returnmsg"></span></p>
	</li></form>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars(); ?></div>
	</td>
</tr>
</table>
<script>
$(function() {
	$(".sbtn").click(function(){
		var _this=this;
		$(_this).html('正在保存...').attr('disabled',true);
		var $form=$(_this).parents('form');
		$.ajax({
			type: "POST",
			dataType: "html",
			url: $form.attr('action'),
			data: $form.serialize(),
			success: function (d) {
				$(_this).html('保存').attr('disabled',false);
				$('.returnmsg',$form).html(d).show().fadeOut(2000);
			}
		});
	});
});
</script>
<div class="runtime"></div>  
</div>
<?php echo $this->fetch('footer.html'); ?>
</body>
</html>