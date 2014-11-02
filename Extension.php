<?php

namespace Bolt\Extension\EazyAlvaro\BoltPonies;

use Bolt\Application;
use Bolt\BaseExtension;
use Bolt\Extensions\Snippets\Location as SnippetLocation;

class Extension extends BaseExtension
{
    public function getName()
    {
        return "BoltPonies";
    }

    public function initialize()
    {
        // Add extension's Twig path
        $this->app['twig.loader.filesystem']->addPath(__DIR__ . '/twig/');

        // Render the HTML from the Twig file
        $html = $this->app['render']->render('_ponies.twig', array());

        // Insert renderd HTML at the end of <head>
        $this->addSnippet(SnippetLocation::END_OF_HEAD, $html);

        // Add our config file
        $this->addJavascript('assets/ponycfg.js', true);
    }

}
