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

class CloneCommand extends Command
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
     * Run clone command.
     *
     * @param $args
     *
     * @return string
     */
    public function run($args)
    {
        //
        if (!isset($args[0]) || !$args[0]) {
            return "> Producer: Repository url or package name required.\n";
        }

        //
        $repo = trim($args[0]);

        //
        if (preg_match('/^(http:\/\/|https:\/\/)/i', $repo)) {
            $name = isset($args[1]) ? $args[1] : basename($args[0], '.git');

            //
            if (is_dir($this->cwd.'/repository/'.$name)) {
                return "> Producer: Project 'repository/{$name}' already exists.\n";
            }

            //
            echo shell_exec(__DIR__.'/../exec/clone-url.sh '.$this->cwd.' '.$repo.' '.$name);
            $json = json_decode(file_get_contents($this->cwd.'/repository/'.$name.'/composer.json'));

            return shell_exec(__DIR__.'/../exec/clone-install.sh '.$this->cwd.' '.$json->name.' '.$name);
        }

        //
        elseif (preg_match('/^[a-z][a-z0-9-]*\/[a-z][a-z0-9-]*$/', $repo)) {
            echo shell_exec(__DIR__.'/../exec/clone-require.sh '.$this->cwd.' '.$repo);
            $comp = $this->cwd.'/vendor/'.$repo.'/composer.json';
            if (!file_exists($comp)) {
                return "> Producer: Package not found.\n";
            }
            $json = json_decode(file_get_contents($comp));
            $pack = $repo;
            $repo = null;
            if (isset($json->repositories)) {
                foreach ($json->repositories as $item) {
                    if ($item->type == 'git') {
                        $repo = $item->url;
                        break;
                    }
                }
            }
            if ($repo) {
                //
                $name = isset($args[1]) ? $args[1] : basename($repo, '.git');

                //
                if (is_dir($this->cwd.'/repository/'.$name)) {
                    return "> Producer: Project directory 'repository/{$name}' already exists.\n";
                }

                return shell_exec(__DIR__.'/../exec/clone-complete.sh '.$this->cwd.' '.$repo.' '.$name.' '.$pack);
            } else {
                return "> Producer: Repository not found on composer.json.\n";
            }
        } else {
            return "> Producer: Malformed url or package name.\n";
        }
    }
}
