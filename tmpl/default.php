<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<?php 
	$doc = JFactory::getDocument();
	$doc->addScriptDeclaration("
		jQuery(window).load(function() {
			jQuery('#Mod223 .module-ct').load('index.php?option=com_k2&view=itemlist&task=filter&searchword12=Knjiznica+Bezigrad&moduleId=171&Itemid=974 .genericItemView');
		});
	");
?>