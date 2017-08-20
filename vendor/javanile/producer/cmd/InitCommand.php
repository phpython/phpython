<?php
/**
 * Init Command for Producer.
 *
 * PHP version 5
 *
 * @category   ProducerCommand
 *
 * @author     Francesco Bianco <bianco@javanile.org>
 * @license    https://goo.gl/KPZ2qI  MIT License
 * @copyright  2015-2017 Javanile.org
 */

namespace Javanile\Producer\Commands;

class InitCommand extends Command
{
    /**
     * Current working directory for running script.
     */
    private $cwd = null;

    /**
     * InitCommand constructor.
     *
     * @param $cwd
     */
    public function __construct($cwd)
    {
        $this->cwd = $cwd;
    }

    /**
     * Run init command.
     *
     * @param $args
     *
     * @return string
     */
    public function run($args)
    {
        // init env
        if (!isset($args[0]) || !$args[0]) {
            $repo = shell_exec(__DIR__.'/../exec/init-env-origin.sh '.$this->cwd);
            $this->initComposerJson($this->cwd, $repo);
            $this->initPhpUnitXml($this->cwd, $repo);
            $this->initPackageClassPhp($this->cwd, $repo);
            $this->initPackageClassTestPhp($this->cwd, $repo);
            $this->initCodeclimateYml($this->cwd, $repo);
            $this->initTravisYml($this->cwd, $repo);
            echo shell_exec(__DIR__.'/../exec/init-env-update.sh '.$this->cwd);
            return "> Producer: Environment project initialized.\n";
        }

        // init by
        $repo = trim($args[0]);
        if (preg_match('/^(http:\/\/|https:\/\/)/i', $repo)) {
            $name = isset($args[1]) ? $args[1] : basename($args[0], '.git');

            echo shell_exec(__DIR__.'/../exec/clone-url.sh '.$this->cwd.' '.$repo.' '.$name);
        }

        return "> Producer: malformed repository url.\n";
    }

    /**
     *
     */
    private function initComposerJson($path, $repo)
    {
        // init composer.json
        $json = [];
        $file = $path.'/composer.json';
        $pack = $this->getPackage($repo);

        if (file_exists($file)) {
            $json = json_decode(file_get_contents($file));
        }

        if (!isset($json->name)) {
            $json->name = $pack;
        }

        if (!isset($json->version)) {
            $json->version = '0.0.1';
        }

        if (!isset($json->repositories)) {
            $json->repositories = [['type' => 'git', 'url' => $repo]];
        }

        file_put_contents($file, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    }

    /**
     *
     */
    private function initPhpUnitXml($path)
    {
        $file = $path.'/phpunit.xml';
        if (file_exists($file)) {
            return;
        }
        copy(__DIR__.'/../tpl/phpunit.xml.txt', $file);
    }

    /**
     *
     */
    private function initPackageClassPhp($path, $repo)
    {
        $class = $this->getClass($repo);
        $namespace = $this->getNamespace($repo);
        $file = $path.'/src/'.$class.'.php';
        if (file_exists($file)) {
            return;
        }
        $code = file_get_contents(__DIR__.'/../tpl/PackageClass.php.txt');
        $code = str_replace(['%%CLASS%%', '%%NAMESPACE%%'], [$class, $namespace], $code);
        if (!is_dir($path.'/src')) {
            mkdir($path.'/src');
        }
        file_put_contents($file, $code);
    }

    /**
     *
     */
    private function initPackageClassTestPhp($path, $repo)
    {
        $class = $this->getClass($repo);
        $namespace = $this->getNamespace($repo);
        $file = $path.'/tests/'.$class.'Test.php';
        if (file_exists($file)) {
            return;
        }
        $code = file_get_contents(__DIR__.'/../tpl/PackageClassTest.php.txt');
        $code = str_replace(['%%CLASS%%', '%%NAMESPACE%%'], [$class, $namespace], $code);
        if (!is_dir($path.'/tests')) {
            mkdir($path.'/tests');
        }
        file_put_contents($file, $code);
    }

    /**
     *
     */
    private function initCodeclimateYml($path, $repo)
    {
        $file = $path.'/.codeclimate.yml';
        if (file_exists($file)) {
            return;
        }
        copy(__DIR__.'/../tpl/.codeclimate.yml.txt', $file);
    }

    /**
     *
     */
    private function initTravisYml($path, $repo)
    {
        $file = $path.'/.travis.yml';
        if (file_exists($file)) {
            return;
        }
        copy(__DIR__.'/../tpl/.travis.yml.txt', $file);
    }

    /**
     * Get package name by repository url.
     */
    private function getPackage($repo)
    {
        $package = trim(basename($repo, '.git'));
        $vendor = trim(basename(dirname($repo), '.git'));

        return strtolower($vendor.'/'.$package);
    }

    /**
     * Get package name by repository url.
     */
    private function getNamespace($repo)
    {
        $package = trim(ucfirst(basename($repo, '.git')));
        $vendor = trim(ucfirst(basename(dirname($repo), '.git')));

        return $vendor.'\\'.$package;
    }

    /**
     * Get class name by repository url.
     */
    private function getClass($repo)
    {
        $class = basename($repo, '.git');

        return ucfirst(trim($class));
    }
}
