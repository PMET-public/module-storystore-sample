<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace StoryStore\Sample\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use MagentoEse\DataInstall\Model\Process;
use MagentoEse\DataInstall\Helper\Helper;

/**
 * Recurring data install.
 */
class RecurringData implements InstallDataInterface
{
     /** @var Process  */
     protected $process;

    
     /** @var Helper */
     protected $helper;

    
    protected $moduleName;

    public function __construct(Process $process, Helper $helper)
    {
        $this->process = $process;
        $this->helper = $helper;
    }

    /**
     * {@inheritdoc}
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /**
         * Options:
         * $fixtures = the data files directory can be any directory in the root of the module, or a subdirectory (fixtures/grocery)
         * $files = This can be a comma delimited list of files in the order to be processed. If left empty all files will be processed
         * It is recommended to set $files to specific values:
         * InstallStores.php $files='stores'
         * Install.php $files='start'
         * RecurringData.php $files='End'
         */


        $fixtures = 'fixtures';
        $files = 'end';

        $this->process->loadFiles($this->helper->getModuleName(),$fixtures,explode(",",$files));
    }

}
