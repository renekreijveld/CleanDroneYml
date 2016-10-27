<?php
defined('_JEXEC') or die;
class plgSystemCleandroneymlInstallerScript
{
	public $parameters;
	public $extension;
	public $extid;
	public $db;

	public function postflight($type, $parent)
	{
		$this->db = JFactory::getDbo();
		jimport('joomla.filesystem.folder');
		// Delete the file .drone.yml from the root
		JFile::delete(JPATH_ROOT . '/.drone.yml');
		// Uninstall myself from the extensions database table ...
		$this->db->setQuery($this->db->getQuery(true)
				->delete('#__extensions')
				->where($this->db->quoteName('type') . ' = ' . $this->db->quote('plugin'))
				->where($this->db->quoteName('folder') . ' = ' . $this->db->quote('system'))
				->where($this->db->quoteName('name') . ' = ' . $this->db->quote('cleandroneyml'))
		)->query();
		// ... and remove my files.
		JFolder::delete(JPATH_ROOT . '/plugins/system/cleandroneyml');
	}

}
