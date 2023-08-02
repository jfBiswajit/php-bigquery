<?php

namespace JfBiswajit\PHPBigQuery\Providers;

use Illuminate\Support\ServiceProvider;
use Google\Cloud\BigQuery\BigQueryClient;


class BigQueryServiceProvider extends ServiceProvider
{
  public function boot()
  {
    $this->mergeConfigFrom(__DIR__ . '/../config/bigquery.php', 'bigquery');

    $this->app->bind('bigquery', function ($app) {
      return new BigQueryClient([
        'projectId' => config('bigquery.projectId'),
        'keyFilePath' => config('bigquery.keyFilePath'),
      ]);
    });
  }
}
