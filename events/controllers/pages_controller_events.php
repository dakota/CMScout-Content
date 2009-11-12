<?php
class PagesControllerEvents extends AppControllerEvents
{
	function onGetLandingPages($event)
	{
		if(isset($event->Controller->_enabledPlugins) && isset($event->Controller->_enabledPlugins[$this->params['plugin']]))
		{
			return array(
					array(
							'plugin' => $this->params['plugin'],
							'controller' => 'pages',
							'action' => 'index',
							'ajaxAction' => 'landingPage',
							'title' => $event->Controller->_enabledPlugins[$this->params['plugin']]
					));
		}
	}
}
?>