<?php

namespace iiFouzi\ServerCore;
  
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {

  public function onEnable(): void{
    $this->getLogger()->info("SimpleCore Enabled - Created by vRqzor#2844");
  }
  
  public function onDisable(): void{
    $this->getLogger()->info("SimpleCore Disabled - Created by vRqzor#2844");
  }
      case "feed":
        if($sender->getFood() == 20){
          $sender->sendMessage("You already have max hunger!");
          return false;
}
        $sender->setFood(20);
        $sender->sendMessage("You have been fed!");
        break;
  }
