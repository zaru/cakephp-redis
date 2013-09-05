<?php
App::uses('Model', 'Model');

class RedisModel extends Model {
  public $useTable = false;
  public $useDbConfig = 'redis';

  public function set() {
    return $this->getDataSource()->query('set', func_get_args(), $this);
  }
}
