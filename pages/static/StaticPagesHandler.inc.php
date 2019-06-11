<?php
import("plugins.generic.staticPages.StaticPagesHandler");;

class MlurlStaticPagesHandler extends StaticPagesHandler {

  function index($args, $request) {
    $op = $request->getRouter()->_op;
    $request->getRouter()->_page = $op;
    $request->getRouter()->_op = 'index';
    $request->getRouter()->getHandler()->_id = $op;
    // setup plugin
    $staticPagesPlugin = new StaticPagesPlugin();
    $staticPagesPlugin->pluginPath = 'plugins/generic/staticPages';
    $staticPagesPlugin->pluginCategory = 'generic';
    StaticPagesHandler::setPlugin($staticPagesPlugin);
    
    parent::view($args, $request);
  }

}
