<?php
import("lib.pkp.classes.plugins.GenericPlugin");
class MlurlPlugin extends GenericPlugin {
  function register($category, $path, $mainContextId = null) {
    $success = parent::register($category, $path, $mainContextId);
    if ($success && $this->getEnabled($mainContextId)) {
      // handlers here
    }
    $this->_registerTemplateResource();
    return $success;
  }
  function getDisplayName() {
    return "Multilingual Url Plugin";
  }
  function getDescription() {
    return "Multilingual Url Plugin";
  }
}
