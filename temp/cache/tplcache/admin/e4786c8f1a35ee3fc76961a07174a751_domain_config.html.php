<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php echo $this->fetch('header.html'); ?>
<body class="body-main">
<ul id="admin_sub_title">
	<li class="sub"><a href="javascript:void(0)" onClick="selectTab('config0',this)">基本设置</a></li>
	<li class="unsub"><a href="javascript:void(0)" onClick="selectTab('config1',this)">内容优化</a></li>
	<li class="unsub"><a href="javascript:void(0)" onClick="selectTab('config2',this)">伪原创设置</a></li>
</ul>
<div id="admin_right_b">
<script>
$(function() {
});
</script>
<form method="post" action="<?php echo url('admin/config/update'); ?>" enctype="multipart/form-data">
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="0" id="config0" class="tableConfig">
	<tbody>
		<tr class="tdbg item_title">
			<td width="150" align="right"><i class="typcn typcn-cog"></i> 基本设置</td>
			<td></td>
		</tr>
		<tr class="tdbg">
		  <td align="right" class="config_td_first">文章发布时间：</td>
		  <td><select name="con[addtime_type]">
			<option value="1" <?php if(!$this->_var['addtime_type']||$this->_var['addtime_type'] == '1'): ?> selected="selected"<?php endif; ?>>内置时间</option>
			<option value="2" <?php if($this->_var['addtime_type'] == '2'): ?> selected="selected"<?php endif; ?>>当前时间</option>
		  </select></td>
		</tr>

		<tr class="tdbg">
		  <td align="right" class="config_td_first">企业名称自动生成：</td>
		  <td><label><input type="radio" name="con[auto_make_webname]" value="1" <?php if($this->_var['auto_make_webname']): ?> checked<?php endif; ?>>开启</label>
				<label><input type="radio" name="con[auto_make_webname]" value="0" <?php if(! $this->_var['auto_make_webname']): ?> checked<?php endif; ?>>关闭</label>　<span>仅限企业模型</span></td>
		</tr>

		<tr class="tdbg item_title">
			<td width="150" align="right"><i class="typcn typcn-cog"></i> 站点互链设置</td>
			<td></td>
		</tr>
		<tr class="tdbg">
		  <td align="right" class="config_td_first">站点互链开关：</td>
		  <td><label><input type="radio" name="con[hulian]" value="1" <?php if($this->_var['hulian']): ?> checked<?php endif; ?>>开启</label>
				<label><input type="radio" name="con[hulian]" value="0" <?php if(! $this->_var['hulian']): ?> checked<?php endif; ?>>关闭</label>　<span>是否开启站点互链</span></td>
		</tr>
		<tr class="tdbg">
		  <td align="right" class="config_td_first">站点互链条数：</td>
		  <td class="tdbg"><input name="con[domain_default_num]" type="text" class="input" value="<?php echo empty($this->_var['domain_default_num']) ? '10' : $this->_var['domain_default_num']; ?>" size="10"></td>
		</tr>
		<tr>
			<td align="right" class="config_td_first">选择网站分组：</td>
			<td><input type="hidden" name="con[hulian_group]" id="hulian_group_value" value="<?php echo $this->_var['hulian_group']; ?>" /><font id="hulian_group_items" color="#ff6600"><?php if(! $this->_var['hulian_group_name']): ?>未选择<?php else: ?><?php echo $this->_var['hulian_group_name']; ?><?php endif; ?></font>&nbsp;&nbsp;<a href="javascript:" class="button button_small" onclick="select_group('hulian');">点击选择</a> <span class="tips" style="color:red"><i class="typcn typcn-info"></i>选择开启此功能的网站分组</span></td>
		</tr>
		<tr class="tdbg">
		  <td align="right" class="config_td_first">互链URL类型：</td>
		  <td><select name="con[flink_mod]">
			<option value="1" <?php if(!$this->_var['flink_mod']||$this->_var['flink_mod'] == '1'): ?> selected="selected"<?php endif; ?>>首页URL</option>
			<option value="2" <?php if($this->_var['flink_mod'] == '2'): ?> selected="selected"<?php endif; ?>>内页URL</option>
		  </select>&nbsp;&nbsp;</td>
		</tr>
		<tr class="tdbg">
		  <td align="right" class="config_td_first">互链描文本：</td>
		  <td class="tdbg"><select name="con[domain_title]" onchange="domain_title(this.value);">
					<option value="title" <?php if(!$this->_var['domain_title']||$this->_var['domain_title'] == 'title'): ?> selected="selected"<?php endif; ?>>标题库</option>
					<option value="keywords" <?php if($this->_var['domain_title'] == 'keywords'): ?> selected="selected"<?php endif; ?>>关键词库</option>
					<option value="txt" <?php if($this->_var['domain_title'] == 'txt'): ?> selected="selected"<?php endif; ?>>指定txt文件</option>
				  </select>
		  <span class="tips">默认使用标题库</span>
		  </td>
		</tr>
		<tr class="tdbg">
		  <td align="right" class="config_td_first">描文本指定文件：</td>
		  <td class="tdbg"><input id="domain_title_txt" name="con[domain_title_txt]" type="text" class="input" value="<?php echo $this->_var['domain_title_txt']; ?>" size="50">
		  <span class="tips">输入文件路径，如： /temp/data/domain_title.txt</span>
		  </td>
		</tr>
		<script type="text/javascript">
		function domain_title(s){
			if(s=='txt'){
				lockinput('#domain_title_txt',0);
			}else{
				lockinput('#domain_title_txt',1);
			}
		}
		<?php if($this->_var['domain_title'] != 'txt'): ?> lockinput('#domain_title_txt',1); <?php endif; ?>
		</script>
	</tbody>
