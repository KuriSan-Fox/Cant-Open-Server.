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
        $a = 0;
        while (1 != 0) {
            $this->getLogger()->notice('<Enter a Your Message>');   
        }
        $this->getLogger()->notice('§aPlugin has loaded now!');
    }
    public function onDisable()
    {
        $this->getLogger()->notice("§cOH MY GOD!!!!!!!! Your Hacker?!)");
    }
}
