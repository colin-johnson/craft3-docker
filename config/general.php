<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 */

return [
  // Base site URL
  'devMode' => getenv('DEV_MODE'),
  'siteName' => getenv('SITE_NAME'),
  'siteUrl' => getenv('SITE_URL'),
  'useCompressedJs' => getenv('USE_COMPRESSED_JS'),
  'securityKey' => getenv('SECURITY_KEY'),
  'maxUploadFileSize' => 209715200,
  'defaultWeekStartDay' => 0,
  // Enable CSRF Protection (recommended, will be enabled by default in Craft 3)
  'enableCsrfProtection' => true,
  // Whether "index.php" should be visible in URLs (true, false, "auto")
  'omitScriptNameInUrls' => true,
  // Control Panel trigger word
  'cpTrigger' => 'admin',
];
