<?php

/**
 * @file
 * Config split settings.
 */

switch ($settings['environment']) {
  case ENVIRONMENT_TEST:
    $config['config_split.config_split.test']['status'] = TRUE;
    break;

  case ENVIRONMENT_DEV:
    $config['config_split.config_split.dev']['status'] = TRUE;
    break;

  case ENVIRONMENT_CI:
    $config['config_split.config_split.ci']['status'] = TRUE;
    break;

  case ENVIRONMENT_LOCAL:
    $config['config_split.config_split.local']['status'] = TRUE;
    break;
}
