<?php


namespace DevTools\commands;


use pocketmine\plugin\Plugin;

interface PluginIdentifiableCommand
{
    public function getPlugin() : Plugin;
}