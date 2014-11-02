<?php

namespace Bolt\Extension\EazyAlvaro\BoltPonies;

use Bolt\Application;
use Bolt\BaseExtension;

class Extension extends BaseExtension
{
    public function getName()
    {
        return "BoltPonies";
    }

    public function initialize()
    {
        if ($this->app['config']->getWhichEnd() == 'frontend') {
            $this->addJavascript('assets/browserponies.js', true);
            $this->addJavascript('assets/ponycfg.js', true);
        }
    }
}
