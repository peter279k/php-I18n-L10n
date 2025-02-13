<?php
declare(strict_types = 1);
/* This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/. */
namespace Wdes\PIL;

use \Wdes\PIL\plugins\BasePlugin;

/**
 * Plugin for reading .mo files
 * @see https://www.gnu.org/software/gettext/manual/html_node/MO-Files.html
 * @author William Desportes <williamdes@wdes.fr>
 * @license MPL-2.0
 */
class Launcher
{
    /**
     * Plugin to use for translation
     *
     * @var BasePlugin
     */
    public static $plugin;

    /**
     * Return regitered plugin
     *
     * @return BasePlugin
     */
    public static function getPlugin(): BasePlugin
    {
        return Launcher::$plugin;
    }

}
