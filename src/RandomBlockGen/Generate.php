<?php

namespace RandomBlockGen;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\math\Vector3;
use pocketmine\Player;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\item\Item;
use pocketmine\event\Listener;
use pocketmine\level\Level;
use pocketmine\block\Block;

class Generate extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getLogger()->info("Plugin Enabled!");
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }

    public function onBreak(BlockBreakEvent $ev){
        $block = $ev->getBlock();
        $p = $ev->getPlayer();
        if($block->getId() === Block::COBBLESTONE);
         $b = new Vector3($block->getX(),$block->getY(),$block->getZ());
         $result = rand(1,8);
			     switch($result){
		case 1:
            $block->getLevel()->setBlock($b,Block::DIAMOND_BLOCK);
            break;
          case 2:
      	  $block->getLevel->setBlock($block, Block::EMERALD_BLOCK);
            break;
          case 3:
      	  $block->getLevel->setBlock($block, Block::REDSTONE_BLOCK);
            break;
          case 4:
      	  $block->getLevel->setBlock($block, Block::COAL_BLOCK);
            break;
          case 5:
      	  $block->getLevel->setBlock($block, Block::IRON_BLOCK);
            break;
          case 6:
      	  $block->getLevel->setBlock($block, Block::GOLD_BLOCK);
            break;
          case 7:
      	  $block->getLevel->setBlock($block, Block::LAPIS_BLOCK);
            break;
          case 8:
      	  $block->getLevel->setBlock($block, Block::COBBLESTONE);
            break;
        return true;
      }
    }
  }
