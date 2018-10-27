<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php echo $this->fetch('header.html'); ?>
<body class="body-main">
<ul id="admin_sub_title">
	<li class="sub"><a href="javascript:void(0)" onClick="selectTab('config0',this)">title模板</a></li>
	<li class="unsub"><a href="javascript:void(0)" onClick="selectTab('config1',this)">keywords模板</a></li>
	<li class="unsub"><a href="javascript:void(0)" onClick="selectTab('config2',this)">description模板</a></li>
	<li class="unsub"><a href="javascript:void(0)" onClick="selectTab('config3',this)">内容模板</a></li>
</ul>
<div id="admin_right_b">
<form method="post" action="?admin-arctype-update_tplrules-dir-<?php echo $this->_var['dirname']; ?>">
<table border="0" align="center" cellpadding="8" cellspacing="0" class="tableConfig" id="config0">
<tr>
	<td colspan="2">
		<font style="color:#cc0000;line-height:25px;">
			<p>支持使用模板标签，如：文章标题->{<a></a>$title}、网站名称->{<a></a>$web_name} 等，参考模板标签指南</p>
			<p style="background:#FEFEE9;color:red;border:1px solid #ffcc00;padding:5px;">在前台模板文件中调用的标签为: {<a></a>$toptitle}</p>
		</font>
	</td>
</tr>
<tr class="headtr" align="center">
  <td width="50"><b>模板</b></td>
  <td><b>每行一条，系统将随机调用</b></td>
</tr>
<?php $_from=$this->_var['titletpls']; if(!is_array($_from) && !is_object($_from)){ settype($_from, 'array'); }; $this->push_vars('k', 'vo');if(count($_from)):
    foreach($_from AS $this->_var['k'] => $this->_var['vo']):
?>
<tr class="tdbg">
  <td><?php echo $this->_var['k']; ?></td>
  <td><textarea name="titletpl[<?php echo $this->_var['k']; ?>]" type="text" style="height:100px;width:400px;"><?php echo $this->_var['vo']; ?></textarea></td>
</tr>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars(); ?>
</table>
<table border="0" align="center" cellpadding="8" cellspacing="0" class="tableConfig" id="config1" style="display:none">
<tr>
	<td colspan="2">
		<font style="color:#cc0000;line-height:25px;">
			<p>支持使用模板标签，如：文章标题->{<a></a>$title}、网站名称->{<a></a>$web_name} 等，参考模板标签指南</p>
			<p style="background:#FEFEE9;color:red;border:1px solid #ffcc00;padding:5px;">在前台模板文件中调用的标签为: {<a></a>$keywords}</p>
		</font>
	</td>
</tr>
<tr class="headtr" align="center">
  <td width="50"><b>模板</b></td>
  <td><b>每行一条，系统将随机调用</b></td>
</tr>
<?php $_from=$this->_var['kwtpls']; if(!is_array($_from) && !is_object($_from)){ settype($_from, 'array'); }; $this->push_vars('k', 'vo');if(count($_from)):
    foreach($_from AS $this->_var['k'] => $this->_var['vo']):
?>
<tr class="tdbg">
  <td><?php echo $this->_var['k']; ?></td>
  <td><textarea name="kwtpl[<?php echo $this->_var['k']; ?>]" type="text" style="height:100px;width:400px;"><?php echo $this->_var['vo']; ?></textarea></td>
</tr>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars(); ?>
</table>
<table border="0" align="center" cellpadding="8" cellspacing="0" class="tableConfig" id="config2" style="display:none">
<tr>
	<td colspan="2">
		<font style="color:#cc0000;line-height:25px;">
			<p>模板标签，如：标题->{<a></a>$title}、网站名称->{<a></a>$web_name}、内容页第一段->{<a></a>$content} 等</p>
			<p>默认为：{<a></a>$content}、或者 {<a></a>$description}</p>
			<p style="background:#FEFEE9;color:red;border:1px solid #ffcc00;padding:5px;">在前台模板文件中调用的标签为: {<a></a>$description}</p>
		</font>
	</td>
