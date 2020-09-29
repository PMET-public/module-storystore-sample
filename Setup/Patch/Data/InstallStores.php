<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * The loading of data to create sites, stores and views is done in a separate patch.
 * This will avoid the errors of table definitions changing when loading the other data
 */

namespace StoryStore\Sample\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use MagentoEse\DataInstall\Model\Process;

class InstallStores implements DataPatchInterface
{
    /** @var Process  */
    protected $process;

    public function __construct(Process $process)
    {
        $this->process = $process;
    }

    public function apply()
    {
        /**
         * $this->process->loadFiles(<name of module>,<data files directory (defaults to fixtures),array of filenames to process (optional)>
         *
         * the data files directory can be any directory in the root of the module, or a subdirectory (fixtures/grocery)
         */
        $this->process->loadFiles('StoryStore_Sample','fixtures',['stores.csv']);
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }
}
