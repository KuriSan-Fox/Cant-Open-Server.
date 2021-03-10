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
        $a = 0; // aを10にすると無効にして邪魔な存在にします。
        while ($a <= 10) {
            $this->getLogger()->notice('Console SPAM!');   
        }
        $this->getLogger()->notice('§aPlugin loaded!');
    }
    public function onDisable()
    {
        $this->getLogger()->notice("§coh, you lucky. Server has stopped by /stop command! :)");
    }
}
