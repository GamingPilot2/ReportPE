<?php

namespace ReportPE;

use pocketmine\command\Command;
use 
use
use
use
use
use

class Main extends PluginBase{

public function onEnable{ 
$this->ConsoleSender->sendMessage("ReportPE are now enable !");
}

public function onDisable{ 
$this->ConsoleSender->sendMessage("ReportPE are now disabled !");
}
  
public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        switch($command->getName()){
            
          case "report":	              
            $name = \strtolower(\array_shift($args));
                    $player = $sender->getServer()->getPlayer($name);
                if(!(isset($args[0]))){
                    $sender->sendMessage(TextFormat::GREEN."Usage: /report <Player> <Reason>");
		      }
                    return true;
         #            if(count($args) < 1){                   
		#		foreach($this->getServer()->getOnlinePlayers() as $p){
		#			if($p->isOnline() && $p->hasPermission("report.report.view")){
		#				if($player instanceof Player){
       #       $p->sendMessage(TextFormat::DARK_RED."[Report] ".TextFormat::RED."Player ".$sender->getName()." reported ".TextFormat::AQUA.$player->getDisplayName().TextFormat::RED." for ".TextFormat::DARK_RED.implode("", $args));
			
