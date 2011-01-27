<?php

// TODO : load db config into php.activerecord config and set same default config as default for it

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