<?php
switch ($op) {
	case 'viewFile':
	case 'downloadSuppFile':
	case 'view':
	case 'download':
		define('HANDLER_CLASS', 'MlurlArticleHandler');
		$this->import('pages.article.ArticleHandler');
		break;
}
?>
