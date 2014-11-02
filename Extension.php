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

    public function __construct(Application $app)
    {
        parent::__construct($app);

        if ($this->app['config']->getWhichEnd() == 'frontend') {
            $this->app['htmlsnippets'] = true;
            $this->app['twig.loader.filesystem']->prependPath( __DIR__ . '/twig');
        }
    }

    public function initialize()
    {
        $this->addJavascript('assets/browserponies.js', true);
        $this->addJavascript('assets/ponycfg.js', true);
    }
}
