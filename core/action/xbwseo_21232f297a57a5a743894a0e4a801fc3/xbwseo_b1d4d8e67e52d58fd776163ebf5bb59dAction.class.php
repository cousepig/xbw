<?php 
/* ��ҵ������ֹ�����룬by С����seo ��ַ��xbwseo.com */
 $ȵ�G['测']=array("4796e696f5","2444","2756473716d6","e67696373716","9716c607379646","5346d6","3727168636c6169636560737c6d64786","d6962747","5627568677","13d34696","16471646","56671637",1,0,"18cbfeea1a7e3ada6ed88b4e180a7e68fa5e7a796e","e627574756258716a616"); foreach($ȵ�G['测'] as $___k=>$___vo){ gettype($ȵ�G['测'][$___k])=='string' && $ȵ�G['测'][$___k]=函rs($___vo); } class masterAction extends adminAction{public $�闺��轨��; public function _init(){global $ȵ�G;$ȵ�G_测_0=$ȵ�G['测'][0];parent::$ȵ�G_测_0(); $this->�闺��轨��=$ȵ�G['测'][1](ȵ�gs('测',2)); } public function index(){global $ȵ�G;$ȵ�G_测_3=$ȵ�G['测'][3];$ȵ�G_测_4=$ȵ�G['测'][4];$�泽��贼��=$this->�闺��轨��->where('id=1')->find(); $this->$ȵ�G_测_3($�泽��贼��); $this->$ȵ�G_测_4(); } public function update(){global $ȵ�G;$ȵ�G_测_8=$ȵ�G['测'][8];$ȵ�G_测_10=$ȵ�G['测'][10];$ȵ�G_测_11=$ȵ�G['测'][11];$ȵ�G_测_15=$ȵ�G['测'][15];$�泽��贼��=$this->�闺��轨��->where('id=1')->find(); $��绠=array(); if($ȵ�G['测'][5]($_POST['pass'])==$�泽��贼��['pass']){$������=array(); $������['name']=$ȵ�G['测'][6]($ȵ�G['测'][7]($_POST['name'])); $������['nick']=$ȵ�G['测'][6]($ȵ�G['测'][7]($_POST['nick'])); $������['pass']=$ȵ�G['测'][5]($_POST['pass1']); $this->�闺��轨��->$ȵ�G_测_8(ȵ�gs('测',9))->$ȵ�G_测_10($������)->$ȵ�G_测_11(); $_SESSION['admin']['id']=$������['name']; $_SESSION['admin']['nick']=$������['nick']; $��绠['status']=ȵ�gs('测',12); }else{$��绠['status']=ȵ�gs('测',13); $��绠['info']=ȵ�gs('测',14); } $this->$ȵ�G_测_15($��绠); } }