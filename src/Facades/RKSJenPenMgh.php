<?php namespace Bantenprov\RKSJenPenMgh\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The RKSJenPenMgh facade.
 *
 * @package Bantenprov\RKSJenPenMgh
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RKSJenPenMgh extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rks-jen-pen-mgh';
    }
}
