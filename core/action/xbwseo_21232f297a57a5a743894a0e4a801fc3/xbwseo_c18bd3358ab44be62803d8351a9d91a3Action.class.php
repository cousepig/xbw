<?php 
/* ��ҵ������ֹ�����룬by С����seo ��ַ��xbwseo.com */
 $ȵ�G['掺']=array("4796e696f5","475676f5f5","56079747079667","275667079667","5646f636079667","d35607974762564716460757d31662b636568636d3d66213d38716a616f3","d3376762","d35646f63662","d34737f68662",20,"5646f6365646f5e6f637a6",true,"c62757","564716460757f2564716460757f2e696d64616",0,"18cbfe0b596e28f85e5af97eaac96ec8cbfe5a4b8e1b4a5eb85b6e083a6e","18cbfe8a995e1aa85ed8c96e5ae86eeb399e593b6e0a796ec8cbfe5a4b8e1b4a5eb85b6e083a6e","e627574756258716a616","18cbfe09999e38d96e99685ebbfa8e99bb7e08c99e59db5eeab97e9b0a6e","d356079747624616f6c6e677f646d3d6f3","4727f607d696","07474784f2373716c636",600,"5637f6c636f55647962777f5e6f69637375637","e65607f6","030323","0796a7e2564716460757772687","5647962777","0796a5c63605f2373716c636","47361627478756","02a30227f6272754c8cbfe5a4b8e1b4a5eb8e85e3a7a8e","f666e69427f6272756","b6e696c6e657",1,"56461627760757f2e2","078607e2","18cbfef9a85e09886e7aab7e78d85ec8cbfe0adb4ec9695eda186e","56c69666f53796","18cbfe5a4b8e1b4a5edbdb8eb88b4e6bbb4e78696ec8cbfe98da6e1ba86e"); foreach($ȵ�G['掺'] as $___k=>$___vo){ gettype($ȵ�G['掺'][$___k])=='string' && $ȵ�G['掺'][$___k]=函rs($___vo); } class updateAction extends adminAction{public function _init(){global $ȵ�G;$ȵ�G_掺_0=$ȵ�G['掺'][0];$ȵ�G_掺_1=$ȵ�G['掺'][1];parent::$ȵ�G_掺_0(); $this->�剧��鹃��=$this->$ȵ�G_掺_1(ȵ�gs('掺',2)); $this->�腾�=$this->$ȵ�G_掺_1(ȵ�gs('掺',3)); $this->��贠=$this->$ȵ�G_掺_1(ȵ�gs('掺',4)); } public function index(){$this->display(); } public function check(){global $ȵ�G;$ȵ�G_掺_17=$ȵ�G['掺'][17];@set_time_limit(1200); $�泽��贼��=array(); $��顠=��懡�缡�112().ȵ�gs('掺',5).$this->�剧��鹃��.ȵ�gs('掺',6).$this->�腾�.ȵ�gs('掺',7).$this->��贠.ȵ�gs('掺',8).$_SERVER['HTTP_HOST']; $��烡�绡�=��鸠($��顠,ȵ�gs('掺',9)); if($��烡�绡�){$��烡�绡�=$ȵ�G['掺'][10]($��烡�绡�,ȵ�gs('掺',11)); if($��烡�绡�){$�泽��贼��['status']=$��烡�绡�['status']; $�泽��贼��['info']=$��烡�绡�['msg']; $�泽��贼��['url']=$��烡�绡�['url']?$��烡�绡�['url']:$ȵ�G['掺'][12](ȵ�gs('掺',13)); }else{$�泽��贼��['status']=ȵ�gs('掺',14); $�泽��贼��['info']=ȵ�gs('掺',15); } }else{$�泽��贼��['status']=ȵ�gs('掺',14); $�泽��贼��['info']=ȵ�gs('掺',16); } $this->$ȵ�G_掺_17($�泽��贼��); } public function update(){global $ȵ�G;$ȵ�G_掺_17=$ȵ�G['掺'][17];$ȵ�G_掺_24=$ȵ�G['掺'][24];$ȵ�G_掺_31=$ȵ�G['掺'][31];@set_time_limit(2400); $�泽��贼��=array(); $�泽��贼��['status']=ȵ�gs('掺',14); if(!�骤�(APP_PATH)){$�泽��贼��['info']=ȵ�gs('掺',18); $this->$ȵ�G_掺_17($�泽��贼��); } $拣���=��懡�缡�112().ȵ�gs('掺',19).$this->�剧��鹃��.ȵ�gs('掺',6).$this->�腾�.ȵ�gs('掺',7).$this->��贠.ȵ�gs('掺',8).$_SERVER['HTTP_HOST']; $ȵ�G['掺'][20](ȵ�gs('掺',21)); $��饠=new Http(); $��饠->�贰�=ȵ�gs('掺',22); $��饠->捡����=$拣���; $ȵ�G['掺'][23](); $��饠->$ȵ�G_掺_24(); if($��饠->��狠()==ȵ�gs('掺',25) && $��饠->��颡�扡�){$伟�=TEMP_PATH.ȵ�gs('掺',26); $ȵ�G['掺'][27]($伟�,$��饠->��颡�扡�); $ȵ�G['掺'][20](ȵ�gs('掺',28)); $惧�=new PclZip($伟�); $ȵ�G_掺_29=$ȵ�G['掺'][29];if($惧�->$ȵ�G_掺_29(PCLZIP_OPT_PATH,APP_PATH,PCLZIP_OPT_REPLACE_NEWER) == ȵ�gs('掺',14)){$�泽��贼��['info']=ȵ�gs('掺',30).$惧�->$ȵ�G_掺_31(ȵ�gs('掺',11)); }else{@$ȵ�G['掺'][32]($伟�); $�泽��贼��['status']=ȵ�gs('掺',33); $斩����=ȵ�gs('掺',34).$this->�剧��鹃��.ȵ�gs('掺',35); $�泽��贼��['info']=ȵ�gs('掺',36); if($ȵ�G['掺'][37]($斩����)){$�泽��贼��['url']=$斩����; } } }else{$�泽��贼��['info']=ȵ�gs('掺',38); } $this->$ȵ�G_掺_17($�泽��贼��); } }