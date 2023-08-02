<?php

namespace JfBiswajit\PHPBigQuery\Facades;

use Illuminate\Support\Facades\Facade;

class BigQuery extends Facade
{
  protected static function getFacadeAccessor()
  {
    return 'bigquery';
  }
}
