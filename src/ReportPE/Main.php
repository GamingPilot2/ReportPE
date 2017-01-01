<?php

namespace ReportPE;

use pocketmine\command\Command;
use pocketmine\scheduler\PluginTask;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;                            
use pocketmine\event\Listener;
use pocketmine\block\Block;
use pocketmine\item\Item;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\math\Vector3;
use pocketmine\event\player\PlayerCommandPreprocessEvent;
use pocketmine\level\Position;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\level\Level;

class Main extends PluginBase implements Listener {
	public function onEnable() {
		      $this->getLogger()->info("LifeCorePE is now enabled.");
	}
	
	public function onDisable() {
		      $this->getLogger()->info("LifeCorePE is disabled.");
	}
	
	case "report":
	
	
}
