<?php
App::uses('AppModel', 'Model');
/**
 * Config Model
 *
 */
class Config extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Config';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'Name';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'Value';

}
