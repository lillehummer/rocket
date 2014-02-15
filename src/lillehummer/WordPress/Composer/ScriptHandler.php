<?php

namespace lillehummer\Wordpress\Composer;

use Composer\IO\IOInterface;
use Composer\Script\Event;
use Composer\Composer;
use lillehummer\Composer\Utils\Filesystem\PathUtil;
use lillehummer\Composer\Utils\Composer\PackageLocator;

class ScriptHandler
{
    public static function generateRandomKeys(Event $event)
    {
        $composer = $event->getComposer();
        $io       = $event->getIO();
        $extras   = $composer->getPackage()->getExtra();
        $web_dir  = getcwd();

        $file = "$web_dir/salts.php";

        if (!is_file($file)) {
            if (is_writable(dirname($file))) {
                $api = 'https://api.wordpress.org/secret-key/1.1/salt/';
                $io->write(sprintf('<info>Generating secret keys using %s</info>', $api));

                $rnd = "<?php\n\n" . file_get_contents($api);
                file_put_contents($file, $rnd);
            } else {
                $io->write('<error>Error while generating secret keys: random-keys.php is not writable</error>');
            }
        }
    }
}
