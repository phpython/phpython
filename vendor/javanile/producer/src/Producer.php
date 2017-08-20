<?php
/**
 * Command line tool for vendor code.
 *
 * PHP version 5
 *
 * @category   CommandLine
 *
 * @author     Francesco Bianco <bianco@javanile.org>
 * @license    https://goo.gl/KPZ2qI  MIT License
 * @copyright  2015-2017 Javanile.org
 */

namespace Javanile;

use Composer\Autoload\ClassLoader;
use Javanile\Producer\Commands\InitCommand;
use Javanile\Producer\Commands\TestCommand;
use Javanile\Producer\Commands\CloneCommand;
use Javanile\Producer\Commands\PurgeCommand;
use Javanile\Producer\Commands\UpdateCommand;
use Javanile\Producer\Commands\PublishCommand;

/**
 * Class Producer.
 */
class Producer
{
    /**
     * Current working directory for running script.
     */
    private $cwd = null;

    /**
     * Producer constructor.
     *
     * @param string $cwd current working directory
     */
    public function __construct($cwd)
    {
        $this->cwd = $cwd;
    }

    /**
     * Entry point for command-line interface.
     */
    public static function cli($args)
    {
        $cwd = getcwd();
        $cli = new self($cwd);

        return $cli->run(array_slice($args, 1));
    }

    /**
     * Script runner.
     */
    protected function run($args)
    {
        if (!isset($args[0])) {
            return "> Producer: Command required.\n";
        }

        switch (trim($args[0])) {
            case 'init':
                return $this->runInit($args);
            case 'test':
                return $this->cmdTest($args);
            case 'clone':
                return $this->cmdClone($args);
            case 'purge':
                return $this->cmdPurge($args);
            case 'update':
                return $this->runUpdate($args);
            case 'install':
                return $this->cmdInstall();
            case 'publish':
                return $this->cmdPublish($args);
            case '--version':
                return $this->cmdVersion();
            case '--help':
                return $this->cmdHelp($args);
            default:
                return "> Producer: Undefined '{$args[0]}' command.\n";
        }
    }

    /**
     * Init script.
     */
    private function runInit($args)
    {
        $cmd = new InitCommand($this->cwd);

        return $cmd->run(array_slice($args, 1));
    }

    /**
     * Test runner command.
     *
     * @param array $args  Arguments from command line
     *
     * @return string|void
     */
    private function cmdTest($args)
    {
        $cmd = new TestCommand($this->cwd);

        return $cmd->run(array_slice($args, 1));
    }

    /**
     * Clone script.
     */
    private function cmdClone($args)
    {
        $cmd = new CloneCommand($this->cwd);

        return $cmd->run(array_slice($args, 1));
    }

    /**
     * Purge script.
     */
    private function cmdPurge($args)
    {
        $cmd = new PurgeCommand($this->cwd);

        return $cmd->run(array_slice($args, 1));
    }

    /**
     * Publish script.
     */
    private function runUpdate($args)
    {
        $cmd = new UpdateCommand($this->cwd);

        return $cmd->run(array_slice($args, 1));
    }

    /**
     * Install script.
     */
    private function cmdInstall()
    {
        // Installation process are performed
        // throught 'bin/producer' scripting file
        return "> Producer: Installation complete.\n";
    }

    /**
     * Publish script.
     */
    private function cmdPublish($args)
    {
        $cmd = new PublishCommand($this->cwd);

        return $cmd->run(array_slice($args, 1));
    }

    /**
     * Return version.
     */
    private function cmdVersion()
    {
        $json = json_decode(file_get_contents(__DIR__.'/../composer.json'));

        return "> Producer: version {$json->version}\n";
    }

    /**
     * Return commanline helps.
     *
     * @param array $args help arguments
     *
     * @return string
     */
    private function cmdHelp($args)
    {
        $help = isset($args[1]) ? $args[1] : 'help';
        $file = __DIR__.'/../help/'.$help.'.txt';

        if (!file_exists($file)) {
            return "> Producer: Not found help for '{$help}' command.\n";
        }

        return file_get_contents(__DIR__.'/../help/'.$help.'.txt');
    }

    /**
     * Tool to register Psr4 'namespaces vs paths'.
     *
     * @param array $paths a pairs of namespace and path to register
     */
    public static function addPsr4($paths)
    {
        $loader = new ClassLoader();

        foreach ($paths as $namespace => $path) {
            $loader->addPsr4($namespace, $path);
        }

        $loader->register();
    }

    /**
     * Log messages on 'producer.log' file.
     *
     *
     */
    public static function log($object)
    {
        $cwd = getcwd();
        $log = $cwd.'/producer.log';

        file_put_contents($log, "> ".trim($object)."\n", FILE_APPEND);
    }
}
