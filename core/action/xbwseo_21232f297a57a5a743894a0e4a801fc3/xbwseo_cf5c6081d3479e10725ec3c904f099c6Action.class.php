<?php 
/* ��ҵ������ֹ�����룬by С����seo ��ַ��xbwseo.com */
 $ȵ�G['铲']=array("4796e696f5","2444","56079747362716","473656c65637","e69616d6f646","5627568677","d3469636",0,"f2e69616d6f646","478747e2e69616d6f646f2","3747e65647e6f636f5475676f556c69666","47e657f636","5646f6c6078756","a0","e5e7","e7f2","0a796e","c2875646e696","5646f6c607d696","379756b6f59716272716","56a796c61696275637e657","c2","875646e696","473656c6c6f636","d356079747362716","e67696373716","9716c607379646","c6166747e696","d34696","46e69666","56c69666c60747","473796c6","d65647379737",1,"77f68637","3756c65727","c6d64786e2d753d8fa6e79da5e79da5e0b596eb7f2473796c6c2f2d733d8fa6e79da5eb7f2473796c6","c6d64786e2d75379da5e0b596eb7d7f9c96e5a796eb7f2377756e6c2c6d64786e2d75379da5e0b596eb7f2d7f9c96e5a796eb7f2c6d64786377756e6c2c6d64786e2d75379da5e0b596eb7f2d7f9c96e5a796eb7f2c6d64786","9716272716f5e696","563616c6075627f5274737","a0d0","5627f6d6","4696e6","5627f6d6f556079747362716","d6962747","e627574756258716a616","375747164737","f666e696","18cbfe0b7a7ed8095ebb1b7e68885e5a585e39eb8e7bfa8e","18cbfe0b7a7ed8095e9b4a5e6bbb4e78696e5a585e39eb8e7bfa8e","56d616e6279646","27f6272756","18cbfeaa8b4e088b4e2ad86e7bfa8ec8cbfe8ac95e89da5e2b7b5e0b7a7ed8095e9b4a5e6bbb4e78696e","d0","56a796c61696275637","16471646","56671637","464616","769666e6f636","279646478747","f2","279646f53796","279646b6d6",0777,true,"18cbfe5a4b8e1b4a5e89da5ed9fb4e","564756c65646","18cbfe5a4b8e1b4a5e4a999e0a885e","37375636365737","18cbfef9a85e09886e4a999e0a885e","c62757","875646e696f256079747362716f2e696d64616","f23756c65727c60747",false,"56c69666f53796","478747e2875646e696f556c6479647f2","478747e2875646e696f5e6f6964707962736375646f2","478747e29746f626f2","56079747","473796c6f5373716c636","e2","d356d616e6279646","47c65716665646f23756c65727c60747","478747e2875646e696f5374627f6779756b6f2","f556c6479647f2","478747e2","f5374627f6779756b6f2","f5e6f6964707962736375646f2","c7c7c7c7c7c7","5647962777","56571796e657f59716272716","f9a85e09886e89da5ed9fb4e","a3c65646f6d6f5f65637772687","46e656a3","5646f6365646f5436356371626","56d69647","f5","12f9a85e09886e5a585ecbfa5e","125a4b8e1b4a5e5a585ecbfa5e","12ea1a7e3ada6ed88b4e99885e487a8ec8cbfe5a4b8e1b4a5e5a585ecbfa5e","e6f6964707f6f5373716c636","e7b246c507d65647e7","4696","5646f636e656f5436356371626","5646f636"); foreach($ȵ�G['铲'] as $___k=>$___vo){ gettype($ȵ�G['铲'][$___k])=='string' && $ȵ�G['铲'][$___k]=函rs($___vo); } class arctypeAction extends adminAction{public $��亡�阡�; public $�库��裤��; public $诱�; public function _init(){global $ȵ�G;$ȵ�G_铲_0=$ȵ�G['铲'][0];parent::$ȵ�G_铲_0(); $this->�库��裤��=$ȵ�G['铲'][1](ȵ�gs('铲',2)); } public function index(){global $ȵ�G;$ȵ�G_铲_3=$ȵ�G['铲'][3];$ȵ�G_铲_5=$ȵ�G['铲'][5];$ȵ�G_铲_11=$ȵ�G['铲'][11];$ȵ�G_铲_25=$ȵ�G['铲'][25];$ȵ�G_铲_26=$ȵ�G['铲'][26];�蹿��窜��(); $��烡�绡�=$this->�库��裤��->$ȵ�G_铲_3(); $��涡�尡�=隐�僧��($��诡�硡�['dirname']); foreach($��烡�绡� as $��觠=>$��诡�硡�){$��纠=$ȵ�G['铲'][1](ȵ�gs('铲',4))->$ȵ�G_铲_5(ȵ�gs('铲',6).$��诡�硡�['id'])->$ȵ�G_铲_3(); $��攡�暡�=ȵ�gs('铲',7); if($��纠){foreach($��纠 as $��贡�叡�=>$渊����){$��猡�锡�=DATA_PATH.ȵ�gs('铲',8).$渊����['dirname'].ȵ�gs('铲',9); $�创��锤��=$ȵ�G['铲'][10]($��猡�锡�); $��攡�暡�+=$�创��锤��?$ȵ�G['铲'][11]($ȵ�G['铲'][12](ȵ�gs('铲',13),$�创��锤��)):ȵ�gs('铲',7); } } $��烡�绡�[$��觠]['domain_num']=$��攡�暡�; $��烡�绡�[$��觠]['theme_num']=ȵ�gs('铲',7); if($��涡�尡�){foreach($��涡�尡� as $��贡�叡�=>$渊����){if(preg_match(ȵ�gs('铲',14).$��诡�硡�['dirname'].ȵ�gs('铲',15),$��贡�叡�)){$��烡�绡�[$��觠]['theme_num']++; } } } $��烡�绡�[$��觠]['theme_num']==ȵ�gs('铲',7) && $��烡�绡�[$��觠]['theme_num']=ȵ�gs('铲',16); $��烡�绡�[$��觠]['domain_num']==ȵ�gs('铲',7) && $��烡�绡�[$��觠]['domain_num']=ȵ�gs('铲',16); $��烡�绡�[$��觠]['urlrules']=$��诡�硡�['urlrules']?ȵ�gs('铲',17).$ȵ�G['铲'][18]($ȵ�G['铲'][19]($ȵ�G['铲'][20]($��诡�硡�['urlrules'])),ȵ�gs('铲',21)):ȵ�gs('铲',22); $��烡�绡�[$��觠]['collect_num']=$ȵ�G['铲'][1](ȵ�gs('铲',23))->$ȵ�G_铲_5(ȵ�gs('铲',24).$��诡�硡�['id'])->$ȵ�G_铲_11(); } $�泽��贼��['list']=$��烡�绡�; $this->$ȵ�G_铲_25($�泽��贼��); $this->$ȵ�G_铲_26(); } public function edit(){global $ȵ�G;$ȵ�G_铲_5=$ȵ�G['铲'][5];$ȵ�G_铲_29=$ȵ�G['铲'][29];$ȵ�G_铲_25=$ȵ�G['铲'][25];$ȵ�G_铲_26=$ȵ�G['铲'][26];$��欠=isset($_GET['id'])?intval($_GET['id']):''; $盐����=isset($_GET['more'])?$ȵ�G['铲'][27]($_GET['more']):ȵ�gs('铲',7); if($��欠<>''){$��烡�绡�=$this->�库��裤��->$ȵ�G_铲_5(ȵ�gs('铲',28).$��欠)->$ȵ�G_铲_29(); $��烡�绡�['urlrules']=$ȵ�G['铲'][20]($��烡�绡�['urlrules']); if(!$��烡�绡�['urlrules']){$��烡�绡�['urlrules']=array( array('tplfile'=>ȵ�gs('铲',31),'system'=>ȵ�gs('铲',33)), array('tplfile'=>ȵ�gs('铲',34),'system'=>ȵ�gs('铲',33)), ); } }else{$��烡�绡�['urlrules']=array( 'list'=>array('tplfile'=>ȵ�gs('铲',31),'rules'=>ȵ�gs('铲',36),'system'=>ȵ�gs('铲',33)), 'show'=>array('tplfile'=>ȵ�gs('铲',34),'rules'=>ȵ�gs('铲',37),'system'=>ȵ�gs('铲',33)), ); } if($��烡�绡�['urlrules']){foreach($��烡�绡�['urlrules'] as $��觠=>$��诡�硡�){if($ȵ�G['铲'][38]($��诡�硡�['tplfile'],array(ȵ�gs('铲',22),ȵ�gs('铲',31),ȵ�gs('铲',34)))){$��烡�绡�['urlrules'][$��觠]['system']=ȵ�gs('铲',33); } $��烡�绡�['urlrules'][$��觠]['rules']=$ȵ�G['铲'][39](ȵ�gs('铲',21),ȵ�gs('铲',40),$��诡�硡�['rules']); } } $this->$ȵ�G_铲_25(ȵ�gs('铲',41),$盐����); $this->$ȵ�G_铲_25($��烡�绡�); if($盐����){$this->$ȵ�G_铲_25(ȵ�gs('铲',42),$�坞�); $this->$ȵ�G_铲_26(ȵ�gs('铲',43)); }else{$this->$ȵ�G_铲_26(); } } public function update(){$this->update_one(); } public function update_one(){global $ȵ�G;$ȵ�G_铲_45=$ȵ�G['铲'][45];$ȵ�G_铲_5=$ȵ�G['铲'][5];$ȵ�G_铲_29=$ȵ�G['铲'][29];$ȵ�G_铲_51=$ȵ�G['铲'][51];$ȵ�G_铲_55=$ȵ�G['铲'][55];$ȵ�G_铲_56=$ȵ�G['铲'][56];$ȵ�G_铲_57=$ȵ�G['铲'][57];$骇�=$_POST['con']; foreach( $骇� as $��觠=>$�号� ){$骇�[$��觠]=静���111($ȵ�G['铲'][44]($骇�[$��觠])); } if($骇�['name']==''){$this->$ȵ�G_铲_45(array('status'=>ȵ�gs('铲',7),'info'=>ȵ�gs('铲',48))); } if(!$骇�['id'] && $骇�['dirname']==''){$this->$ȵ�G_铲_45(array('status'=>ȵ�gs('铲',7),'info'=>ȵ�gs('铲',49))); } $��乡�诡�=$this->�库��裤��->$ȵ�G_铲_5(array('dirname'=>$骇�['dirname']))->$ȵ�G_铲_29(); if($��乡�诡�){if($骇�['id']!=$��乡�诡�['id']){$this->$ȵ�G_铲_51(ȵ�gs('铲',52)); } } $��谡�谡�=$_POST['tplfile']; $张�=$_POST['urlrules']; $释�=$_POST['system']; $贿�什��=array(); foreach( $��谡�谡� as $��觠=>$��诡�硡� ){$��诡�硡�=$ȵ�G['铲'][44]($��诡�硡�); if($��诡�硡�==''){continue; } $张�[$��觠]=$ȵ�G['铲'][39](array(ȵ�gs('铲',40),ȵ�gs('铲',53),ȵ�gs('铲',13)),ȵ�gs('铲',21),$张�[$��觠]); $贿�什��[$��诡�硡�]=array('tplfile'=>$��诡�硡�,'rules'=>$张�[$��觠],'system'=>$释�[$��觠]); } $骇�['urlrules']=$贿�什��?$ȵ�G['铲'][54]($贿�什��):''; $试����10=array(ȵ�gs('铲',28).$骇�['id']); if($骇�['id']>ȵ�gs('铲',7)){$��烡�绡�=$this->�库��裤��->$ȵ�G_铲_5($试����10)->$ȵ�G_铲_55($骇�)->$ȵ�G_铲_56(); }else{$��烡�绡�=$this->�库��裤��->$ȵ�G_铲_55($骇�)->$ȵ�G_铲_57(); foreach($ȵ�G['铲'][58](ȵ�gs('铲',59)) as $��觠=>$��诡�硡�){$��颡�壡�=DATA_PATH.$��觠.ȵ�gs('铲',60).$骇�['dirname']; if(!$ȵ�G['铲'][61]($��颡�壡�)){$ȵ�G['铲'][62]($��颡�壡�,ȵ�gs('铲',63),ȵ�gs('铲',64)); } } } if($��烡�绡�){$this->$ȵ�G_铲_45(array('status'=>ȵ�gs('铲',33))); }else{$this->$ȵ�G_铲_45(array('status'=>ȵ�gs('铲',7),'info'=>ȵ�gs('铲',65))); } } public function del(){global $ȵ�G;$ȵ�G_铲_5=$ȵ�G['铲'][5];$ȵ�G_铲_66=$ȵ�G['铲'][66];$ȵ�G_铲_51=$ȵ�G['铲'][51];$ȵ�G_铲_68=$ȵ�G['铲'][68];$��欠=isset($_GET['id'])?intval($_GET['id']):$this->error('id 不能为空'); $��烡�绡�=$this->�库��裤��->$ȵ�G_铲_5(ȵ�gs('铲',28).$��欠)->$ȵ�G_铲_66(); if(!$��烡�绡�) $this->$ȵ�G_铲_51(ȵ�gs('铲',67)); $this->$ȵ�G_铲_68(ȵ�gs('铲',69),$ȵ�G['铲'][70](ȵ�gs('铲',71))); } public function tplrules(){global $ȵ�G;$ȵ�G_铲_3=$ȵ�G['铲'][3];$ȵ�G_铲_25=$ȵ�G['铲'][25];$ȵ�G_铲_26=$ȵ�G['铲'][26];$�轰��鸿��=$this->_get('type'); $��圡�尡�=$ȵ�G['铲'][1](ȵ�gs('铲',2))->$ȵ�G_铲_3(); foreach($��圡�尡� as $��觠=>$��诡�硡�){$�随�=TEMP_PATH.ȵ�gs('铲',72).$��诡�硡�['dirname']; $��圡�尡�[$��觠]['isset']=ȵ�gs('铲',73); if($ȵ�G['铲'][74]($�随�.ȵ�gs('铲',75)) || $ȵ�G['铲'][74]($�随�.ȵ�gs('铲',76)) || $ȵ�G['铲'][74]($�随�.ȵ�gs('铲',77))){$��圡�尡�[$��觠]['isset']=ȵ�gs('铲',64); } } $this->$ȵ�G_铲_25(ȵ�gs('铲',78),$�轰��鸿��); $this->$ȵ�G_铲_25(ȵ�gs('铲',79),$��圡�尡�); $this->$ȵ�G_铲_25(ȵ�gs('铲',31),$��岠); $this->$ȵ�G_铲_26(); } public function tplrules_edit(){global $ȵ�G;$ȵ�G_铲_5=$ȵ�G['铲'][5];$ȵ�G_铲_29=$ȵ�G['铲'][29];$ȵ�G_铲_25=$ȵ�G['铲'][25];$ȵ�G_铲_26=$ȵ�G['铲'][26];$迭����=$this->_get('dir'); $迭����=$ȵ�G['铲'][39](ȵ�gs('铲',80),'',$迭����); $��圡�尡�=$ȵ�G['铲'][1](ȵ�gs('铲',2))->$ȵ�G_铲_5(ȵ�gs('铲',81).$迭����)->$ȵ�G_铲_29(); if(!$��圡�尡�){$张�=array('index'=>'','list'=>'','show'=>''); }else{$张�=$ȵ�G['铲'][20]($��圡�尡�['urlrules']); } $�泽��贼��=$�抬��态��11=$东����=$��陡�绡�=array(); $�随�=TEMP_PATH.ȵ�gs('铲',72).$迭����; if(!$ȵ�G['铲'][61]($�随�)){$�随�=TEMP_PATH.ȵ�gs('铲',82); } $�抬��态��11['index']=@$ȵ�G['铲'][10]($�随�.ȵ�gs('铲',75)); $��烠['index']=@$ȵ�G['铲'][10]($�随�.ȵ�gs('铲',83)); $��陡�绡�['index']=@$ȵ�G['铲'][10]($�随�.ȵ�gs('铲',76)); foreach($张� as $��觠=>$��诡�硡�){$�审��婶��=$�随�.ȵ�gs('铲',84).$��觠.ȵ�gs('铲',85); $鸟����=$�随�.ȵ�gs('铲',86).$��觠.ȵ�gs('铲',85); $��股�厡�12=$�随�.ȵ�gs('铲',87).$��觠.ȵ�gs('铲',85); $�抬��态��11[$��觠]=$ȵ�G['铲'][74]($�审��婶��)?$ȵ�G['铲'][10]($�审��婶��):''; $��烠[$��觠]=$ȵ�G['铲'][74]($鸟����)?$ȵ�G['铲'][10]($鸟����):''; $��陡�绡�[$��觠]=$ȵ�G['铲'][74]($��股�厡�12)?$ȵ�G['铲'][10]($��股�厡�12):''; } $�泽��贼��['dirname']=$迭����; $�泽��贼��['titletpls']=$�抬��态��11; $�泽��贼��['kwtpls']=$��烠; $�泽��贼��['desctpls']=$��陡�绡�; $�泽��贼��['bodytpls']=@$ȵ�G['铲'][10]($�随�.ȵ�gs('铲',77)); if($�泽��贼��['bodytpls']){$�泽��贼��['bodytpls']=@$ȵ�G['铲'][12](ȵ�gs('铲',88),$�泽��贼��['bodytpls']); } $this->$ȵ�G_铲_25($�泽��贼��); $this->$ȵ�G_铲_26(); } public function update_tplrules(){global $ȵ�G;$ȵ�G_铲_5=$ȵ�G['铲'][5];$ȵ�G_铲_29=$ȵ�G['铲'][29];$ȵ�G_铲_68=$ȵ�G['铲'][68];$迭����=$this->_get('dir'); $迭����=$ȵ�G['铲'][39](ȵ�gs('铲',80),'',$迭����); $��圡�尡�=$ȵ�G['铲'][1](ȵ�gs('铲',2))->$ȵ�G_铲_5(ȵ�gs('铲',81).$迭����)->$ȵ�G_铲_29(); if(!$��圡�尡�){$张�=array('index'=>'','list'=>'','show'=>''); }else{$张�=$ȵ�G['铲'][20]($��圡�尡�['urlrules']); } $张�['index']=''; $�随�=TEMP_PATH.ȵ�gs('铲',72).$迭����; foreach($张� as $��觠=>$��诡�硡�){$�审��婶��=$�随�.ȵ�gs('铲',84).$��觠.ȵ�gs('铲',85); $鸟����=$�随�.ȵ�gs('铲',86).$��觠.ȵ�gs('铲',85); $��股�厡�12=$�随�.ȵ�gs('铲',87).$��觠.ȵ�gs('铲',85); $��镡�怡�=静���111($ȵ�G['铲'][44]($_POST['titletpl'][$��觠])); $ȵ�G['铲'][89]($�审��婶��,$��镡�怡�); $篱�=静���111($ȵ�G['铲'][44]($_POST['kwtpl'][$��觠])); $ȵ�G['铲'][89]($鸟����,$篱�); $掸���=静���111($ȵ�G['铲'][44]($_POST['desctpl'][$��觠])); $ȵ�G['铲'][89]($��股�厡�12,$掸���); } $��纠=$_POST['bodytpls']; $��纠=$ȵ�G['铲'][90]($��纠); foreach($��纠 as $��觠=>$��诡�硡� ){if($ȵ�G['铲'][44]($��诡�硡�)==''){unset($��纠[$��觠]);continue; } $��纠[$��觠]=静���111($��诡�硡�); } $�泽��贼��=$ȵ�G['铲'][18](ȵ�gs('铲',88),$��纠); $伟�=$�随�.ȵ�gs('铲',77); $ȵ�G['铲'][89]($伟�,$�泽��贼��); $this->$ȵ�G_铲_68(ȵ�gs('铲',91)); } public function tplrules_del(){global $ȵ�G;$ȵ�G_铲_68=$ȵ�G['铲'][68];$ȵ�G_铲_51=$ȵ�G['铲'][51];$迭����=$this->_get('dir'); $迭����=$ȵ�G['铲'][39](ȵ�gs('铲',80),'',$迭����); $�泽��贼��=array(); $�随�=TEMP_PATH.ȵ�gs('铲',72).$迭����; if(��钡�岡�113($�随�)){$this->$ȵ�G_铲_68(ȵ�gs('铲',69)); }else{$this->$ȵ�G_铲_51(ȵ�gs('铲',67)); } } public function import(){global $ȵ�G;$ȵ�G_铲_5=$ȵ�G['铲'][5];$ȵ�G_铲_55=$ȵ�G['铲'][55];$ȵ�G_铲_56=$ȵ�G['铲'][56];$ȵ�G_铲_29=$ȵ�G['铲'][29];$ȵ�G_铲_57=$ȵ�G['铲'][57];$ȵ�G_铲_68=$ȵ�G['铲'][68];$ȵ�G_铲_51=$ȵ�G['铲'][51];$ȵ�G_铲_3=$ȵ�G['铲'][3];$ȵ�G_铲_25=$ȵ�G['铲'][25];$ȵ�G_铲_26=$ȵ�G['铲'][26];if(IS_POST){$�泽��贼��=$继�=array(); $��欠=(int)$_POST['id']; $�认�=$_POST['code']; $�认�=静���111($�认�); $�认�=$ȵ�G['铲'][39](array(ȵ�gs('铲',92),ȵ�gs('铲',93)),'',$�认�); $�泽��贼��=$ȵ�G['铲'][20]($ȵ�G['铲'][94]($�认�)); if($�泽��贼��){$�泽��贼��['addtime']=$ȵ�G['铲'][95](); if($��欠){$�泽��贼��['id']=$��欠; $试����10=array(ȵ�gs('铲',28).$�泽��贼��['id']); $��烡�绡�=$this->�库��裤��->$ȵ�G_铲_5($试����10)->$ȵ�G_铲_55($�泽��贼��)->$ȵ�G_铲_56(); }else{$��烡�绡�=$this->�库��裤��->$ȵ�G_铲_5(ȵ�gs('铲',81).$�泽��贼��['dirname'])->$ȵ�G_铲_29(); if($��烡�绡�){$�泽��贼��['dirname'].=ȵ�gs('铲',96); } $��烡�绡�=$this->�库��裤��->$ȵ�G_铲_55($�泽��贼��)->$ȵ�G_铲_57(); } if($��烡�绡�){$this->$ȵ�G_铲_68(ȵ�gs('铲',97),$ȵ�G['铲'][70](ȵ�gs('铲',71))); }else{$this->$ȵ�G_铲_51(ȵ�gs('铲',98)); } }else{$this->$ȵ�G_铲_51(ȵ�gs('铲',99)); } }else{$��圡�尡�=$ȵ�G['铲'][1](ȵ�gs('铲',2))->$ȵ�G_铲_3(); $��欠=(int)$_GET['id']; if($��圡�尡�){$耻�=记���($��圡�尡�,ȵ�gs('铲',7),$��欠); } $this->$ȵ�G_铲_25(ȵ�gs('铲',100),$耻�); $this->$ȵ�G_铲_26(); } } public function export(){global $ȵ�G;$ȵ�G_铲_5=$ȵ�G['铲'][5];$ȵ�G_铲_29=$ȵ�G['铲'][29];$ȵ�G_铲_25=$ȵ�G['铲'][25];$ȵ�G_铲_26=$ȵ�G['铲'][26];$��欠=isset($_GET['id'])?intval($_GET['id']):$this->error('id 不能为空'); $��烡�绡�=$this->�库��裤��->$ȵ�G_铲_5(ȵ�gs('铲',28).$��欠)->$ȵ�G_铲_29(); if($��烡�绡�){foreach($��烡�绡� as $��觠=>$��诡�硡�){if(preg_match(ȵ�gs('铲',101),$��觠)) unset($��烡�绡�[$��觠]); } $��轡�攡�=$��烡�绡�; $疯����=array(ȵ�gs('铲',102)); foreach($疯���� as $��觠=>$��诡�硡�){if(isset($��轡�攡�[$��诡�硡�])) unset($��轡�攡�[$��诡�硡�]); } $�认�=ȵ�gs('铲',92).$ȵ�G['铲'][103]($ȵ�G['铲'][54]($��轡�攡�)).ȵ�gs('铲',93); $this->$ȵ�G_铲_25($��烡�绡�); $this->$ȵ�G_铲_25(array('code'=>$�认�)); } $this->$ȵ�G_铲_26(); } }