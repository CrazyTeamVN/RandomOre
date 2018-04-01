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
        $player = $ev->getPlayer();
        if($block->getId() == Block::COBBLESTONE);
         $vec = new Vector3($block->getX(),$block->getY(),$block->getZ());
         $ore = mt_rand(1,10000);
          switch($ore); 
            if($ore <= 50) {
        $block->getLevel()->setBlock($vec, Block::get(Block::DIAMOND_BLOCK));
            }elseif($ore => 50 && $ore <= 150) { 
        $block->getLevel()->setBlock($vec, Block::get(Block::EMERALD_BLOCK));
            }elseif($ore => 150 && $ore <= 275) {
        $block->getLevel()->setBlock($vec, Block::get(Block::GOLD_BLOCK));
            }elseif($ore => 275 && $ore <= 500) {
        $block->getLevel()->setBlock($vec, Block::get(Block::IRON_BLOCK));
    
            }elseif($ore => 500 && $ore <= 1075) {
        $block->getLevel()->setBlock($vec, Block::get(Block::REDSTONE_BLOCK));
            }elseif($ore => 1075 && $ore <= 2100) {
        $block->getLevel()->setBlock($vec, Block::get(Block::LAPIS_BLOCK));
        
            }elseif($ore => 2100 && $ore <= 4190) {
        $block->getLevel()->setBlock($vec, Block::get(Block::COAL_BLOCK));
            }elseif($ore => 4190 && $ore <= 10000)  {
        $block->getLevel()->setBlock($vec, Block::get(Block::COBBLESTONE));

      }
    }
  }
