<?php
// wcf imports
require_once(WCF_DIR.'lib/data/box/tab/type/AbstractBoxTabType.class.php');
// wiki imports
require_once(WIKI_DIR."lib/data/article/Article.class.php");

/**
 * @package		com.woltlab.community.wiki.box.standard
 * @svn			$Id:$
 */
 
class MainArticlesBoxTabType extends AbstractBoxTabType {
	
	/**
	 * @see	BoxTabType::getData()
	 */
	public function getData(BoxTab $boxTab) {
		$mainArticles = array();
		
		$this->languageID = WCF::getLanguage()->getLanguageID();
		if (isset($_REQUEST['languageID'])) $this->languageID = intval($_REQUEST['languageID']);
		
		// main articles
		$sql = "SELECT article.articleID, article.group, article.category, content.title, content.alternateTitle, content.languageID
				FROM wiki".WIKI_N."_article AS article
				LEFT JOIN wiki".WIKI_N."_article_content AS content
				ON content.isSet = 1 AND content.articleID = article.articleID
				WHERE content.languageID = '".$this->languageID."' AND content.isSet = 1 AND article.main = 1 AND article.group = 'default'
				ORDER BY article.mainPosition";
				
		$result = WCF::getDB()->sendQuery($sql);
		while($row = WCF::getDB()->fetchArray($result)){
			$mainArticles[] = new Article($row["articleID"], $this->languageID, null, $row);
		}
		#print_r($mainArticles);
		return $mainArticles;
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
		return 'mainArticlesBoxTabType';
	}
}
?>