<?php

/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	# Set the theme for your project's web pages.
	# See http://eclipse.org/phoenix/
	$theme = "solstice";
	

	# Define your project-wide Navigation here
	# This appears on the left of the page if you define a left nav
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	
	# If you want to override the eclipse.org navigation, uncomment below.
	# $Nav->setLinkList(array());
	
	# Break the navigation into sections
	$Nav->addNavSeparator("Gemini Web Home", 	"/gemini/web");
	$Nav->addCustomNav("About Gemini Web", 	"http://www.eclipse.org/projects/project_summary.php?projectid=rt.gemini.web",    		"_self", 3);
	$Nav->addCustomNav("Download", 			"/gemini/web/download", 		"_self", 3);
	$Nav->addCustomNav("Documentation", 	"/gemini/web/documentation",	"_self", 3);
	$Nav->addCustomNav("Support", 			"/gemini/web/support", 			"_self", 3);
	$Nav->addCustomNav("Getting Involved", 	"/gemini/web/contribute",		"_self", 3);
	$Nav->addCustomNav("Background", 		"/gemini/web/about",    		"_self", 3);

	# Define keywords, author and title here, or in each PHP page specifically
	# $pageKeywords	= "eclipse, OSGi, gemini";
	# $pageAuthor		= "Christopher Frost";
	# $pageTitle 		= "Gemini Web Container from EclipseRT";

	# top navigation bar
	# To override and replace the navigation with your own, uncomment the line below.
	# $Menu->setMenuItemList(array());
	# $Menu->addMenuItem("Home", "/project", "_self");
	# $Menu->addMenuItem("Download", "/project/download.php", "_self");
	# $Menu->addMenuItem("Documentation", "/project/documentation.php", "_self");
	# $Menu->addMenuItem("Support", "/project/support.php", "_self");
	# $Menu->addMenuItem("Developers", "/project/developers", "_self");
	
	# To define additional CSS or other pre-body headers
	$App->AddExtraHtmlHeader('<link media="screen" rel="stylesheet" type="text/css" href="/gemini/web/resources/local.css"/>');
	
	$App->AddExtraHtmlHeader('<script type="text/javascript" src="/gemini/web/resources/mootools-1.2.4-core-yc.js"></script>');
	$App->AddExtraHtmlHeader('<script type="text/javascript" src="/gemini/web/resources/mootools-1.2.4.4-more.js"></script>');

	# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
	$App->Promotion = TRUE;
	
	# If you have Google Analytics code, use it here
	$App->SetGoogleAnalyticsTrackingCode("UA-17221847-1");
?>