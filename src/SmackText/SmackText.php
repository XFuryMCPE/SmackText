<?php namespace SmackText;
/* ______                
 *|  ____|               
 *| |__ _   _ _ __ _   _ 
 *|  __| | | | '__| | | |
 *| |  | |_| | |  | |_| |
 *|_|   \__,_|_|   \__, |
 *                  __/ |
 *                 |___/ 
 *
 * @author XFuryMCPE
 * Public plugin by XFuryMCPE, have fun
 */
 
 use pocketmine\plugin\PluginBase;
 use pocketmine\Player;
 use pocketmine\utils\TextFormat;
 
 class SmackText extends PluginBase{
 
  public function onEnable(){} //TODO: start this
  
  public function smack(Player $p, $damage){
    $extra = (mt_rand(0,2) == 1 ? true : false);
  }

}
