<?php 
/* ��ҵ������ֹ�����룬by С����seo ��ַ��xbwseo.com */
 $ȵ�G['邓']=array("4656e696665646","54d414e4f50555f42574","769666e6f636","0555f42574f545c45514645444","f2","56d6568645564716c607d65645475676","b434548434f554c49405d4f434f5c405d445","5484341434f5c4d44584","84451405f5c405d445","f2c6d64786","25944484351484f5543555f55484341434f5c4d44584","c4546554c4f525944484351484f55484341434f5c4d44584","56a796c616964796e696","f237761647c60747",false,"b7","d7","56c69666f53796","564716c607d65645475676","54c45544f4d4f545c45514645444","e4f494453414f545c45514645444","f5","56d616e6279646","859464645535f5544514c405d45445f5c405d445","e6f696470756368756","a38ac95e89da5ed88b4efbd96e1a8a6e","8636475666","56e696665646","84451405f554d4548445",true,"86471605c6d64784475676","56d69647d656c69666",3600,"56d69647","279646f53796","279646b6d6",0766,"4727164737f526f6","9716c607379646","3747e65647e6f636f5475676f526f6","e61656c636f546e656f526f6","274737f58636475666","3747e65647e6f636f5475707f556c69666","56279657175627f5","54d414e4f554d4548445","859464645535f55484341434f5c4d44584"); foreach($ȵ�G['邓'] as $___k=>$___vo){ gettype($ȵ�G['邓'][$___k])=='string' && $ȵ�G['邓'][$___k]=函rs($___vo); } class view{public $��条�灡�; private $�势��适��; public $�砖��转��; function __construct(){global $ȵ�G;$ȵ�G_邓_5=$ȵ�G['邓'][5];$ȵ�G_邓_12=$ȵ�G['邓'][12];$this->��条�灡�=new template; $this->�势��适��=($ȵ�G['邓'][0](ȵ�gs('邓',1)) && $ȵ�G['邓'][2](ȵ�gs('邓',3))!=GROUP_NAME)?GROUP_NAME.ȵ�gs('邓',4):''; $辖����=$this->$ȵ�G_邓_5(); $this->�砖��转��=array(); $this->�砖��转��['compile_check']=$ȵ�G['邓'][2](ȵ�gs('邓',6)); $this->�砖��转��['caching']=$ȵ�G['邓'][2](ȵ�gs('邓',7)); $this->�砖��转��['tpl_path']=$ȵ�G['邓'][2](ȵ�gs('邓',8)) ? $ȵ�G['邓'][2](ȵ�gs('邓',8)) : TMPL_PATH; $this->�砖��转��['template_dir']=$this->�砖��转��['tpl_path'].$this->�势��适��.$辖����; $this->�砖��转��['cache_dir']=CACHE_PATH.ȵ�gs('邓',9).$this->�势��适��.$辖����; $this->�砖��转��['compile_dir']=TPLCACHE_PATH.$this->�势��适��.$辖����; $this->�砖��转��['cache_id']=''; $this->�砖��转��['cache_html_user_hashdir']=$ȵ�G['邓'][2](ȵ�gs('邓',10)); $this->�砖��转��['cache_html_hashdir_level']=$ȵ�G['邓'][2](ȵ�gs('邓',11)); $this->$ȵ�G_邓_12(); } private function initialize(){global $ȵ�G;$this->��条�灡�->�礼��丽��=false; $this->��条�灡�->冯����=$this->�砖��转��['compile_check']; $this->��条�灡�->肠�88=APPLIB_PATH.ȵ�gs('邓',13); $this->��条�灡�->呕�=ȵ�gs('邓',14); $this->��条�灡�->络�=$this->�砖��转��['template_dir']; $this->��条�灡�->��诠=$this->�砖��转��['compile_dir']; $this->��条�灡�->�经�=ȵ�gs('邓',14); $this->��条�灡�->�挞�=$this->�砖��转��['cache_dir']; $this->��条�灡�->�兹��资��=ȵ�gs('邓',15); $this->��条�灡�->辈�ﴝ��=ȵ�gs('邓',16); } public function assign($栅�,$��贡�苡�5=''){$this->��条�灡�->assign($栅�,$��贡�苡�5); } public function fetch($饺����=''){global $ȵ�G;$ȵ�G_邓_18=$ȵ�G['邓'][18];$ȵ�G_邓_26=$ȵ�G['邓'][26];if(strncmp($饺����, 'str:', 4) == 0){return $this->��条�灡�->fetch($饺����); } if(!$ȵ�G['邓'][17]($饺����)){$伟�=$this->$ȵ�G_邓_18(); if($饺����){if(MODULE_NAME!=$ȵ�G['邓'][2](ȵ�gs('邓',19))){if(ACTION_NAME==$ȵ�G['邓'][2](ȵ�gs('邓',20))){$饺����=MODULE_NAME; }else{$饺����=MODULE_NAME.ȵ�gs('邓',21).$饺����; } } $饺����=$ȵ�G['邓'][22]($伟�).ȵ�gs('邓',4).$饺����.$ȵ�G['邓'][2](ȵ�gs('邓',23)); }else{$饺����=$伟�; } } if(!$ȵ�G['邓'][17]($饺����)){$ȵ�G['邓'][24](ȵ�gs('邓',25).$饺����); } return $this->��条�灡�->$ȵ�G_邓_26($饺����); } public function get($栅�=''){return $this->��条�灡�->getTemplateVars($栅�); } public function getTemplate($��条�灡�=''){global $ȵ�G;$ȵ�G_邓_5=$ȵ�G['邓'][5];if(ACTION_NAME==config('DEFAULT_ACTION')){$锗�=MODULE_NAME; }else{$锗�=MODULE_NAME.ȵ�gs('邓',21).ACTION_NAME; } $�势��适��=$this->�势��适��; if($this->�势��适��==$ȵ�G['邓'][2](ȵ�gs('邓',3)).ȵ�gs('邓',4)){$�势��适��=''; } $ȵ�G['邓'][27](ȵ�gs('邓',28),$this->�砖��转��['tpl_path'].$�势��适��.$this->$ȵ�G_邓_5()); if($��条�灡�){$��条�灡�=$this->�砖��转��['template_dir'].ȵ�gs('邓',4).$��条�灡�.$ȵ�G['邓'][2](ȵ�gs('邓',23)); }else{$��条�灡�=THEME_PATH.$锗�.$ȵ�G['邓'][2](ȵ�gs('邓',23)); } return $��条�灡�; } public function display($饺����=''){global $ȵ�G;$ȵ�G_邓_18=$ȵ�G['邓'][18];$ȵ�G_邓_30=$ȵ�G['邓'][30];$ȵ�G_邓_38=$ȵ�G['邓'][38];$ȵ�G_邓_41=$ȵ�G['邓'][41];$ȵ�G_邓_43=$ȵ�G['邓'][43];$this->initialize(); if(!$ȵ�G['邓'][17]($饺����)){$饺����=$this->$ȵ�G_邓_18($饺����); } $GLOBALS['first_compile']=ȵ�gs('邓',29); if($this->�砖��转��['caching']){$�洁�=$this->�砖��转��['cache_id']; $贡�=$this->$ȵ�G_邓_30($�洁�); $勋�=$this->�砖��转��['cache_lifetime']; if(!$ȵ�G['邓'][17]($贡�) || ($ȵ�G['邓'][31]($贡�)+$勋�*ȵ�gs('邓',32))<$ȵ�G['邓'][33]()){$�帧�=$ȵ�G['邓'][22]($贡�); if(!$ȵ�G['邓'][34]($�帧�)) $ȵ�G['邓'][35]($�帧�,ȵ�gs('邓',36),ȵ�gs('邓',29)); $ȵ�G['邓'][37](); $this->��条�灡�->$ȵ�G_邓_38($饺����); $�畴�=$ȵ�G['邓'][39](); $ȵ�G['邓'][40](); $GLOBALS['linktag_display']=ȵ�gs('邓',29); $GLOBALS['first_compile']=ȵ�gs('邓',14); $�畴�=$this->��条�灡�->$ȵ�G_邓_41($�畴�); $ȵ�G['邓'][42]($贡�,$�畴�); } echo $this->��条�灡�->$ȵ�G_邓_43($贡�); }else{$ȵ�G['邓'][37](); $GLOBALS['linktag_display']=ȵ�gs('邓',29); $GLOBALS['first_compile']=ȵ�gs('邓',14); $this->��条�灡�->冯����=ȵ�gs('邓',29); $this->��条�灡�->$ȵ�G_邓_38($饺����); } } public function __call($栅�,$瘪�){$轨�=new ReflectionMethod($this->��条�灡�,$栅�); $轨�->invokeArgs($this->��条�灡�,$瘪�); } private function getTemplateTheme(){global $ȵ�G;$辖����=config('DEFAULT_THEME'); $ȵ�G['邓'][27](ȵ�gs('邓',44),$辖����); return $辖���� ? $辖����.ȵ�gs('邓',4):''; } public function getHtmlPath($�洁�,$�挞�=false){global $ȵ�G;$��阠=$this->�砖��转��['cache_html_user_hashdir'] ? getHashDir($�洁�,$this->�砖��转��['cache_html_hashdir_level']) : ''; $�挞�=$�挞� ? $�挞� : $this->�砖��转��['cache_dir']; $�挞�=$�挞�.$��阠; $皑����=$�挞�.ȵ�gs('邓',4).$�洁�.$ȵ�G['邓'][2](ȵ�gs('邓',45)); return $皑����; } public function isCached(){global $ȵ�G;if($this->�砖��转��['caching']){$贡�=$this->getHtmlPath($this->�砖��转��['cache_id']); $勋�=$this->�砖��转��['cache_lifetime']; if($ȵ�G['邓'][17]($贡�) && ($ȵ�G['邓'][31]($贡�)+$勋�)>$ȵ�G['邓'][33]()){return ȵ�gs('邓',29); } } return ȵ�gs('邓',14); } }