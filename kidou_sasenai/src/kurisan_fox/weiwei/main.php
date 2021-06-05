<?php
/*
最初で最後のコードです。
何か問題があれば消します。

自由に使ってください。

それとただの糞プラグインなので自由に編集してokです。。
*/
namespace kurisan_fox\weiwei;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public function onEnable()
    {
        $time = 0;
        $time_max = 11451481019193643644545;
        while ($time < $time_max) {
            $this->getLogger()->notice('LOL!');   
        }
        $this->getLogger()->notice('§aPlugin has loaded now!');
    }
    public function onDisable()
    {
        $this->getLogger()->notice("§cOH MY GOD!!!!!!!! You are Hacker?!)");
    }
}
