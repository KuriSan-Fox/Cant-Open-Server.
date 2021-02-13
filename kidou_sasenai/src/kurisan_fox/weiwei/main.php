<?php
/*
最初で最後のコードです。
何か問題があれば消します。

自由に使ってください。
*/
namespace php\unko;

use pocketmine\plugin\PluginBase;
class Main extends PluginBase
{
    public function onEnable()
    {
	// THE 練習 のコード。
        //while (true) {
        //    $num1 = 8091867987493326313 ;
        //    $num2 = 2151901553968352745  ;
        //    $c = $num1 - $num2;
        //    $this->getLogger()->notice('§czettai kidou sasenai kedo keisan sita yatsu dake ageru!:§a '.$c.' §cdayo!');
        //}
        $this->getLogger()->notice('§aPlugin loaded!');
        $this->getLogger()->notice('§chey,wait.');
        $this->getLogger()->notice('HAHAHAHA!!!!!!!! YOU CAN NOT START SERVER!');
    }
    public function onDisable()
    {
        $this->getLogger()->notice("§cUnloaded Plugin! :)");
    }
}

class ExamplePlugin implements Plugin{
	private $api;
	public function __construct(ServerAPI $api, $server = false){
		$this->api = $api;
	}
	
	public function init(){
	}
	
	public function __destruct(){
	}

}
