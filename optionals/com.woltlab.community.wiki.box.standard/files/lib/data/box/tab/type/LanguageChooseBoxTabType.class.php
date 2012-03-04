<?php
// wcf imports
require_once(WCF_DIR.'lib/data/box/tab/type/AbstractBoxTabType.class.php');
// wiki imports
require_once(WIKI_DIR."lib/data/article/Article.class.php");

/**
 * @package		com.woltlab.community.wiki.box.standard
 * @svn			$Id: LanguageChooseBoxTabType.class.php 1889 2012-03-03 17:47:09Z TobiasH87 $
 */
 
class LanguageChooseBoxTabType extends AbstractBoxTabType {
public $languageID;
	/**
	 * @see	BoxTabType::getData()
	 */
	public function getData(BoxTab $boxTab) {
		
		$this->languageID = WCF::getLanguage()->getLanguageID();
		if (isset($_REQUEST['languageID'])) $this->languageID = intval($_REQUEST['languageID']);
	
		$availableLanguages = Language::getAvailableLanguages(PACKAGE_ID);
		foreach($availableLanguages as $ID => $availableLanguage){
			$this->availableLanguages[$ID] = $availableLanguage;
			#$this->availableLanguages[$ID]["icon"] = "language".StringUtil::firstCharToUpperCase($availableLanguage["languageCode"])."S.png";
		}
		return $availableLanguages;
	}
	
	/**
	 * @see	BoxTabType::isAccessible()
	 */
	#public function isAccessible(BoxTab $boxTab) {
		
	#}
	
	/**
	 * @see	BoxTabType::getTemplateName()
	 */	
	public function getTemplateName() {
		return 'languageChooseBoxTabType';
	}
}
?>