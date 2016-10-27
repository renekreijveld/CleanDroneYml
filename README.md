CleanDroneYml
=============

In the Joomla 3.6.3 to 3.6.2 update by accident the file .drone.yml as included in the package and this file was installed in the root of the Joomla website.
This file has no function on a Joomla 3.6.3+ website and can be safely deleted.

This plugin does just that.

On install, it removes the file .drone.yml from the root of your Joomla website and then thsi plugin uninstalls itself.
