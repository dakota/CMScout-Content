<?php
class PagesAppControllerEvents extends AppControllerEvents
{
	function onGetHomePages($event)
	{
		if(isset($event->Controller->_enabledPlugins) && isset($event->Controller->_enabledPlugins[$this->params['plugin']]))
		{
			return array(
					array(
							'plugin' => $this->params['plugin'],
							'controller' => 'pages',
							'action' => 'index',
							'ajaxAction' => 'homePageOptions',
							'title' => $event->Controller->_enabledPlugins[$this->params['plugin']]
					));
		}
	}
	
	function onAdminLinks($event)
	{
		if(isset($event->Controller->_enabledPlugins) && isset($event->Controller->_enabledPlugins[$this->params['plugin']]))
		{
			/*$adminLinks = array();
			$adminLinks[] = array('name' => 'Forum Manager',
									'plugin' => $this->params['plugin'],
									'controller' => 'forums',
									'action' => 'index');
			return $adminLinks;*/
		}
	}
}
?>