<?php 
/* ��ҵ������ֹ�����룬by С����seo ��ַ��xbwseo.com */
 $ȵ�G['拨']=array("4796e696f5","5637f6c636f55647962777f5e6f69637375637","078607e2769666e6f636","e67696373716","473796c6","9716c607379646","d6962747",1,"56762756d6f59716272716","4727f637b6","e627574756258716a616","24d4","769666e6f636","564757f627f5c62757f5265677","375747164737",0,"f666e696","4b596ec8ea5ed88b4e0b596e28f85e","4737f607f5","56079747","475676f5","46a7","e707474786e5e7","c62757","b64647","b6e696c6","56d6568647","c6d64786","fafa8e99499e0b596e28f85e","18cbfe8ac95e89da5ed88b4e6bbb4e78696e","76f6c647f626f627","56c69607d6f636","568636163607d65647","07d65647","473796c656c69666","473796c656c69666f55686361636","e6f69637375637","f6475716f5473656c6c6f636","b6e696c6f507f6f6c6f237761647","46b647","46b647f237761647","c6c616","e7f5c60747e5e7","f2c6d64786","c65646","279646f53796","18cbfe5a4b8e1b4a5e4a999e588b6e","56c69666f53796","b6e696c6e657",2,"18cbfef9a85e09886e4a999e588b6e","56a79637b636568636","56a79637","24d402","56a7963756c69666",200,"28a88e79da5e02",1024,"26b6"); foreach($ȵ�G['拨'] as $___k=>$___vo){ gettype($ȵ�G['拨'][$___k])=='string' && $ȵ�G['拨'][$___k]=函rs($___vo); } class cacheAction extends adminAction{public $�铝�; public function _init(){global $ȵ�G;$ȵ�G_拨_0=$ȵ�G['拨'][0];parent::$ȵ�G_拨_0(); $ȵ�G['拨'][1](); $this->�铝�=TEMP_PATH.ȵ�gs('拨',2); } public function index(){global $ȵ�G;$ȵ�G_拨_3=$ȵ�G['拨'][3];$ȵ�G_拨_5=$ȵ�G['拨'][5];$��岠=config('web_url_route'); unset($��岠['list'],$��岠['show']); $this->$ȵ�G_拨_3(ȵ�gs('拨',4),$��岠); $this->$ȵ�G_拨_5(); } public function update(){global $ȵ�G;$ȵ�G_拨_10=$ȵ�G['拨'][10];$骇�=$_POST['con']; foreach( $骇� as $��觠=>$�号� ){$骇�[$��觠]=$ȵ�G['拨'][6]($骇�[$��觠]); } $��绠=array(); $��绠['status']=ȵ�gs('拨',7); $�临��邻��=require $this->�铝�; $�静��镜��=$ȵ�G['拨'][8]($�临��邻��,$骇�); $ȵ�G['拨'][9]($�静��镜��); ��造($this->�铝�,$�静��镜��); $this->$ȵ�G_拨_10($��绠); } public function clear(){global $ȵ�G;$ȵ�G_拨_3=$ȵ�G['拨'][3];$ȵ�G_拨_5=$ȵ�G['拨'][5];$�泽��贼��['compile_cache']=囱�ﻎ��(�着�(TPLCACHE_PATH),'MB'); $�泽��贼��['session_cache']=囱�ﻎ��(�着�(SESSION_PATH),ȵ�gs('拨',11)); $��岠=$ȵ�G['拨'][12](ȵ�gs('拨',13)); unset($��岠['list'],$��岠['show']); $this->$ȵ�G_拨_3(ȵ�gs('拨',4),$��岠); $this->$ȵ�G_拨_3($�泽��贼��); $this->$ȵ�G_拨_5(); } public function clearzd(){$this->display(); } public function del(){global $ȵ�G;$ȵ�G_拨_10=$ȵ�G['拨'][10];$ȵ�G_拨_18=$ȵ�G['拨'][18];$伟�=isset($_POST['file'])?$_POST['file']:$this->ajaxReturn(array('status'=>0,"info"=>"参数不完整！")); $�俭�=isset($_POST['action'])?$_POST['action']:$this->$ȵ�G_拨_10(array('status'=>ȵ�gs('拨',15),"info"=>ȵ�gs('拨',17))); $�轰��鸿��=$this->$ȵ�G_拨_18(ȵ�gs('拨',19)); $ȵ�G_拨_20=$ȵ�G['拨'][20];if($this->$ȵ�G_拨_20(ȵ�gs('拨',21)) || preg_match(ȵ�gs('拨',22),$伟�)){$拣���=$伟�; $伟�=ȵ�gs('拨',23); } switch($伟�){case ȵ�gs('拨',23): switch($�轰��鸿��){case ȵ�gs('拨',24): $伟�=贡�104($拣���); break; case ȵ�gs('拨',25): $伟�=强����($拣���); break; case ȵ�gs('拨',26): $伟�=��採�胡�101($拣���); break; case ȵ�gs('拨',27): $伟�=�缀��谆��($拣���); break; default: $this->$ȵ�G_拨_10(array('status'=>ȵ�gs('拨',15),"info"=>ȵ�gs('拨',28))); } if(!$伟�){$this->$ȵ�G_拨_10(array('status'=>ȵ�gs('拨',15),"info"=>ȵ�gs('拨',29))); } break; case ȵ�gs('拨',30): $伟�=TEMP_PATH.ȵ�gs('拨',30); break; case ȵ�gs('拨',31): $伟�=TPLCACHE_PATH; break; case ȵ�gs('拨',27): $伟�=CACHE_PATH.ȵ�gs('拨',27); break; case ȵ�gs('拨',32): $伟�=CACHE_PATH.ȵ�gs('拨',33); break; case ȵ�gs('拨',26): $伟�=CACHE_PATH.ȵ�gs('拨',26); break; case ȵ�gs('拨',34): $伟�=TEMP_PATH.ȵ�gs('拨',35); break; case ȵ�gs('拨',36): $伟�=SESSION_PATH; break; case ȵ�gs('拨',37): $伟�=CACHE_PATH.ȵ�gs('拨',37); break; case ȵ�gs('拨',25): $伟�=CACHE_PATH.ȵ�gs('拨',38); break; case ȵ�gs('拨',39): $伟�=CACHE_PATH.ȵ�gs('拨',40); break; case ȵ�gs('拨',41): $伟�=CACHE_PATH; break; default: $伟�=preg_replace(ȵ�gs('拨',42),'',$伟�); $伟�=CACHE_PATH.ȵ�gs('拨',43).$伟�; } if($�俭�==ȵ�gs('拨',44)){if($ȵ�G['拨'][45]($伟�)){if(��钡�岡�113($伟�)){$this->$ȵ�G_拨_10(array('status'=>ȵ�gs('拨',7))); }else{$this->$ȵ�G_拨_10(array('status'=>ȵ�gs('拨',15),"info"=>ȵ�gs('拨',46))); } }else if($ȵ�G['拨'][47]($伟�)){if($ȵ�G['拨'][48]($伟�)){$this->$ȵ�G_拨_10(array('status'=>ȵ�gs('拨',49),"info"=>ȵ�gs('拨',50))); }else{$this->$ȵ�G_拨_10(array('status'=>ȵ�gs('拨',15),"info"=>ȵ�gs('拨',46))); } }else{$this->$ȵ�G_拨_10(array('status'=>ȵ�gs('拨',15),"info"=>ȵ�gs('拨',29))); } } if($�俭�==ȵ�gs('拨',51)){if($ȵ�G['拨'][45]($伟�)){$��烡�绡�=囱�ﻎ��(�着�($伟�)); $this->$ȵ�G_拨_10(array('status'=>ȵ�gs('拨',7),"size"=>$��烡�绡�.ȵ�gs('拨',53))); }if($ȵ�G['拨'][47]($伟�)){$�桨�=$ȵ�G['拨'][54]($伟�); if($�桨�<ȵ�gs('拨',55)){$��烡�绡�=$�桨�.ȵ�gs('拨',56); }else{$��烡�绡�=囱�ﻎ��($ȵ�G['拨'][54]($伟�)/ȵ�gs('拨',57),ȵ�gs('拨',58)).ȵ�gs('拨',53); } }else{$��烡�绡�=ȵ�gs('拨',15); } $this->$ȵ�G_拨_10(array('status'=>ȵ�gs('拨',7),"size"=>$��烡�绡�)); } } }