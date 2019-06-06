<?php
switch ($op) {
	case 'index':
	case 'current':
	case 'archive':
	case 'view':
	case 'download':
		define('HANDLER_CLASS', 'MlurlIssueHandler');
		$this->import('pages.issue.IssueHandler');
		break;
}
