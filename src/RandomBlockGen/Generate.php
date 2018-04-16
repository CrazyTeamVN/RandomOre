<?php

namespace RandomBlockGen;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\math\Vector3;
use pocketmine\Player;
use pocketmine\event\block\BlockUpdateEvent;
use pocketmine\item\Item;
use pocketmine\event\Listener;
use pocketmine\level\Level;
use pocketmine\block\Block;
use pocketmine\block\Iron;
use pocketmine\block\Cobblestone;
use pocketmine\block\Diamond;
use pocketmine\block\Emerald;
use pocketmine\block\Gold;
use pocketmine\block\Coal;
use pocketmine\block\Lava;
use pocketmine\block\Lapis;
use pocketmine\block\Redstone;
use pocketmine\block\Water;

class Generate extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getLogger()->info("Plugin Enabled!");
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }

        public function onBlockSet(BlockUpdateEvent $event){
        $block = $event->getBlock();
        $water = false;
        $lava = false;
        for ($i = 2; $i <= 5; $i++) {
            $nearBlock = $block->getSide($i);
            if ($nearBlock instanceof Water) {
                $water = true;
            } else if ($nearBlock instanceof Lava) {
                $lava = true;
            }
            if ($water && $lava) {
                $id = mt_rand(1, 20);
                switch ($id) {
                    case 2;
                        $newBlock = new Iron();
                        break;
                    case 4;
                        $newBlock = new Gold();
                        break;
                    case 6;
                        $newBlock = new Emerald();
                        break;
                    case 8;
                        $newBlock = new Coal();
                        break;
                    case 10;
                        $newBlock = new Redstone();
                        break;
                    case 12;
                        $newBlock = new Diamond();
                        break;
					case 14;
                        $newBlock = new Lapis();
                        break;	
                    default:
                        $newBlock = new Cobblestone();
                }
                $block->getLevel()->setBlock($block, $newBlock, true, false);
                return;
            }
        }
    }
}
