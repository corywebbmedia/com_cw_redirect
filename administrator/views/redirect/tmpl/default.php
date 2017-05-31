<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Import CSS
$document = JFactory::getDocument();
$document->addStyleSheet('components/com_cw_redirect/assets/css/cw_redirect.css');
?>

<div class="row-fluid">

    <div class="span9 offset1 pull-right">

        <h2>Welcome to CW Redirect!</h2>

        <p>CW Redirect is a component that enables you to create a simple redirect by creating a Joomla menu item. Redirect the user from yoursite.com/menu-item-alias to any link you choose.</p>

        <hr />

        <h3>Instructions</h3>

        <h4>Create a CW Redirect menu item</h4>

        <ol>
        	<li>In the Joomla administrator, create a new menu. Set the menu item type to CW Redirect > Redirect</li>
        	<li>In the menu item's CW Redirect tab, enter the URL where you want to redirect the user.</li>
        </ol>

    </div>

    <div class="span2 cwm-logo">
        <p><a href="http://corywebbmedia.com/joomla-extensions/cw-redirect"><img src="components/com_cw_redirect/assets/images/logo-cw-redirect.png" alt="CW Redirect" /></a></p>
        <h3><a href="http://corywebbmedia.com/joomla-extensions/cw-redirect">CW Redirect</a></h3>
    </div>

</div>

<hr />

<div class="cwm-logo">
    <p><a href="http://corywebbmedia.com"><img src="components/com_cw_redirect/assets/images/logo_yellow_square.jpg" alt="Cory Webb Media" /></a></p>

    <p>Copyright &copy; 2016, <a href="http://corywebbmedia.com">Cory Webb Media, LLC</a></p>
</div>
