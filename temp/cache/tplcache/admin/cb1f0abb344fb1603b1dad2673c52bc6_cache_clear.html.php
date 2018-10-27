<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php echo $this->fetch('header.html'); ?>
<body class="body-main">

<ul id="admin_sub_title">
	<li class="unsub"><a href="<?php echo url('admin/cache/index'); ?>">缓存设置</a></li>
	<li class="sub"><a href="javascript:void(0)">清除缓存</a></li>
	<li class="unsub"><a href="<?php echo url('admin/cache/clearzd'); ?>" style="color:red">清除指定缓存</a></li>
</ul>

<div id="admin_right_b">

  <table border="0" style="width:100%" align="center" cellpadding="3" cellspacing="1" class="table_b">

	<tr align='center'>
	  <td class="title_bg" width="600">缓存说明</td>
      <td class="title_bg" width="120">缓存大小</td>
      <td width="100" class="title_bg">操作</td>
	  <td class="title_bg">&nbsp;</td>
    </tr>
	<tr class="tdbg item_title">
		<td colspan="4"><i class="typcn typcn-cog"></i> 核心缓存</td>
	</tr>
	<tr class="tdbg">
		<td style="padding-left:20px">模板编译缓存 (<span>修改模板后，需要清除模板缓存才能生效</span>)</td>
		<td align='center'><font color='green'><?php echo $this->_var['compile_cache']; ?> MB</font></td>
		<td align='center' id="compile"><button type="button" class="button" onClick="delcache('compile');">清除缓存</button></td>
		<td>&nbsp;</td>
	</tr>
	<tr class="tdbg">
		<td style="padding-left:20px">域名模板缓存 (<span>清除后未绑定模板的域名对应的模板可能会改变</span>)</td>
		<td align='center'><a id="c_theme" onclick="checkcache('theme');" style="cursor:pointer">点击获取</a></td>
		<td align='center' id="theme"><button type="button" class="button" onClick="delcache('theme');">清除缓存</button></td>
		<td>&nbsp;</td>
	</tr>
	<tr class="tdbg">
		<td style="padding-left:20px">文件索引缓存 (<span>前台出现内容空白可清除此缓存</span>)</td>
		<td align='center'><a id="c_filelist" onclick="checkcache('filelist');" style="cursor:pointer">点击获取</a></td>
		<td align='center' id="filelist"><button type="button" class="button" onClick="delcache('filelist');">清除缓存</button></td>
		<td>&nbsp;</td>
	</tr>
	<tr class="tdbg">
		<td style="padding-left:20px">自动采集缓存 (<span>自动采集出现问题可清除此缓存</span>)</td>
		<td align='center'><a id="c_collect_auto" onclick="checkcache('collect_auto');" style="cursor:pointer">点击获取</a></td>
		<td align='center' id="collect_auto"><button type="button" class="button" onClick="delcache('collect_auto');">清除缓存</button></td>
		<td>&nbsp;</td>
	</tr>
	<tr class="tdbg">
		<td style="padding-left:20px">外链缓存 (<span>外链调用的缓存，清除可更新外链，路径：./temp/cache/tags/loop_link</span>)</td>
		<td align='center'><a id="c_link" onclick="checkcache('link');" style="cursor:pointer">点击获取</a></td>
		<td align='center' id="link"><button type="button" class="button" onClick="delcache('link');">清除缓存</button></td>
		<td>&nbsp;</td>
	</tr>
	<tr class="tdbg">
		<td style="padding-left:20px">tkd等缓存 (<span>标题、keywords、description等缓存，路径：./temp/cache/tags/tkd</span>)</td>
		<td align='center'><a id="c_tkd" onclick="checkcache('tkd');" style="cursor:pointer">点击获取</a></td>
		<td align='center' id="tkd"><button type="button" class="button" onClick="delcache('tkd');">清除缓存</button></td>
		<td>&nbsp;</td>
	</tr>
	<tr class="tdbg">
		<td style="padding-left:20px">蜘蛛访问记录</td>
		<td align='center'><a id="c_robotlog" onclick="checkcache('robotlog');" style="cursor:pointer">点击获取</a></td>
		<td align='center' id="robotlog"><button type="button" class="button" onClick="delcache('robotlog');">清除缓存</button></td>
		<td>&nbsp;</td>
	</tr>
	<tr class="tdbg">
		<td style="padding-left:20px">其他系统缓存</td>
		<td align='center'><a id="c_tempcache" onclick="checkcache('tempcache');" style="cursor:pointer">点击获取</a></td>
		<td align='center' id="tempcache"><button type="button" class="button" onClick="delcache('tempcache');">清除缓存</button></td>
		<td>&nbsp;</td>
	</tr>
	<tr class="tdbg item_title">
		<td colspan="4"><i class="typcn typcn-cog"></i> 内置模板静态缓存</td>
	</tr>
	<tr class="tdbg">
		<td style="padding-left:20px">首页静态缓存 (<span>路径：./temp/cache/html/index</span>)</td>
		<td align='center'><a id="c_tpl_index" onclick="checkcache('tpl_index');" style="cursor:pointer">点击获取</a></td>
		<td align='center' id="tpl_index"><button type="button" class="button" onClick="delcache('tpl_index');">清除缓存</button></td>
		<td>&nbsp;</td>
	</tr>
	<tr class="tdbg">
		<td style="padding-left:20px">列表页静态缓存 (<span>路径：./temp/cache/html/list</span>)</td>
		<td align='center'><a id="c_tpl_list" onclick="checkcache('tpl_list');" style="cursor:pointer">点击获取</a></td>
		<td align='center' id="tpl_list"><button type="button" class="button" onClick="delcache('tpl_list');">清除缓存</button></td>
		<td>&nbsp;</td>
	</tr>
	<tr class="tdbg">
		<td style="padding-left:20px">内容页静态缓存 (<span>路径：./temp/cache/html/show</span>)</td>
		<td align='center'><a id="c_tpl_show" onclick="checkcache('tpl_show');" style="cursor:pointer">点击获取</a></td>
		<td align='center' id="tpl_show"><button type="button" class="button" onClick="delcache('tpl_show');">清除缓存</button></td>
		<td>&nbsp;</td>
	</tr>
	<tr class="tdbg">
		<td style="padding-left:20px">其他页静态缓存 (<span>路径：./temp/cache/html/other</span>)</td>
		<td align='center'><a id="c_other" onclick="checkcache('other');" style="cursor:pointer">点击获取</a></td>
		<td align='center' id="other"><button type="button" class="button" onClick="delcache('other');">清除缓存</button></td>
		<td>&nbsp;</td>
	</tr>
	<!-- <tr class="tdbg item_title">
		<td colspan="4"><i class="typcn typcn-cog"></i> 自定义模板静态缓存</td>
	</tr>
	<?php $_from=$this->_var['list']; if(!is_array($_from) && !is_object($_from)){ settype($_from, 'array'); }; $this->push_vars('k', 'vo');if(count($_from)):
    foreach($_from AS $this->_var['k'] => $this->_var['vo']):
