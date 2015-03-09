<?php

/**
 * This file is part of the DmishhSettingsBundle package.
 *
 * (c) 2013 Dmitriy Scherbina <http://dmishh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Dmishh\Bundle\SettingsBundle\Manager;

use Dmishh\Bundle\SettingsBundle\Entity\SettingOwner;

interface SettingsManagerInterface
{
    const SCOPE_ALL    = 'all';
    const SCOPE_GLOBAL = 'global';
    const SCOPE_USER   = 'user';

    /**
     * Returns setting value by its name
     *
     * @param string $name
     * @param SettingOwner|null $owner
     *
*@return mixed
     */
    function get($name, SettingOwner $owner = null);

    /**
     * Returns all settings as associative name-value array
     *
     * @param SettingOwner|null $owner
     *
*@return array
     */
    function all(SettingOwner $owner = null);

    /**
     * Sets setting value by its name
     *
     * @param string $name
     * @param mixed $value
     * @param SettingOwner|null $owner
     *
*@return SettingsManagerInterface
     */
    function set($name, $value, SettingOwner $owner = null);

    /**
     * Sets settings' values from associative name-value array
     *
     * @param array $settings
     * @param SettingOwner|null $owner
     *
*@return SettingsManagerInterface
     */
    function setMany(array $settings, SettingOwner $owner = null);

    /**
     * Clears setting value
     *
     * @param string $name
     * @param SettingOwner|null $owner
     *
*@return SettingsManagerInterface
     */
    function clear($name, SettingOwner $owner = null);
}
