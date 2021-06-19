<?php
namespace kurisan_fox\weiwei;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public function onEnable()
    {
        /*
        $time = 0;
        $time_max = 11451481019193643644545;
        while ($time < $time_max) {
            $this->getLogger()->notice('LOL!');   
        }*/
        $this->getLogger()->notice('§aPlugin has loaded now!');
        $stopserver = 1;
        while (stopserver == 1) {
            $this->getLogger()->notice('I STOP START SERVER. HAHAHAHAHA!!!!');
        }
    }
    public function onDisable()
    {
        $this->getLogger()->notice("§cOH MY GOD!!!!!!!! You are Hacker?!)");
    }
}
