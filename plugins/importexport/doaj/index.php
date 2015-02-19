<?php

/**
 * @defgroup plugins_importexport_doaj DOAJ Plugin
 */
 
/**
 * @file plugins/importexport/doaj/index.php
 *
 * Copyright (c) 2014-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_importexport_doaj
 * @brief Wrapper for native XML import/export plugin.
 *
 */

require_once('DOAJPlugin.inc.php');

return new DOAJPlugin();

?>
