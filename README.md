# Story Store Sample Module

This is an example of a module compatible with the MagentoEse Data Installer.

The example shown is compatible with the Data Installer command line tool: `bin/magento gxd:datainstall`

#### Usage

- Replace any refrences to **StoryStore** & **SampleData** to your appropriate **Vendor_Module** names in composer.json, module.xml and registration.php
- Follow the naming convention in the ``data/store`` directory for the specific data types
- Follow the directory structure in the ``media`` directory when adding the different image types: products, wysiwyg, etc.

#### Installation via setup:upgrade
Data installation can be done via a Magento setup:upgrade process.  However, some installations can be problematic, especially when it comes to mulit-store and more complex configurations.

In order to support this, rename the ``Setup_sample`` directory to ``Setup``. You will also need to change the namespaces in the included .php files to match your module namespace.
