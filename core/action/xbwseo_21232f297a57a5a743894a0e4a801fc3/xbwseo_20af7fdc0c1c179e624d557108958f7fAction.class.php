<?php 
/* ��ҵ������ֹ�����룬by С����seo ��ַ��xbwseo.com */
 $ȵ�G['绷']=array("4796e696f5","078607e2769666e6f636","2444","56079747362716","473656c65637","56d616e6279646",0,"478747e247e657f63656079747f207d65647","56c69666f53796","3747e65647e6f636f5475676f556c69666","56a796c61696275637e657","279646f53796","f2564716c607d65647f2e2","7607a6e277569667562707f2","478747e256d616e6f2","5646f6c6078756","f2","e5e7","e7f2","669676e2369607f6e6f237567616d696f2369647164737f2e2","563616c6075627f5274737","c7c7","a0d0","5647962777","56a796c61696275637","e67696373716","56079747","473796c6f5373716c636","473796c6","9716c607379646","d0","a0","078607e2769666e6f636f556d6568647","f9a85e09886e0b696e4bb96e"); foreach($ȵ�G['绷'] as $___k=>$___vo){ gettype($ȵ�G['绷'][$___k])=='string' && $ȵ�G['绷'][$___k]=函rs($___vo); } class themeAction extends adminAction{public $乡�; public function _init(){global $ȵ�G;$ȵ�G_绷_0=$ȵ�G['绷'][0];parent::$ȵ�G_绷_0(); $this->�铝�=TEMP_PATH.ȵ�gs('绷',1); } public function index(){global $ȵ�G;$ȵ�G_绷_4=$ȵ�G['绷'][4];$ȵ�G_绷_25=$ȵ�G['绷'][25];$ȵ�G_绷_29=$ȵ�G['绷'][29];$�轰��鸿��=$this->_get('type'); $��圡�尡�=$ȵ�G['绷'][2](ȵ�gs('绷',3))->$ȵ�G_绷_4(); $��涡�尡�=隐�僧��($�轰��鸿��); $��圡�尡�=��闠109($��圡�尡�,ȵ�gs('绷',5)); $��岠=array(); $�泽��贼��['total']=ȵ�gs('绷',6); $��铡�朡�=array(); $�楼��娄��=TEMP_PATH.ȵ�gs('绷',7); if($�轰��鸿��){if($ȵ�G['绷'][8]($�楼��娄��)){$��艡�缡�=$ȵ�G['绷'][9]($�楼��娄��); $��铡�朡�=$ȵ�G['绷'][10]($��艡�缡�); foreach($��圡�尡� as $��觠=>$��诡�硡�){$��圡�尡�[$��觠]['num']=$��铡�朡�[$��觠]['num']; } } } foreach($��涡�尡� as $��觠=>$��诡�硡�){if($ȵ�G['绷'][11](TMPL_PATH.$��觠)){$�协��挟��=ȵ�gs('绷',12).$��觠.ȵ�gs('绷',13); $�窃�=ȵ�gs('绷',12).$��觠.ȵ�gs('绷',14); list($��帠,$栅�)=$ȵ�G['绷'][15](ȵ�gs('绷',16),$��觠); !isset($��圡�尡�[$��帠]['num']) && $��圡�尡�[$��帠]['num']=ȵ�gs('绷',6); $��圡�尡�[$��帠]['num']++; $��铡�朡�[$��觠]['num']=$��圡�尡�[$��帠]['num']; $�泽��贼��['total']++; if($�轰��鸿�� && !preg_match(ȵ�gs('绷',17).$�轰��鸿��.ȵ�gs('绷',18),$��觠)){continue; } $��岠[$��觠]['name']=$ȵ�G['绷'][8]($�窃�)?�鲤�($ȵ�G['绷'][9]($�窃�)):$栅�; $��岠[$��觠]['typedir']=$��帠; $��岠[$��觠]['typename']=$��圡�尡�[$��帠]['name']; $��岠[$��觠]['dir']=$��觠; $��岠[$��觠]['pic']=$ȵ�G['绷'][8]($�协��挟��)?$�协��挟��:ȵ�gs('绷',19); $��岠[$��觠]['domain']=$ȵ�G['绷'][20](ȵ�gs('绷',21),ȵ�gs('绷',22),$��诡�硡�); } } $ȵ�G['绷'][23]($�楼��娄��,$ȵ�G['绷'][24]($��铡�朡�)); $this->$ȵ�G_绷_25(ȵ�gs('绷',26),$�轰��鸿��); $this->$ȵ�G_绷_25(ȵ�gs('绷',27),$��圡�尡�); $this->$ȵ�G_绷_25(ȵ�gs('绷',28),$��岠); $this->$ȵ�G_绷_25($�泽��贼��); $this->$ȵ�G_绷_29(); } public function update_config(){global $ȵ�G;$��欠=$_POST['id']; $�创��锤��=$_POST['domain']; $�创��锤��=$ȵ�G['绷'][20](array(ȵ�gs('绷',22),ȵ�gs('绷',30),ȵ�gs('绷',31)),ȵ�gs('绷',21),$�创��锤��); $伟�=TEMP_PATH.ȵ�gs('绷',32); $歼�=require $伟�; $歼�[$��欠]=$�创��锤��; ��造($伟�,$歼�); exit(ȵ�gs('绷',33)); } }