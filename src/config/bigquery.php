<?php

return [
  'keyFilePath' => env('GOOGLE_APPLICATION_CREDENTIALS', storage_path('app/bigquery-credentials.json')),
  'projectId' => env('GOOGLE_CLOUD_PROJECT_ID'),
];
