<?php
class Page extends PagesAppModel
{
	var $name = 'Page';
	var $actsAs = array('Acl'=>'controlled', 'Tag'=>array('table_label'=>'tags', 'tags_label'=>'tag', 'separator'=>','), 'Sluggable', 'SoftDeletable');
	var $hasAndBelongsToMany = array('Tag' => array('joinTable' => 'pages_tags'));

	function parentNode()
	{
	    return "Pages";
	}

	function getHomepage($itemOptions)
	{
		if ($itemOptions['Homepage']['options'] != '')
		{
			return $this->findById($itemOptions['Homepage']['options']);
		}
	}
}
?>