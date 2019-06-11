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
    $request->getRouter()->_page = 'article';
    $request->getRouter()->_op = 'view';
    $galleyDao = DAORegistry::getDAO('ArticleGalleyDAO');
    $galley = $galleyDao->getByBestGalleyId($args[1], $args[0]);
    $this->galley = $galley;
    parent::view($args, $request);
  }
  function download($args, $request) {
    unset($args[0]);
    $args = array_values($args);
    $galleys = $this->article->getGalleys();
    foreach($galleys as $galley) {
      if(isset($args[1]) && $galley->getId() == $args[1]) {
        $this->galley = $galley;
      }
    }
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
