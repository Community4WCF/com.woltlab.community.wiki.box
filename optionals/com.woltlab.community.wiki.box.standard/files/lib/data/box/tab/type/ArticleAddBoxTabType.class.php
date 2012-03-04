<?php
// wcf imports
require_once(WCF_DIR.'lib/data/box/tab/type/AbstractBoxTabType.class.php');
// wiki imports
#require_once(WIKI_DIR."lib/data/article/Article.class.php");

/**
 * @package		com.woltlab.community.wiki.box.standard
 * @svn			$Id: ArticleAddBoxTabType.class.php 1889 2012-03-03 17:47:09Z TobiasH87 $
 */
 
class ArticleAddBoxTabType extends AbstractBoxTabType {
	/**
	 * @see	BoxTabType::getData()
	 */
	public function getData(BoxTab $boxTab) {
	
	}
	
	/**
	 * @see	BoxTabType::isAccessible()
	 */
	public function isAccessible(BoxTab $boxTab) {
		return (WCF::getUser()->getPermission('user.wiki.canCreateArticle'));
	}
	
	/**
	 * @see	BoxTabType::getTemplateName()
	 */	
	public function getTemplateName() {
		return 'articleAddBoxBoxTabType';
	}
}
?>