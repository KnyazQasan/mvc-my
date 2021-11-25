<?php

namespace Command;

class Version extends Command
{

    protected $name = 'version';

    protected $description = 'Arastta version';

    public function fire()
    {
        /* @var $version \Version */
        $version = new \Version();
        $this->info($version->getShortVersion());
    }
}
