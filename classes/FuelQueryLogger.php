<?php
/**
 * @package ActiveRecord
 */
namespace ActiveRecord;


class FuelQueryLogger
{
    public function log($sql, $values=array())
    {
            foreach($values as $value) $sql = preg_replace('/\?/', '"'.$value.'"', $sql, 1);
            \Fuel\Core\Profiler::start('', $sql);
            \Fuel\Core\Profiler::stop('');
    }
}