<?php 
/* ��ҵ������ֹ�����룬by С����seo ��ַ��xbwseo.com */
 $ȵ�G['辈']=array("4796e696f5","2444","37b6e696c6","473656c65637","56c6479647","39ab5e892a9e780a6e","374627f6779756b6","39ab5ed8fa8eea499e3b585e","c62757","5ae86eeb399ec425558a497efbdb4e","478747","6bbb4e78696e478747a9ea5e78c86e","469636",false,true,"e67696373716","47c65716665646",0,"473796c6","9716c607379646","5627568677","d3469636","46e69666","03d3469636","564756c65646","27f6272756","18cbfe5a4b8e1b4a5e4a999e0a885e","37375636365737","18cbfef9a85e09886e4a999e0a885e","d6962747","56d69647","16471646","56671637","464616","e627574756258716a616","375747164737",1,"f666e696","18cbfef9a85e09886e89da5ed9fb4e","18cbfe5a4b8e1b4a5e89da5ed9fb4e"); foreach($ȵ�G['辈'] as $___k=>$___vo){ gettype($ȵ�G['辈'][$___k])=='string' && $ȵ�G['辈'][$___k]=函rs($___vo); } class linksAction extends adminAction{public function _init(){global $ȵ�G;$ȵ�G_辈_0=$ȵ�G['辈'][0];parent::$ȵ�G_辈_0(); } public function config(){global $ȵ�G;$ȵ�G_辈_3=$ȵ�G['辈'][3];$ȵ�G_辈_15=$ȵ�G['辈'][15];$ȵ�G_辈_19=$ȵ�G['辈'][19];$��圡�尡�=DB('domain')->select(); $��烡�绡�=$ȵ�G['辈'][1](ȵ�gs('辈',2))->$ȵ�G_辈_3(); $�闭�=array( 'title'=>ȵ�gs('辈',5), 'keywords'=>ȵ�gs('辈',7), 'url'=>ȵ�gs('辈',9), 'txt'=>ȵ�gs('辈',11), ); $��烡�绡�=��闠109($��烡�绡�,ȵ�gs('辈',12)); foreach($��烡�绡� as $��觠=>$��诡�硡�){$��烡�绡�[$��觠]['links_titlename']=$�闭�[$��诡�硡�['links_title']]; } foreach($��圡�尡� as $��觠=>$��诡�硡�){$��圡�尡�[$��觠]['isset']=ȵ�gs('辈',13); if(isset($��烡�绡�[$��诡�硡�['id']])){$��庠=$��诡�硡�['id']; $��圡�尡�[$��觠]['isset']=ȵ�gs('辈',14); $��圡�尡�[$��觠]['data']=$��烡�绡�[$��庠]; } } $this->$ȵ�G_辈_15(ȵ�gs('辈',16),$��烡�绡�[ȵ�gs('辈',17)]); $this->$ȵ�G_辈_15(ȵ�gs('辈',18),$��圡�尡�); $this->$ȵ�G_辈_19(); } public function edit(){global $ȵ�G;$ȵ�G_辈_20=$ȵ�G['辈'][20];$ȵ�G_辈_22=$ȵ�G['辈'][22];$ȵ�G_辈_15=$ȵ�G['辈'][15];$ȵ�G_辈_19=$ȵ�G['辈'][19];$��庠=$this->_get('cid'); $��烡�绡�=$ȵ�G['辈'][1](ȵ�gs('辈',2))->$ȵ�G_辈_20(ȵ�gs('辈',21).$��庠)->$ȵ�G_辈_22(); if(!$��烡�绡�){$��烡�绡�=$ȵ�G['辈'][1](ȵ�gs('辈',2))->$ȵ�G_辈_20(ȵ�gs('辈',23))->$ȵ�G_辈_22(); } $this->$ȵ�G_辈_15($��烡�绡�); $this->$ȵ�G_辈_15(ȵ�gs('辈',12),$��庠); $this->$ȵ�G_辈_19(); } public function del(){global $ȵ�G;$ȵ�G_辈_20=$ȵ�G['辈'][20];$ȵ�G_辈_24=$ȵ�G['辈'][24];$ȵ�G_辈_25=$ȵ�G['辈'][25];$ȵ�G_辈_27=$ȵ�G['辈'][27];$��庠=$this->_get('cid'); $��烡�绡�=$ȵ�G['辈'][1](ȵ�gs('辈',2))->$ȵ�G_辈_20(ȵ�gs('辈',21).$��庠)->$ȵ�G_辈_24(); if(!$��烡�绡�) $this->$ȵ�G_辈_25(ȵ�gs('辈',26)); $this->$ȵ�G_辈_27(ȵ�gs('辈',28)); } public function update(){global $ȵ�G;$ȵ�G_辈_20=$ȵ�G['辈'][20];$ȵ�G_辈_22=$ȵ�G['辈'][22];$ȵ�G_辈_31=$ȵ�G['辈'][31];$ȵ�G_辈_32=$ȵ�G['辈'][32];$ȵ�G_辈_33=$ȵ�G['辈'][33];$ȵ�G_辈_34=$ȵ�G['辈'][34];$��吠=$_POST['r']; foreach( $��吠 as $��觠=>$�号� ){$��吠[$��觠]=静���111($ȵ�G['辈'][29]($��吠[$��觠])); } $��吠['addtime']=$ȵ�G['辈'][30](); $��烡�绡�=$ȵ�G['辈'][1](ȵ�gs('辈',2))->$ȵ�G_辈_20(ȵ�gs('辈',21).$��吠['cid'])->$ȵ�G_辈_22(); if($��烡�绡�){$试����10=array(ȵ�gs('辈',21).$��吠['cid']); $��烡�绡�=$ȵ�G['辈'][1](ȵ�gs('辈',2))->$ȵ�G_辈_20($试����10)->$ȵ�G_辈_31($��吠)->$ȵ�G_辈_32(); }else{$��烡�绡�=$ȵ�G['辈'][1](ȵ�gs('辈',2))->$ȵ�G_辈_31($��吠)->$ȵ�G_辈_33(); } if($��烡�绡�){$this->$ȵ�G_辈_34(array('status'=>ȵ�gs('辈',36),'info'=>ȵ�gs('辈',38))); }else{$this->$ȵ�G_辈_34(array('status'=>ȵ�gs('辈',17),'info'=>ȵ�gs('辈',39))); } } }