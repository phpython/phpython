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

class UpdateCommand extends Command
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
     * Run update command.
     *
     * @param array $args
     *
     * @return string
     */
    public function run($args)
    {
        // update specific repository
        if (isset($args[1]) && $args[1]) {
            return shell_exec(__DIR__.'/../exec/update.sh '.$this->cwd.' '.$args[1]);
        }

        // update env
        $env = basename($this->cwd);
        echo "\n> $env\n----------------------------\n";
        echo shell_exec(__DIR__.'/../exec/update-env.sh '.$this->cwd);

        // update all repositories
        $path = $this->cwd.'/repository';
        foreach (scandir($path) as $name) {
            if ($name[0] != '.' && is_dir($path.'/'.$name)) {
                echo "\n> $name\n----------------------------\n";
                echo shell_exec(__DIR__.'/../exec/update.sh '.$this->cwd.' '.$name);
            }
        }
    }
}
