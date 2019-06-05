<?php
import("pages.article.ArticleHandler");

class MlurlArticleHandler extends ArticleHandler {
  function initialize($request, $args = array()) {
    unset($args[0]);
    $args = array_values($args);
    parent::initialize($request, $args);
  }
  function view($args, $request) {
    unset($args[0]);
    $args = array_values($args);
    parent::view($args, $request);
  }
  function download($args, $request) {
    unset($args[0]);
    $args = array_values($args);
    parent::download($args, $request);
  }
  function viewFile($args, $request) {
    unset($args[0]);
    $args = array_values($args);
    parent::viewFile($args, $request);
  }
  function downloadSuppFile($args, $request) {
    unset($args[0]);
    $args = array_values($args);
    parent::downloadSuppFile($args, $request);
  }
}
