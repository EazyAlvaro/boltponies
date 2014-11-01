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
        $this->addJavascript('assets/browserponies.js', true);
        $this->addJavascript('assets/ponycfg.js', true);
    }
    
    
    public function getName()
    {
        return "boltponies";
    }


   function info()
    {
        $data = array(
            'name' => "Bot Killer",
            'description' => "a bolt-extension that implements http://panzi.github.io/Browser-Ponies/",
            'keywords' => "ponies",
            'author' => "Alvaro Berndt",
            'link' => "https://github.com/EazyAlvaro/boltponies",
            'version' => "0.1",
            'required_bolt_version' => "2.0",
            'highest_bolt_version' => "3.0",
            'type' => "General",
            'first_releasedate' => "2014-11-01",
            'latest_releasedate' => "2014-11-01",
            'dependencies' => "",
            'priority' => 10
        );
       



}
