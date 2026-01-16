<?php
namespace LaminasTest\ZendFrameworkBridge\TestAsset;

class ModuleManager
{
    private ?EventManager $eventManager;

    public function __construct(?EventManager $eventManager = null)
    {
        $this->eventManager = $eventManager ?: new EventManager();
    }

    /**
     * @return EventManager|null
     */
    public function getEventManager(): ?EventManager
    {
        return $this->eventManager;
    }
}
