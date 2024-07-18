<?php

declare(strict_types=1);

namespace zzt\Core;

use Exception;
use Latte;
use zzt\Exception\ConfigException;

/**
 * Main application.
 *
 * @author Cristian Cornea <contact@corneascorner.dev>
 */
final class Application
{
  private static ?Application $instance = null;
  public readonly ?Config $config;
  private string $currentModule;

  /**
   * @param string[] $config  Main application config (from config.php)
   * @param Latte\Engine $template  Template system
   */
  private function __construct(
    array $config,
    public readonly Latte\Engine $template
  ) {
    $this->config = new Config($config);
  }

  /**
   * Returns the current module during bootstrap phase.
   *
   * @return string  Name of the current module
   */
  public function getCurrentModule(): string
  {
    return $this->currentModule;
  }

  /**
   * Returns the application.
   *
   * @return Application
   */
  public static function getInstance(): self
  {
    if (self::$instance === null) {
      throw new Exception("Application not initialized. Something went wrong on bootstrap.");
    }
    return self::$instance;
  }

  /**
   * Init application during bootstrap.
   *
   * @param string[] $config  Main application config (from config.php)
   * @param Latte\Engine $template  Template system
   * @return Application
   */
  public static function init(array $config, array $modules, Latte\Engine $template): self
  {
    if (self::$instance !== null) {
      throw new Exception("Application already initialized. Something went wrong.");
    }

    self::$instance = new self($config, $template);
    self::$instance->initModules($modules);
    return self::$instance;
  }

  /**
  * Initialized all registered modules.
  *
  * @param string[] $modules  Registered module
  */
  private function initModules(array $modules): void
  {
    // Initialize modules
    foreach ($modules as $name => $module) {
      $this->currentModule = $name;
      require $module;
    }
  }
}

/**
* Application config.
*/
final class Config
{
  public readonly string $modulesFolder;
  public readonly string $viewsFolder;
  public readonly string $templateDir;
  public readonly string $basePath;

  public function __construct(array $config)
  {
    if (!isset($config['base'])) {
      throw new ConfigException('base');
    }
    $base = $config['base'];

    if (!isset($config['base_path'])) {
      throw new ConfigException('base_path');
    }
    if (!isset($base['modules_folder'])) {
      throw new ConfigException('modules_folder');
    }
    if (!isset($base['modules_view_folder'])) {
      throw new ConfigException('modules_view_folder');
    }
    if (!isset($base['template_dir'])) {
      throw new ConfigException('template_dir');
    }
    $this->modulesFolder = $base['modules_folder'];
    $this->viewsFolder = $base['modules_view_folder'];
    $this->templateDir = $base['template_dir'];
    $this->basePath = $config['base_path'];
  }
}
