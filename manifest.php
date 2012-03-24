<?php 
$manifest = array( 
	'acceptable_sugar_versions' => array (
		'regex_matches' => array (
			"6\.1\.0*",
		),
	),
	'acceptable_sugar_flavors' => array (
		'CE',
	),
	'name' => 'JapaneseLanguagePack',
	'description' => 'SugarCE Japanese Language Pack (lang-file-only)',
	'type' => 'langpack',
	'is_uninstallable' => true,
	'version' => '6.1',
	'published_date' => '2010-11-24 1:00:00',
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