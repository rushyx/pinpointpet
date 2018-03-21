<?php
/**
 * Given a group of pages, render a bootstrap nav menu 
 * If a page has child pages a drop down menu is built
 *
 * @param Pages $pgs
 * @return string
 *
 * Author: P. Rushmer
 *
 */
function isActive($child) 
{// return true if $child is currently displayed page, false if not
	if ($child->id == wire('page')->id)
		return true;
	else 
		return false;
}

function renderNav(Pages $pgs)
 {
	// $out is where we store the markup we are creating in this function
	$out = '';
	// top navigation consists of homepage and its visible children
	$homepage = $pgs->get('/'); 
	$children = $homepage->children();
	
	foreach ($children as $child) 
	{
		if ($child->hasChildren())
		{ // build submenu
			$out .= "<li class='dropdown'>".PHP_EOL;
			$out .= "<a class='dropdown-toggle' data-toggle='dropdown' href='$child->url'>$child->title<span class='caret'></span></a>".PHP_EOL;
			$out .= "<ul class='dropdown-menu'>".PHP_EOL;

			// add the parent menu as a link too
			$out .=  isActive($child) ? "<li class='active'>" : "<li>";
			$out .= "<a href='$child->url'>$child->title</a></li>".PHP_EOL;				
							
			foreach ($child->children() as $subm)
			{
				$out .= isActive($subm) ? "<li class='active'>" : "<li>";
				$out .= "<a href='$subm->url'>$subm->title</a></li>".PHP_EOL;
			}	
			// close the ul and li for dropdown
			$out .= "</ul>".PHP_EOL."</li>".PHP_EOL;
		}
		else 
		{ // no submenu
			$out .= isActive($child) ? "<li class='active'>" : "<li>";
			// markup for the link
				$out .= "<a href='$child->url'>$child->title</a></li>".PHP_EOL;								
			}
	}
	
	// if output was generated above, wrap it in bootstrap menu classes
	if($out)
	{// navbar-brand is home page button
		$wrap = "<nav class='navbar navbar-inverse'>".PHP_EOL;
		$wrap .= "<div class='navbar-header'>".PHP_EOL;
		$wrap .= "<a class='navbar-brand' href='$homepage->url'>$homepage->title</a></div>".PHP_EOL;
		$wrap .= "<ul class='nav navbar-nav'>".PHP_EOL;
		$out = $wrap.$out."</ul>".PHP_EOL."</nav>".PHP_EOL;
	}	
	
	return $out;
}