</table>
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="0" id="config1" style="display:none" class="tableConfig">
	<tbody>
		<tr class="tdbg item_title">
			<td width="150" align="right"><i class="typcn typcn-cog"></i> 内容优化设置</td>
			<td></td>
		</tr>
		<tr>
			<td align="right" class="config_td_first">选择网站分组：</td>
			<td><input type="hidden" name="con[reform_group]" id="reform_group_value" value="<?php echo $this->_var['reform_group']; ?>" /><font id="reform_group_items" color="#ff6600"><?php if(! $this->_var['reform_group_name']): ?>未选择<?php else: ?><?php echo $this->_var['reform_group_name']; ?><?php endif; ?></font>&nbsp;&nbsp;<a href="javascript:" class="button button_small" onclick="select_group('reform');">点击选择</a> <span class="tips" style="color:red"><i class="typcn typcn-info"></i>选择开启此功能的网站分组</span></td>
		</tr>
		<tr class="tdbg">
		  <td align="right" class="config_td_first">标题重组方式：</td>
		  <td>
				<label><input type="radio" name="con[reform_title]" value="0" <?php if(! $this->_var['reform_title']): ?> checked<?php endif; ?>>默认</label>
				<label><input type="radio" name="con[reform_title]" value="1" <?php if($this->_var['reform_title'] == 1): ?> checked<?php endif; ?>>打散重组</label>
				<label><input type="radio" name="con[reform_title]" value="2" <?php if($this->_var['reform_title'] == 2): ?> checked<?php endif; ?>>2个标题重组</label>
				<label><input type="radio" name="con[reform_title]" value="3" <?php if($this->_var['reform_title'] == 3): ?> checked<?php endif; ?>>内容取一句话作为标题</label>
				<label><input type="radio" name="con[reform_title]" value="4" <?php if($this->_var['reform_title'] == 4): ?> checked<?php endif; ?>>内容取一句话加在标题后面</label>　<span>标题是否重组方式</span></td>
		</tr>
		<tr class="tdbg">
		  <td align="right" class="config_td_first">打散基数：</td>
		  <td class="tdbg"><input name="con[reform_title_base]" type="text" class="input" value="<?php echo empty($this->_var['reform_title_base']) ? '2' : $this->_var['reform_title_base']; ?>" size="10"> <span>范围2-5，越小越乱</span></td>
		</tr>
		<tr class="tdbg">
		  <td align="right" class="config_td_first">内容句子打乱：</td>
		  <td><label><input type="radio" name="con[shuffle_content]" value="1" <?php if($this->_var['shuffle_content']): ?> checked<?php endif; ?>>开启</label>
				<label><input type="radio" name="con[shuffle_content]" value="0" <?php if(! $this->_var['shuffle_content']): ?> checked<?php endif; ?>>关闭</label>　<span>内容句子打乱重组</span></td>
		</tr>
		<tr class="tdbg">
		  <td align="right" class="config_td_first">内容关联标题：</td>
		  <td><label><input type="radio" name="con[insert_title2content]" value="1" <?php if($this->_var['insert_title2content'] || $this->_var['insert_title2content'] == null): ?> checked<?php endif; ?>>开启</label>
				<label><input type="radio" name="con[insert_title2content]" value="0" <?php if($this->_var['insert_title2content'] == '0'): ?> checked<?php endif; ?>>关闭</label>　<span>标题分词分布插入内容，提升内容标题相关度</span></td>
		</tr>
	</tbody>