</tr>
<tr class="headtr" align="center">
  <td width="50"><b>模板</b></td>
  <td><b>每行一条，系统将随机调用</b></td>
</tr>
<?php $_from=$this->_var['desctpls']; if(!is_array($_from) && !is_object($_from)){ settype($_from, 'array'); }; $this->push_vars('k', 'vo');if(count($_from)):
    foreach($_from AS $this->_var['k'] => $this->_var['vo']):
?>
<tr class="tdbg">
  <td><?php echo $this->_var['k']; ?></td>
  <td><textarea name="desctpl[<?php echo $this->_var['k']; ?>]" type="text" style="height:100px;width:400px;"><?php echo $this->_var['vo']; ?></textarea></td>
</tr>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars(); ?>
</table>
<table border="0" align="center" cellpadding="8" cellspacing="0" class="tableConfig" id="config3" style="display:none">
<tbody id="bodyconf">
<tr>
	<td colspan=3>
		<font style="color:#cc0000;line-height:25px;">
			<p>系统将随机调用，仅用于内容页show.html </p>
			<p>模板标签，如：内容句子1至20条：{<a></a>$content}...{<a></a>$content20}、图片地址：{<a></a>$pic1}...{<a></a>$pic20}<br>视频地址：{<a></a>$video1}...{<a></a>$video20}、随机关键词{<a></a>$randkws}等</p>
			<p style="blue">整篇文章库的调用标签为：{<a></a>$allbody}，如果设置了此标签，标题将自动从内容中获取</p>
			<p style="background:#FEFEE9;color:red;border:1px solid #ffcc00;padding:5px;">在前台模板文件show.html中调用的标签为: {<a></a>$body}</p>
		</font>
	</td>
</tr>
<?php if($this->_var['bodytpls']): ?>
<?php $_from=$this->_var['bodytpls']; if(!is_array($_from) && !is_object($_from)){ settype($_from, 'array'); }; $this->push_vars('k', 'vo');if(count($_from)):
    foreach($_from AS $this->_var['k'] => $this->_var['vo']):
?>
<tr  class="item<?php echo $this->_var['k']; ?>" itemid="<?php echo $this->_var['k']; ?>">
	<td><?php echo $this->_var['k']; ?>.</td>
	<td><textarea name="bodytpls[]" type="text" style="height:80px;width:400px;"><?php echo $this->_var['vo']; ?></textarea></td>
	<td><a href="javascript:" onclick="deltr(this);">删除</a></td>
</tr>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars(); ?>
<?php endif; ?>
</tbody>
<tr>
  <td width='20'>id</td>
  <td width='620'><textarea name="bodytpls[]" type="text" style="height:80px;width:400px;"></textarea></td>
  <td><button type="button" id="add" class="button">+增加</button></td>
</tr>
</table>
<table border="0" align="center" cellpadding="8" cellspacing="0" class="tableConfig">
<tr>
	<td colspan=3><button type="submit" class="button">保存设置</button></td>
</tr>
</table>
</form>
<div class="runtime"></div>  
</div>
<script type="text/javascript">
function deltr(elem){
	var itemid=$(elem).parents('tr').attr('itemid');
	$(elem).parents(".item"+itemid).fadeOut(300,function(){ this.remove() });
}
$("#add").click(function(){
	var id = $("#bodyconf tr").prevAll("tr").length+1;
	var input='<tr class="item'+id+'" itemid="'+id+'">';
	input+='<td>'+id+'.</td><td><textarea name="bodytpls[]" type="text" style="height:80px;width:400px;"></textarea></td>';
	input+='<td><a href="javascript:" onclick="deltr(this);">删除</a></td></tr>';
	$("#bodyconf").append(input);
});
</script>
</body>
</html>