?>
	<tr class="tdbg">
		<td style="padding-left:20px"><?php echo $this->_var['k']; ?>页静态缓存</td>
		<td align='center'><a id="c_tpl_<?php echo $this->_var['k']; ?>" onclick="checkcache('tpl_<?php echo $this->_var['k']; ?>');" style="cursor:pointer">点击获取</a></td>
		<td align='center' id="tpl_<?php echo $this->_var['k']; ?>"><button type="button" class="button" onClick="delcache('tpl_<?php echo $this->_var['k']; ?>');">清除缓存</button></td>
		<td>&nbsp;</td>
	</tr>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars(); ?> -->

	<tr class="tdbg item_title">
		<td colspan="4"><i class="typcn typcn-cog"></i> 全部缓存</td>
	</tr>
	
	<tr class="tdbg">
		<td style="padding-left:20px">所有静态缓存 (<span>所有页面静态缓存，路径：./temp/cache/html</span>)</td>
		<td align='center'><a id="c_html" onclick="checkcache('html');" style="cursor:pointer">点击获取</a></td>
		<td align='center' id="html"><button type="button" class="button" onClick="delcache('html');">清除缓存</button></td>
		<td>&nbsp;</td>
	</tr>
	<tr class="tdbg">
		<td style="padding-left:20px">所有缓存</td>
		<td align='center'><a id="c_all" onclick="checkcache('all');" style="cursor:pointer">点击获取</a></td>
		<td align='center' id="all"><button type="button" class="button button_remove" onClick="delcache('all');">清除缓存</button></td>
		<td>&nbsp;</td>
	</tr>
  </table>
<script type="text/javascript">
function delcache(dir){
	$('#'+dir).html("<img src='static/images/load_blue.gif'>");
	$.ajax({
	   type: "POST",
	   url: "<?php echo url('admin/cache/del'); ?>",
	   dataType: "json",
	   data: "action=del&file="+dir,
	   success: function(a){
		   if(a.status==1){
				$('#'+dir).html("<font color='green'>清除成功</font>");
		   }else{
				$('#'+dir).html("<font color='red'>"+a.info+"</font>");
		   }
	   }
	});
}
function checkcache(dir){
	$('#c_'+dir).html("<img src='static/images/load_blue.gif'>");
	$.ajax({
	   type: "POST",
	   url: "<?php echo url('admin/cache/del'); ?>",
	   dataType: "json",
	   data: "action=checksize&file="+dir,
	   success: function(a){
		   if(a.status==1){
				$('#c_'+dir).html("<font color='green'>"+a.size+"</font>");
		   }else{
				$('#c_'+dir).html("<font color='red'>"+a.info+"</font>");
		   }
	   }
	});
}
</script>
<div class="runtime"></div>  
</div>
<?php echo $this->fetch('footer.html'); ?>
</body>
</html>