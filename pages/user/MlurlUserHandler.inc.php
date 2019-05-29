<?php
import('pages.user.UserHandler');
class MlurlUserHandler extends UserHandler {
  function setLocale($args, $request) {
    $setLocale = array_shift($args);

    $site = $request->getSite();
    $context = $request->getContext();
    if ($context != null) {
      $contextSupportedLocales = (array) $context->getSupportedLocales();
    }

    if (AppLocale::isLocaleValid($setLocale) && (!isset($contextSupportedLocales) || in_array($setLocale, $contextSupportedLocales)) && in_array($setLocale, $site->getSupportedLocales())) {
      $session = $request->getSession();
      $session->setSessionVar('currentLocale', $setLocale);
    }

    $source = $request->getUserVar('source');
    if (preg_match('#^/\w#', $source) === 1) {
      $supported_locales = MlurlPlugin::convertLocalesToUrl(basename(parse_url($request->getCompleteUrl())['path'])), AppLocale::getSupportedLocales()));
      $request->redirectUrl($source);
    }

    if(isset($_SERVER['HTTP_REFERER'])) {
      $request->redirectUrl($_SERVER['HTTP_REFERER']);
    }

    $request->redirect(null, 'index');
  }
}