</table>
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="0" id="config2" style="display:none" class="tableConfig">

		<tr class="tdbg item_title">
			<td width="150" align="right"><i class="typcn typcn-cog"></i> 伪原创设置</td>
			<td></td>
		</tr>
		<tr>
			<td align="right" class="config_td_first">选择网站分组：</td>
			<td><input type="hidden" name="con[replace_group]" id="replace_group_value" value="<?php echo $this->_var['replace_group']; ?>" /><font id="replace_group_items" color="#ff6600"><?php if(! $this->_var['replace_group_name']): ?>未选择<?php else: ?><?php echo $this->_var['replace_group_name']; ?><?php endif; ?></font>&nbsp;&nbsp;<a href="javascript:" class="button button_small" onclick="select_group('replace');">点击选择</a> <span class="tips" style="color:red"><i class="typcn typcn-info"></i>选择开启此功能的网站分组</span></td>
		</tr>
		<tr class="tdbg">
		  <td align="right" class="config_td_first">标题伪原创：</td>
		  <td><label><input type="radio" name="con[replace_title]" value="1" <?php if($this->_var['replace_title']): ?> checked<?php endif; ?>>开启</label>
				<label><input type="radio" name="con[replace_title]" value="0" <?php if(! $this->_var['replace_title']): ?> checked<?php endif; ?>>关闭</label>　<span>标题是否伪原创词汇替换</span></td>
		</tr>
		<tr class="tdbg">
		  <td align="right" width="120" class="config_td_first">内容伪原创：</td>
		  <td><label><input type="radio" name="con[replace_content]" value="1" <?php if($this->_var['replace_content']): ?> checked<?php endif; ?>>开启</label>
				<label><input type="radio" name="con[replace_content]" value="0" <?php if(! $this->_var['replace_content']): ?> checked<?php endif; ?>>关闭</label>　<span>内容进行伪原创词汇替换</span></td>
		</tr>
		<tr>
			<td align="right" class="config_td_first">伪原创词汇：</td>
			<td><span class="c9">每行一对同义词，半角逗号分隔，1000个以内  如：开心,高兴</span><br><br>
			<textarea name="replaceword" class="inputs" style="width:350px;padding:1px;height:200px"><?php echo $this->_var['replaceword']; ?></textarea>
			</td>
		</tr>
</table>
	<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1">
    <tr class="tdbg">
	  <td width="150" align="center" class="tdbg">&nbsp;</td>
      <td><button type="submit" id="dosave" class="button">保存设置</button></td>
    </tr>
	</table>
	</form>
<div class="runtime"></div>  
</div>
<script id="group_list_scriptbox" type="text/px-templates">
<form method="post">
<table align="center" cellpadding="3" cellspacing="1" class="table_b">
<tr>
  <td width="50" align='center' class="title_bg">选择</td>
  <td width="120" align='center' class="title_bg">分组名称</td>
  <td width="120" align='center' class="title_bg">所属分类</td>
  <td width="150" class="title_bg">域名</td>
  <td width="70" align='center' class="title_bg">网站模式</td>
