<?php 
$manifest = array( 
	'acceptable_sugar_versions' => array (
		'regex_matches' => array (
			"6\.5\.*",
			"6\.4\.*",
		),
	),
	'acceptable_sugar_flavors' => array (
		'CE',
	),
	'name' => 'JapaneseLanguagePack',
	'description' => 'SugarCE Japanese Language Pack (lang-file-only)',
	'type' => 'langpack',
	'is_uninstallable' => true,
	'version' => '6.5',
	'published_date' => '2012-03-25 17:00:00',
	'author' => 'SugarForum.jp',
);

$installdefs = array(
	'id'=> 'ja',
	'image_dir'=>'<basepath>/images',
	'copy' => array(
		array('from'=> '<basepath>/include','to'=> 'include'),
		array('from'=> '<basepath>/modules','to'=> 'modules'),
	)
);
?>