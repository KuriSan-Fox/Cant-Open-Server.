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
        $this->getLogger()->notice('§aPlugin loaded!');
    }
    public function onDisable()
    {
        $this->getLogger()->notice("§cUnloaded Plugin! :)");
    }
}