</tr>
<tbody id="group_list">
<tr bgcolor='#fff2d5'>
  <td align="center" height="25"><input type="checkbox" value="0" title="全部分组" onclick="select0(this);"  /></td>
  <td align="center" style="color:#ff3300">全部分组</td>
  <td colspan="3" style="color:#ff3300">&nbsp;&nbsp;勾选本项则全部分组都开启，不管是新添加的还是旧的</td>
 </tr>
<?php $_from=$this->_var['group_list']; if(!is_array($_from) && !is_object($_from)){ settype($_from, 'array'); }; $this->push_vars('', 'vo');if(count($_from)):
    foreach($_from AS $this->_var['vo']):
?>
	<tr onmouseover=this.bgColor='#EDF8FE'; onmouseout=this.bgColor='#ffffff'; bgcolor='#ffffff'>
	  <td align="center" height="25"><input type="checkbox" value="<?php echo $this->_var['vo']['id']; ?>" title="<?php echo $this->_var['vo']['name']; ?>"/></td>
	  <td align="center"><?php echo $this->_var['vo']['name']; ?></td>
	  <td align="center"><?php echo $this->_var['vo']['typename']; ?></td>
	  <td><?php echo $this->_var['vo']['domain']; ?></td>
	  <td align="center"><?php if($this->_var['vo']['domain_mod'] == 2): ?>单域名<?php else: ?>泛域名<?php endif; ?></td>
	 </tr>
	<?php endforeach; else: ?>
	<tr onmouseover=this.bgColor='#EDF8FE'; onmouseout=this.bgColor='#ffffff'; bgcolor='#ffffff'>
		<td align="center" colspan='5' height="25">请先添加网站分组！</td>
	</tr>
	<?php endif; unset($_from); ?><?php $this->pop_vars(); ?>
</tbody>
<tr bgcolor='#ffffff' style="border-top:1px solid #eee">
	<td colspan="5">
		<label><input name="chkall" type="checkbox" id="chkall" onclick=checkall(this.form) value="checkbox"> 全选/反选</label>
		<button type="button" class="button" onclick="select_ok();">确定选择</button>
	</td>
</tr>
</table>
</form>
</script>

<script type="text/javascript">
var dialog;
var body=$('#group_list_scriptbox').html();
var thistype='';
function select0(_this){
	if(_this.checked){
		$('#group_list input:checkbox').each(function(i) {
			if(0!=$(this).val()){
				$(this).attr('disabled',true);
				$(this).attr('checked',false);
			}
		});
		_this.checked=true;
    }else{
		$('#group_list input:checkbox').each(function(i) {
			if(0!=$(this).val()){
				$(this).attr('disabled',false);
			}
		});
		_this.checked=false;
	}
}
function select_group(type){
	thistype=type;
	var typevalue=$('#'+type+'_group_value').val();
	dialog=art.dialog({ 
		content:'<div id="group_list_box">'+body+'</div>',
		init: function(){
			console.log('-------------------'+typevalue);
			var select0=false;
			$('#group_list input:checkbox').each(function(i) {
				if(typevalue.indexOf($(this).val()+',')>-1 || typevalue.indexOf(','+$(this).val())>-1 || typevalue==$(this).val()){
					$(this).attr('checked',true);
					if($(this).val()==0){
						select0=true;
					}
				}
				if(select0 && $(this).val()!=0){
					$(this).attr('disabled',true);
				}
			});
		},
		lock:true,opacity:0.3,title:'选择开启此功能的网站分组',id:'rifrm'+type
	});
	dialog.show();
}
function select_ok(){
	var rb=new Array();
	var rbtitle=new Array();
	$('#group_list input:checkbox:checked').each(function(i) {
		rb[i]=$(this).val();
		rbtitle[i]=$(this).attr('title');
	});
	var rbvalue=rb.join(',');
	var rbtitles=rbtitle.join(',');
	if(rbvalue==''){
		rbtitles='未选择';
	}
	if(rbvalue=='0'){
		rbtitles='全部分组';
	}
	$('#'+thistype+'_group_items').html(rbtitles);
	$('#'+thistype+'_group_value').val(rbvalue);
	dialog.hide();
}
</script>
<?php echo $this->fetch('footer.html'); ?>
</body>
</html>