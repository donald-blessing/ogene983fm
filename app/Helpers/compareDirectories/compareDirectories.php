<?php

declare(strict_types=1);

namespace App\Helpers\compareDirectories;

/**
 * * Copyright © Larry Wakeman - 2013
 * *
 * * All rights reserved. No part of this publication may be reproduced, stored in a retrieval system,
 * * or transmitted in any form or by any means without the prior written permission of the copyright
 * * owner and must contain the avove copyright notice.
 * *
 */
class compareDirectories
{
    private $source;

    private $update;

    private $removed = [];

    private $added = [];

    private $changed = [];

    public function set_source($source)
    {
        $this->source = $source;
    }

    public function set_update($update)
    {
        $this->update = $update;
    }

    public function get_source()
    {
        return $this->source;
    }

    public function get_update()
    {
        return $this->update;
    }

    public function get_removed()
    {
        return $this->removed;
    }

    public function get_added()
    {
        return $this->added;
    }

    public function get_changed()
    {
        return $this->changed;
    }

    public function do_compare()
    {
        $source = [];
        $destination = [];
        $currentDirectory = getcwd();
        chdir($this->source);
        $source = $this->doTree('.', $source);
        if (! is_array($source)) {
            return;
        }
        chdir($this->update);
        $destination = $this->doTree('.', $destination);
        if (! is_array($destination)) {
            exit;
        }
        chdir($currentDirectory);
        foreach ($source as $dir => $value) {
            foreach ($value as $file => $hash) {
                if (isset($destination[$dir][$file])) {
                    if ($hash != $destination[$dir][$file]) {
                        $this->changed[] = $dir.'/'.$file;
                    }
                } else {
                    $this->removed[] = $dir.'/'.$file;
                }
            }
        }
        foreach ($destination as $dir => $value) {
            foreach ($value as $file => $hash) {
                if (! isset($source[$dir][$file])) {
                    $this->added[] = $dir.'/'.$file;
                }
            }
        }
    }

    private function checksum($file)
    {
        $ignores = [10, 13];
        $fh = fopen($file, 'r');
        $buffer = '';
        while (! feof($fh)) {
            $buffer .= fgets($fh);
        }
        fclose($fh);
        foreach ($ignores as $ignore) {
            while (strpos($buffer, chr($ignore))) {
                $buffer = str_replace(chr($ignore), '', $buffer);
            }
        }

        return hash('crc32', $buffer).hash('crc32b', $buffer);
    }

    private function doTree($dir, &$array)
    {
        if (stripos((string) $dir, 'checksum') !== false || stripos((string) $dir, 'cache') !== false || stripos((string) $dir, 'import') !== false || stripos((string) $dir, 'custom') !== false || stripos((string) $dir, '_notes') !== false || stripos((string) $dir, '.svn') !== false) {
            return $array;
        }
        $filetypes = ['php', 'js', 'htm', 'html', 'css', 'tpl', 'ini', 'txt'];
        if ($dh = opendir($dir)) {
            while ($file = readdir($dh)) {
                if ($file !== '.' && $file !== '..') {
                    if (is_dir($dir.'/'.$file)) {
                        if (count($array) === 0) {
                            $array[0] = 'Temp';
                        }
                        if (! $this->doTree($dir.'/'.$file, $array)) {
                            return false;
                        }
                    } elseif (filesize($dir.'/'.$file)) {
                        foreach ($filetypes as $type) {
                            if (! str_starts_with($file.'|', '.'.$type.'|')) {
                                set_time_limit(30);
                                $array[$dir][$file] = $this->checksum($dir.'/'.$file); // md5_file($dir.'/'.$file, false);
                            }
                        }
                    }
                }
            }
            if (count($array) > 1 && isset($array['0'])) {
                unset($array['0']);
            }

            return $array;
        } else {
            echo 'error opening '.$dir.'</h3>';

            return false;

        }
    }
}
