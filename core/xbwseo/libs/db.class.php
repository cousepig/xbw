<?php 
/* ��ҵ������ֹ�����룬by С����seo ��ַ��xbwseo.com */
 $ȵ�G['岛']=array("473657274737e6f636f5f5",false,"473656e6e6f636","2646473656c65637","56c6261647","275677f6c6f647274737","9716272716f5e696","56c626164786371686","5627568677","564756c65646","e6f6964707f4271656c636","473656c65637",1,0,"47e657f636","47e657f636f556c6261647","46e69666","564716460757","18cbfeab9a7eab8b4eead86e0b596e","375657c61667","47275637e696","4696f547275637e696f5473716c6","473656a626f6f53796","37271667f5473656a626f6f5475676","9716272716f53796","18cbfe1a1b8e9bfa5eead86e0b596e593b6ee9d99e","76e696274737f53796","274737f55637271607","e6f696470756368756","3746c6569664475676","0716d6f59716272716","d6962747","5646f6c6078756","02","2756070757f647274737","563616c607562796f5274737","0254b494c402","0254b494c40245f4e402","02e49402","02e4940245f4e402","02e7d302","02e71202","02f302","02f31202","36962756d657e6f53796",50,"6647e696270737","5752","2333362736","c6166747e696","46f6d666","f2","4495d4e2","56c69666f53796","5647962777","d7b7a303a316","3747e65647e6f636f5475676f556c69666","e792d7c5b2d5d7c5e5b5b7c5a3b246c5a31682b3b246c5a396e7","a396","b3","b7a313a316","d7","56079747475676","56a796c61696275637e657","9716272716","a316","b7a3","5646f6c607d696"); foreach($ȵ�G['岛'] as $___k=>$___vo){ gettype($ȵ�G['岛'][$___k])=='string' && $ȵ�G['岛'][$___k]=函rs($___vo); } class db extends txtSQL{public $�砖��转��; public $�泽��贼��; public function __construct($�咙�76='',$奥�='',$��盠){global $ȵ�G;$ȵ�G_岛_0=$ȵ�G['岛'][0];$ȵ�G_岛_2=$ȵ�G['岛'][2];$ȵ�G_岛_3=$ȵ�G['岛'][3];$ȵ�G_岛_4=$ȵ�G['岛'][4];parent::$ȵ�G_岛_0(); $this->�砖��转��=array(); $this->�泽��贼��=array(); $this->_LIBPATH=$�咙�76; $this->_STRICT=ȵ�gs('岛',1); $this->$ȵ�G_岛_2(); $this->$ȵ�G_岛_3($奥�); $this->$ȵ�G_岛_4($ȵ�G['岛'][5]($��盠)); return $this; } public function nocache(){$this->emptyCache(); } private function clearOption(){global $ȵ�G;$this->�泽��贼��=array(); foreach($this->�砖��转�� as $��觠=>$��诡�硡�){if(!$ȵ�G['岛'][6]($��觠,array(ȵ�gs('岛',4),ȵ�gs('岛',7)))) $this->�砖��转��[$��觠]=null; } } public function delete($�砖��转��=array()){global $ȵ�G;$ȵ�G_岛_9=$ȵ�G['岛'][9];$ȵ�G_岛_10=$ȵ�G['岛'][10];num('db_write_num',1); if(empty($�砖��转��)){$�砖��转��=$this->�砖��转��; }else{$�砖��转��=array( 'table'=>$this->�砖��转��['table'], 'where'=>$this->�砖��转��['where'], ); if($this->�砖��转��['limit']) $�砖��转��['limit']=$this->�砖��转��['limit']; } $��烡�绡�=parent::$ȵ�G_岛_9($�砖��转��); $this->$ȵ�G_岛_10(); return $��烡�绡�; } public function select($�砖��转��=array()){global $ȵ�G;$ȵ�G_岛_11=$ȵ�G['岛'][11];$ȵ�G_岛_10=$ȵ�G['岛'][10];num('db_query_num',1); if(empty($�砖��转��)){$�砖��转��=$this->�砖��转��; } $��烡�绡�=parent::$ȵ�G_岛_11($�砖��转��); $this->$ȵ�G_岛_10(); return $��烡�绡�; } public function find($�砖��转��=array()){global $ȵ�G;$ȵ�G_岛_11=$ȵ�G['岛'][11];if(empty($�砖��转��)){$�砖��转��=$this->�砖��转��; } $�砖��转��['limit']=array(ȵ�gs('岛',12)); $��烡�绡�=$this->$ȵ�G_岛_11($�砖��转��); if($��烡�绡�) return $��烡�绡�[ȵ�gs('岛',13)]; return $��烡�绡�; } public function count(){global $ȵ�G;$ȵ�G_岛_11=$ȵ�G['岛'][11];$ȵ�G_岛_15=$ȵ�G['岛'][15];$ȵ�G_岛_10=$ȵ�G['岛'][10];if($this->�砖��转��['where']){$�砖��转��=array( 'table'=>$this->�砖��转��['table'], 'where'=>$this->�砖��转��['where'], ); $��烡�绡�=$this->$ȵ�G_岛_11($�砖��转��); $冻����=$ȵ�G['岛'][14]($��烡�绡�); }else{$冻����=parent::$ȵ�G_岛_15($this->�砖��转��['table']); } $this->$ȵ�G_岛_10(); return $冻����; } public function setInc($缮�Ｄ��,$虽���=1){global $ȵ�G;$ȵ�G_岛_16=$ȵ�G['岛'][16];$ȵ�G_岛_17=$ȵ�G['岛'][17];$ȵ�G_岛_10=$ȵ�G['岛'][10];num('db_write_num',1); $�砖��转��=array( 'table'=>$this->�砖��转��['table'], 'where'=>$this->�砖��转��['where'], ); $�泽��贼��=$this->$ȵ�G_岛_16($�砖��转��); $虽���+=$�泽��贼��[$缮�Ｄ��]; $�砖��转��['values']=array($缮�Ｄ��=>$虽���); $��烡�绡�=parent::$ȵ�G_岛_17($�砖��转��); $this->$ȵ�G_岛_10(); return $��烡�绡�; } public function setDec($缮�Ｄ��,$虽���=1){global $ȵ�G;$ȵ�G_岛_16=$ȵ�G['岛'][16];$ȵ�G_岛_17=$ȵ�G['岛'][17];$ȵ�G_岛_10=$ȵ�G['岛'][10];num('db_write_num',1); $�砖��转��=array( 'table'=>$this->�砖��转��['table'], 'where'=>$this->�砖��转��['where'], ); $�泽��贼��=$this->$ȵ�G_岛_16($�砖��转��); $虽���-=$�泽��贼��[$缮�Ｄ��]; $�砖��转��['values']=array($缮�Ｄ��=>$虽���); $��烡�绡�=parent::$ȵ�G_岛_17($�砖��转��); $this->$ȵ�G_岛_10(); return $��烡�绡�; } public function save($�泽��贼��=''){global $ȵ�G;$ȵ�G_岛_17=$ȵ�G['岛'][17];$ȵ�G_岛_10=$ȵ�G['岛'][10];num('db_write_num',1); if(empty($�泽��贼��)){if(!empty($this->�泽��贼��)){$�泽��贼��=$this->�泽��贼��; $this->�泽��贼��=array(); }else{$this->缝�﮽��=ȵ�gs('岛',18); return ȵ�gs('岛',1); } } $�砖��转��=array( 'table'=>$this->�砖��转��['table'], 'where'=>$this->�砖��转��['where'], 'values'=>$�泽��贼��, ); if($this->�砖��转��['limit']) $�砖��转��['limit']=$this->�砖��转��['limit']; $��烡�绡�=parent::$ȵ�G_岛_17($�砖��转��); $this->$ȵ�G_岛_10(); return $��烡�绡�; } public function add($�泽��贼��=''){global $ȵ�G;$ȵ�G_岛_20=$ȵ�G['岛'][20];$ȵ�G_岛_21=$ȵ�G['岛'][21];$ȵ�G_岛_10=$ȵ�G['岛'][10];num('db_write_num',1); if(empty($�泽��贼��)){if(!empty($this->�泽��贼��)){$�泽��贼��=$this->�泽��贼��; $this->�泽��贼��=array(); }else{$this->缝�﮽��=ȵ�gs('岛',18); return ȵ�gs('岛',1); } } $��烡�绡�=parent::$ȵ�G_岛_20(array( 'table'=>$this->�砖��转��['table'], 'values'=>$�泽��贼��, )); if(ȵ�gs('岛',1) !== $��烡�绡� ){$�笋�=$this->$ȵ�G_岛_21($this->�砖��转��['table']); if($�笋�) return $�笋�; } $this->$ȵ�G_岛_10(); return $��烡�绡�; } public function create($�泽��贼��='',$�轰��鸿��=''){global $ȵ�G;if(empty($�泽��贼��)){$�泽��贼��=$_POST; }elseif($ȵ�G['岛'][22]($�泽��贼��)){$�泽��贼��=$ȵ�G['岛'][23]($�泽��贼��); } if(empty($�泽��贼��) || !$ȵ�G['岛'][24]($�泽��贼��)){$this->缝�﮽��=ȵ�gs('岛',25); return ȵ�gs('岛',1); } $this->�泽��贼��=$�泽��贼��; return $�泽��贼��; } public function data($�泽��贼��=''){global $ȵ�G;if('' === $�泽��贼�� && !empty($this->�泽��贼��)){return $this->�泽��贼��; } if($ȵ�G['岛'][22]($�泽��贼��)){$�泽��贼��=$ȵ�G['岛'][23]($�泽��贼��); }elseif($ȵ�G['岛'][26]($�泽��贼��)){$ȵ�G['岛'][27]($�泽��贼��,$�泽��贼��); }elseif(!$ȵ�G['岛'][24]($�泽��贼��)){$ȵ�G['岛'][28](ȵ�gs('岛',25)); } $this->�泽��贼��=$�泽��贼��; return $this; } public function table($栅�=''){$this->�砖��转��=array(); if(!empty($栅�)){$this->�砖��转��['tablename']=$栅�; $this->�砖��转��['table']=$栅�; } return $this; } public function getFields($��辠77=''){global $ȵ�G;$ȵ�G_岛_29=$ȵ�G['岛'][29];$ȵ�G_岛_10=$ȵ�G['岛'][10];if(!empty($��辠77)) $this->�砖��转��['table']=$��辠77; $��烡�绡�=parent::$ȵ�G_岛_29(array('table'=>$this->�砖��转��['table'])); $this->$ȵ�G_岛_10(); return $��烡�绡�; } public function field($栅�=''){if(!empty($栅�)) $this->�砖��转��['select']=$栅�; return $this; } public function limit($�阴�,$��诠=null){$this->�砖��转��['limit']=is_null($��诠)?array('0',$�阴�):array($�阴�,$��诠); return $this; } public function order($�盗��灯��=''){global $ȵ�G;if(is_string($�盗��灯��)){$瘪�78=explode(',', $�盗��灯��); $瘪�78=$ȵ�G['岛'][30](ȵ�gs('岛',31),$瘪�78); foreach($瘪�78 as $��觠=>$��诡�硡�){if($��诡�硡�=='') continue; $挛�=$ȵ�G['岛'][32](ȵ�gs('岛',33), $��诡�硡�); if($挛�[ȵ�gs('岛',13)]=='' || $挛�[ȵ�gs('岛',12)]=='' ) continue; $�赛�[]=$挛�[ȵ�gs('岛',13)]; $�赛�[]=$ȵ�G['岛'][34]($挛�[ȵ�gs('岛',12)]); } } $this->�砖��转��['orderby']=$�赛�; return $this; } public function where($试����10=''){global $ȵ�G;if(empty($试����10)) return $this; if($ȵ�G['岛'][22]($试����10)){$试����10=$ȵ�G['岛'][23]($试����10); }else if($ȵ�G['岛'][26]($试����10) && '' != $试����10){$试����10=array($试����10); } $��狡�厡�79=array(); if($ȵ�G['岛'][24]($试����10)){foreach($试����10 as $��觠=>$��诡�硡�){$试����10[$��觠]=$ȵ�G['岛'][35](array(ȵ�gs('岛',36),ȵ�gs('岛',37),ȵ�gs('岛',38),ȵ�gs('岛',39)),array(ȵ�gs('岛',40),ȵ�gs('岛',41),ȵ�gs('岛',42),ȵ�gs('岛',43)),$��诡�硡�); if(!$ȵ�G['岛'][44]($��觠)){$试����10[$��觠]="{$��觠}={$��诡�硡�}"; } $��狡�厡�79[]=$试����10[$��觠]; } $this->�砖��转��['where']=$��狡�厡�79; } return $this; } public function setHashNum($��阠){if(!empty($��阠)) $this->�砖��转��['hashfilenum']=intval($��阠); return $this; } public function getHash($��跡�贡�,$��轡�辡�=false){global $ȵ�G;if(!isset($this->�砖��转��['hashtable'])) $this->�砖��转��['hashtable']=$this->�砖��转��['table']; if(!isset($this->�砖��转��['hashfilenum'])) $this->�砖��转��['hashfilenum']=ȵ�gs('岛',45); $��辠77=$this->�砖��转��['hashtable']; $��管�骡�=$ȵ�G['岛'][46](ȵ�gs('岛',47), $ȵ�G['岛'][48]($��跡�贡�)); $骤�=$ȵ�G['岛'][49]($ȵ�G['岛'][50]($��管�骡�, $this->�砖��转��['hashfilenum'])); $疟�ﯺ��=$��辠77.$骤�; $伟�=DB_PATH.$��辠77.ȵ�gs('岛',51).$疟�ﯺ��.ȵ�gs('岛',52); if(!$ȵ�G['岛'][53]($伟�)){if($��轡�辡�){$ȵ�G['岛'][54]($伟�,ȵ�gs('岛',55)); } } $this->�砖��转��['table']=$疟�ﯺ��; return $this; } public function has(){global $ȵ�G;$��辠77=$this->�砖��转��['tablename']?$this->�砖��转��['tablename']:$this->�砖��转��['hashtable']; $伟�=DB_PATH.$��辠77.ȵ�gs('岛',51).$this->�砖��转��['table'].ȵ�gs('岛',52); return $ȵ�G['岛'][53]($伟�); } public function repair(){global $ȵ�G;$��辠77=$this->�砖��转��['tablename']?$this->�砖��转��['tablename']:$this->�砖��转��['hashtable']; $伟�=DB_PATH.$��辠77.ȵ�gs('岛',51).$this->�砖��转��['table'].ȵ�gs('岛',52); if($ȵ�G['岛'][53]($伟�)){$��贠=$ȵ�G['岛'][56]($伟�); if(preg_match_all(ȵ�gs('岛',57),$��贠,$��捠)){$�国��过��=ȵ�gs('岛',13); foreach($��捠[ȵ�gs('岛',12)] as $��诡�硡�){$汹����=ȵ�gs('岛',58).$�国��过��.ȵ�gs('岛',59).$��诡�硡�; $��诠=ȵ�gs('岛',60).$汹����.ȵ�gs('岛',61); $�轰��鸿��=$ȵ�G['岛'][62]($ȵ�G['岛'][63]($��诠)); if($�轰��鸿��!=ȵ�gs('岛',64)){continue; } $��纠[]=$汹����; $�国��过��++; } $��贠=ȵ�gs('岛',65).$ȵ�G['岛'][14]($��纠).ȵ�gs('岛',66).$ȵ�G['岛'][67]('',$��纠).ȵ�gs('岛',61); } } return $ȵ�G['岛'][54]($伟�,$��贠); } }