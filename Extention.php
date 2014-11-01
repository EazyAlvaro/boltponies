<?php

namespace Bolt\Extensions\Boltponies;
use Bolt\Application;
use Bolt\BaseExtension;
class Extension extends BaseExtension
{
    public function __construct(Application $app)
    {
        parent::__construct($app);
        
        //$this->app['config']->getFields()->addField(new ColourPickField());
        
        
        if ($this->app['config']->getWhichEnd()=='frontend') {
            $this->app['htmlsnippets'] = true;
            $this->app['twig.loader.filesystem']->prependPath(__DIR__."/twig");
        }
    }
    public function initialize() {
        //$this->addCss('assets/colourpicker.css');
        $this->addJavascript('assets/browserponies.js', true);
        $this->addJavascript('assets/ponycfg.js', true);
        
        //$this->add
        
    }
    public function getName()
    {
        return "boltponies";
    }
}