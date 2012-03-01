<?php
// wcf imports
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');

/**
 * Adds box cache resources.
 * 
 * @author	Sebastian Oettl
 * @copyright	2009-2012 WCF Solutions <http://www.wcfsolutions.com/index.html>
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	com.woltlab.community.wiki.box
 * @subpackage	system.event.listener
 * @category	Burningpedia Wiki
 */
class SessionFactoryBoxListener implements EventListener {
	/**
	 * @see EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		WCF::getCache()->addResource('box-'.PACKAGE_ID, WCF_DIR.'cache/cache.box-'.PACKAGE_ID.'.php', WCF_DIR.'lib/system/cache/CacheBuilderBox.class.php');
		WCF::getCache()->addResource('boxTab-'.PACKAGE_ID, WCF_DIR.'cache/cache.boxTab-'.PACKAGE_ID.'.php', WCF_DIR.'lib/system/cache/CacheBuilderBoxTab.class.php');
		WCF::getCache()->addResource('boxTypes-'.PACKAGE_ID, WCF_DIR.'cache/cache.boxType-'.PACKAGE_ID.'.php', WCF_DIR.'lib/system/cache/CacheBuilderBoxTypes.class.php');
		WCF::getCache()->addResource('boxLayout-'.PACKAGE_ID, WCF_DIR.'cache/cache.boxLayout-'.PACKAGE_ID.'.php', WCF_DIR.'lib/system/cache/CacheBuilderBoxLayout.class.php');
		WCF::getCache()->addResource('boxPosition-'.PACKAGE_ID, WCF_DIR.'cache/cache.boxPosition-'.PACKAGE_ID.'.php', WCF_DIR.'lib/system/cache/CacheBuilderBoxPosition.class.php');
	}
}
?>