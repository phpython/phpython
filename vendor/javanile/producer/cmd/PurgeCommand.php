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

class PurgeCommand extends Command
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
     * Run purge command.
     *
     * @param $args
     *
     * @return string
     */
    public function run($args)
    {
        //
        if (!isset($args[0]) || !$args[0]) {
            return "> Producer: Project directory required.\n";
        }

        //
        $name = trim($args[0]);

        //
        if (!is_dir($this->cwd.'/repository/'.$name)) {
            return "> Producer: Project directory 'repository/{$name}' not found.\n";
        }

        //
        $json = null;
        $comp = $this->cwd.'/repository/'.$name.'/composer.json';
        if (file_exists($comp)) {
            $json = json_decode(file_get_contents($comp));
        }

        //
        echo shell_exec(__DIR__.'/../exec/purge-rm.sh '.$this->cwd.' '.$name);

        //
        if (isset($json->name)) {
            echo shell_exec(__DIR__.'/../exec/purge-remove.sh '.$this->cwd.' '.$json->name);
        }
    }
}
