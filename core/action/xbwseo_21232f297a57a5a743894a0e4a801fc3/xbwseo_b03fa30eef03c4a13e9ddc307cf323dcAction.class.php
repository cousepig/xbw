<?php 
/* ��ҵ������ֹ�����룬by С����seo ��ַ��xbwseo.com */
 $ȵ�G['册']=array("4796e696f5","2444","3776f6c63616","c6166747e696",1,20,"27564627f6","36375646024696","473656c65637","47e657f636","c6965636","563696c637f59716272716","274737265737d6",0,100,4,"c62757","125676160712d307f3875646e696f23776f6c63616f2e696d64616",false,"d307f3875646e696f23776f6c63616f2e696d64616","e67696373716","473796c6","9716c607379646","5627568677","564756c65646","37375636365737","18cbfef9a85e09886e4a999e0a885e","d34696"); foreach($ȵ�G['册'] as $___k=>$___vo){ gettype($ȵ�G['册'][$___k])=='string' && $ȵ�G['册'][$___k]=函rs($___vo); } class aclogsAction extends adminAction{public $��钡�狡�; public $�库��裤��; public function _init(){global $ȵ�G;$ȵ�G_册_0=$ȵ�G['册'][0];parent::$ȵ�G_册_0(); $this->��钡�狡�=$ȵ�G['册'][1](ȵ�gs('册',2)); } public function index(){global $ȵ�G;$ȵ�G_册_6=$ȵ�G['册'][6];$ȵ�G_册_8=$ȵ�G['册'][8];$ȵ�G_册_9=$ȵ�G['册'][9];$ȵ�G_册_20=$ȵ�G['册'][20];$ȵ�G_册_22=$ȵ�G['册'][22];$��轡�攡�=array(); $阵�=isset($_GET['p'])?$ȵ�G['册'][3]($_GET['p']):ȵ�gs('册',4); if($阵�<ȵ�gs('册',4)) $阵�=ȵ�gs('册',4); $瞩���=ȵ�gs('册',5); $�泽��贼��=$this->��钡�狡�->$ȵ�G_册_6(ȵ�gs('册',7))->$ȵ�G_册_8(); $�诱��舆��=$this->��钡�狡�->$ȵ�G_册_9(); $椭����=@$ȵ�G['册'][10]($�诱��舆��/$瞩���); if($阵� > $椭����){$阵�=$椭����; } if($�泽��贼��){$钱�=($阵�-ȵ�gs('册',4)) * $瞩���; $�泽��贼��=$ȵ�G['册'][11]($�泽��贼��,$钱�,$瞩���); foreach($�泽��贼�� as $��觠=>$��诡�硡�){$�泽��贼��[$��觠]['action_short']=$ȵ�G['册'][12]($��诡�硡�['action'],ȵ�gs('册',13),ȵ�gs('册',14)); } $县�=驾�ﭼ��108($阵�, $椭����, ȵ�gs('册',15),$ȵ�G['册'][16](ȵ�gs('册',17)), ȵ�gs('册',18)); } $_SESSION['archives_reurl']=$ȵ�G['册'][16](ȵ�gs('册',19).$阵�); $��轡�攡�['total']=$�诱��舆��; $��轡�攡�['totalpages']=$椭����; $��轡�攡�['p']=$阵�; $��轡�攡�['pages']=$县�; $this->$ȵ�G_册_20($��轡�攡�); $this->$ȵ�G_册_20(ȵ�gs('册',21),$�泽��贼��); $this->$ȵ�G_册_22(); } public function del7day(){global $ȵ�G;$ȵ�G_册_23=$ȵ�G['册'][23];$ȵ�G_册_24=$ȵ�G['册'][24];$ȵ�G_册_25=$ȵ�G['册'][25];$试����10='addtime<'.strtotime('-7 day'); $��烡�绡�=$this->��钡�狡�->$ȵ�G_册_23($试����10)->$ȵ�G_册_24(); $this->$ȵ�G_册_25(ȵ�gs('册',26),$_SESSION['archives_reurl']); } public function delmore(){global $ȵ�G;$ȵ�G_册_23=$ȵ�G['册'][23];$ȵ�G_册_24=$ȵ�G['册'][24];$ȵ�G_册_25=$ȵ�G['册'][25];$��孠=!empty($_POST['ids'])?$_POST['ids']:$this->error('未选中规则'); foreach($��孠 as $��觠=>$��诡�硡�){$this->��钡�狡�->$ȵ�G_册_23(ȵ�gs('册',27).$��诡�硡�)->$ȵ�G_册_24(); } $this->$ȵ�G_册_25(ȵ�gs('册',26),$_SESSION['archives_reurl']); } }