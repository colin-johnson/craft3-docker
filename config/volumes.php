<?php

return [
  'localAssets' => [
    'url' => getenv('ASSETS_BASE_URL'),
    'path' => getenv('ASSETS_BASE_PATH'),
  ],
  'AWS-S3' => [
    'hasUrls' => true,
    'url' => 'https://s3-eu-west-1.amazonaws.com/' . getenv('AWS_BUCKET') . '/',
    'keyId' => getenv('AWS_KEY'),
    'secret' => getenv('AWS_SECRET'),
    'bucket' => getenv('AWS_BUCKET'),
    'region' => getenv('AWS_REGION'),
  ],
  'siteAssets' => [
    'path' => getenv('ASSETS_BASE_PATH').'/site',
    'url' => getenv('ASSETS_BASE_URL').'/site',
  ],
  'companyLogos' => [
    'path' => getenv('ASSETS_BASE_PATH').'/logos',
    'url' => getenv('ASSETS_BASE_URL').'/logos',
  ],
];
