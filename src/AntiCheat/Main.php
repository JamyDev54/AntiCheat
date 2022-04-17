<?php

namespace AntiCheat;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
    public static $core;

    public function onEnable()
    {
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents(new Events(), $this);
        $this->getLogger()->info(
            "Le plugin viens de se lancer
            \nDev: JamyDev
            \nVersion: 0.0.1");
    }
    public static function get() : Main{
        return self::$core;
    }
}