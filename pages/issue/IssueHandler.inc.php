<?php
import("pages.issue.IssueHandler");

class MlurlIssueHandler extends IssueHandler {
  function initialize($request, $args = array()) {
    unset($args[0]);
    $args = array_values($args);
    parent::initialize($request, $args);
  }
  function view($args, $request) {
    unset($args[0]);
    $args = array_values($args);
    $journal = $request->getContext();
    $issueDao = DAORegistry::getDAO('IssueDAO');
    $issue = $issueDao->getByBestId((int) $journal->getId(), $args[0], true);
    $request->getRouter()->_page = 'issue';
    $request->getRouter()->_op = 'view';
    $request->getRouter()->getHandler()->_authorizationDecisionManager->_authorizedContext[ASSOC_TYPE_ISSUE] = $issue;
    parent::view($args, $request);
  }
}
