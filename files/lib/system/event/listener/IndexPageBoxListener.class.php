<?php
// wcf imports
require_once(WCF_DIR.'lib/system/box/BoxLayoutManager.class.php');
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
class IndexPageBoxListener implements EventListener {
	/**
	 * @see EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		// register positions
		BoxLayout::registerPositions(array('indexTop', 'indexBottom'));
	}
}
?>