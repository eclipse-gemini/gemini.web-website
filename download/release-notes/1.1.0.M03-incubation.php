<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Christopher Frost
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Virgo OSGi Runtime - Release Notes";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Downloads";
	$pageAuthor		= "Christopher Frost";
		
	ob_start();
?>

<div id="midcolumn">

<h3>1.1.0.M03-incubation - Release Notes</h3>
<p>Bug list is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;classification=RT;product=Gemini.Web;target_milestone=1.1.0.M03-incubation" target="_self">here</a>.</p>

<p>Notably this release includes the following bug fixes:</p>

<ul>
	<li>Configure Context elements for all web apps</li>
	<li>EquinoxBundleFileResolver.canUse throws NoClassDefFoundError when BundleHost cannot be loaded</li>
</ul>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>