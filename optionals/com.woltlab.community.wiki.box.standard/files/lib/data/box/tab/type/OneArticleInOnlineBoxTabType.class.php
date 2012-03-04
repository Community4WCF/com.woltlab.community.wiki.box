<?php
// wcf imports
require_once(WCF_DIR.'lib/data/box/tab/type/AbstractBoxTabType.class.php');
// wiki imports
require_once(WIKI_DIR."lib/data/article/Article.class.php");

/**
 * @package		com.woltlab.community.wiki.box.standard
 * @svn			$Id: OneArticleInOnlineBoxTabType.class.php 1889 2012-03-03 17:47:09Z TobiasH87 $
 */
 
class OneArticleInOnlineBoxTabType extends AbstractBoxTabType {
	public $oneArticleID = WIKI_INDEX_SIDEARTICLE_ARTICLEID;
	/**
	 * @see	BoxTabType::getData()
	 */
	public function getData(BoxTab $boxTab) {
		
		$this->languageID = WCF::getLanguage()->getLanguageID();
		if (isset($_REQUEST['languageID'])) $this->languageID = intval($_REQUEST['languageID']);
	
		return $oneArticle = new Article($this->oneArticleID, $this->languageID);
	}
	
	/**
	 * @see	BoxTabType::isAccessible()
	 */
	public function isAccessible(BoxTab $boxTab) {
		return (WCF::getUser()->getPermission('user.wiki.canViewArticle'));
	}
	
	/**
	 * @see	BoxTabType::getTemplateName()
	 */	
	public function getTemplateName() {
		return 'oneArticleInBoxBoxTabType';
	}
}
?>