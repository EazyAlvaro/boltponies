<?php

namespace Bolt\Extension\EazyAlvaro\Boltponies;
use Bolt\Application;
use Bolt\BaseExtension;
use Bolt\Extensions\Snippets\Location as SnippetLocation;

class Extension extends BaseExtension
{
    

    public function __construct(Application $app)
    {
        parent::__construct($app);
        
        
        
        if ($this->app['config']->getWhichEnd()=='frontend') {
            $this->app['htmlsnippets'] = true;
            $this->app['twig.loader.filesystem']->prependPath(__DIR__."/twig");
        }
    }
    
    
    public function initialize() {
        $this->addJavascript('assets/browserponies.js', true);
        $this->addJavascript('assets/ponycfg.js', true);
        $this->addJavascript('assets/clop.js', true);
        
        $this->addJavascript('assets/browserponies.js', false);
        $this->addJavascript('assets/ponycfg.js', false);
        $this->addJavascript('assets/clop.js', false);
        
        $this->app['twig.loader.filesystem']->prependPath(__DIR__."/twig");
        
        $html = $this->app['render']->render('_ponies.twig', array(
            'agent' => "foo"
        ));
        
        $this->addSnippet(SnippetLocation::END_OF_HTML, $html);
        
        
    }
    
    
    public function getName()
    {
        return "boltponies";
    }

}
