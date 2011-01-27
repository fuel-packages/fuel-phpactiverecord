<?php

// Load the utils manually, has some non-autoloadable functions
require __DIR__.DS.'classes'.DS.'Utils.php';

// Get Fuel's DB config
$default = Config::get('db.active');
$connections = array();
foreach (Config::get('db', array()) as $cname => $cdata)
{
	if (is_array($cdata))
	{
		if ( ! empty($cdata['connection']['dsn']))
		{
			$connections[$cname] = $cdata['connection']['dsn'];
		}
		elseif ( ! empty($cdata['connection'])
		{
			$connections[$cname] = $cdata['type'].'://'.$cdata['connection']['username'].':'.
				$cdata['connection']['password'].'@'.$cdata['connection']['hostname'].'/'.$cdata['connection']['database'];
		}
	}
}

// Load Fuel's DB config into php.AR
\ActiveRecord\Config::initialize(function($cfg) use ($connections, $default)
{
	$db = \Config::get('db.current.connection');
	$db['type'] = \Config::get('db.current.type');
	$cfg->set_model_directory(APPPATH.'classes/model');
	$cfg->set_connections(array(
		'current' => $db['type'].'://'.$db['username'].':'.$db['password'].'@'.$db['hostname'].'/'.$db['database']
	));
	$cfg->set_default_connection('current');
});

// Register php.AR classes with autoloader
// The filenames are left unchanged to allow easy updating, they don't have to follow Fuel's conventions
// when registered like this.
Fuel\Core\Autoloader::add_classes(array(

	'ActiveRecord\\CallBack'			=> __DIR__.'/classes/CallBack.php',
	'ActiveRecord\\Config'				=> __DIR__.'/classes/Config.php',
	'ActiveRecord\\Connection'			=> __DIR__.'/classes/Connection.php',
	'ActiveRecord\\ConnectionManager'	=> __DIR__.'/classes/ConnectionManager.php',
	'ActiveRecord\\Model'				=> __DIR__.'/classes/Model.php',
	'ActiveRecord\\Singleton'			=> __DIR__.'/classes/Singleton.php',
	'ActiveRecord\\SQLBuilder'			=> __DIR__.'/classes/SQLBuilder.php',
	'ActiveRecord\\Table'				=> __DIR__.'/classes/Table.php',
	'ActiveRecord\\Reflections'			=> __DIR__.'/classes/Reflections.php',

	'ActiveRecord\\ActiveRecordException'				=> __DIR__.'/classes/Exceptions.php',
	'ActiveRecord\\ConfigException'						=> __DIR__.'/classes/Exceptions.php',
	'ActiveRecord\\DatabaseException'					=> __DIR__.'/classes/Exceptions.php',
	'ActiveRecord\\ExpressionsException'				=> __DIR__.'/classes/Exceptions.php',
	'ActiveRecord\\HasManyThroughAssociationException'	=> __DIR__.'/classes/Exceptions.php',
	'ActiveRecord\\ModelException'						=> __DIR__.'/classes/Exceptions.php',
	'ActiveRecord\\ReadOnlyException'					=> __DIR__.'/classes/Exceptions.php',
	'ActiveRecord\\RecordNotFound'						=> __DIR__.'/classes/Exceptions.php',
	'ActiveRecord\\RelationshipException'				=> __DIR__.'/classes/Exceptions.php',
	'ActiveRecord\\UndefinedPropertyException'			=> __DIR__.'/classes/Exceptions.php',
	'ActiveRecord\\ValidationsArgumentError'			=> __DIR__.'/classes/Exceptions.php',

	'ActiveRecord\\Inflector'			=> __DIR__.'/classes/Inflector.php',
	'ActiveRecord\\StandardInflector'	=> __DIR__.'/classes/Inflector.php',

	'ActiveRecord\\AbstractRelationship'	=> __DIR__.'/classes/Relationship.php',
	'ActiveRecord\\BelongsTo'				=> __DIR__.'/classes/Relationship.php',
	'ActiveRecord\\HasAndBelongsToMany'		=> __DIR__.'/classes/Relationship.php',
	'ActiveRecord\\HasMany'					=> __DIR__.'/classes/Relationship.php',
	'ActiveRecord\\HasOne'					=> __DIR__.'/classes/Relationship.php',
	'ActiveRecord\\InterfaceRelationship'	=> __DIR__.'/classes/Relationship.php',

	'ActiveRecord\\JsonSerializer'		=> __DIR__.'/classes/Serialization.php',
	'ActiveRecord\\Serialization'		=> __DIR__.'/classes/Serialization.php',
	'ActiveRecord\\XmlSerializer'		=> __DIR__.'/classes/Serialization.php',
));

/* End of file bootstrap.php */