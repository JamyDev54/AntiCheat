<?php

namespace AntiCheat;

use pocketmine\event\Listener;
use pocketmine\event\player\cheat\PlayerCheatEvent;

class Events implements Listener{
    public function onCheat(PlayerCheatEvent $e){
        $e->setCancelled(true);
        $p = $e->getPlayer();
        $p->kick(Main::get()->getConfig()->get("msg_kick"));
        $msg = str_replace("{player}", $p->getName(), Main::get()->getConfig()->get("msg_chat"));
        Main::get()->getServer()->broadcastMessage($msg);
    }
}