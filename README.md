# OJSOnline-MultiLanf-Url

OJS plugin for Open Journal System (http://pkp.sfu.ca/ojs).
Adds the selected language in the URL for indexing by the search engines journal pages in different languages.


# License

This plugin is licensed under the GNU General Public License v2. See the file COPYING for the complete terms of this license.



# System Requirements

Open Journal System >= 3.1.2

# Plugin Installation
 - Download the latest release in folder https://github.com/ojsonline/OJSOnline-MultiLang-Url/
 - Goto index.php/[journalid]/ojsonlinejournal/management/settings/website
 - Click on "Plugins"
 - Click on "Upload A New Plugin"
 - Choose 
   ```   
   
   
   ```

# Manual Installation

To install the plugin:
 - copy the plugin folder file to your OJS/plugins/generic directory
 - to unzip the plugin inside the plugins/generic directory:
    ```
    $ tar xvzf articlesExtras-1.0.tar.gz
    ```
 - add record to versions table on your OJS installation.
    ```
    INSERT INTO `ojs`.`versions` (
    `major` ,
    `minor` ,
    `revision` ,
    `build` ,
    `date_installed` ,
    `current` ,
    `product_type` ,
    `product` ,
    `product_class_name` ,
    `lazy_load` ,
    `sitewide`
    )
    VALUES (
    '2', '1', '0', '0', NOW(), '1', 'plugins.generic', 'articlesExtras', 'ArticlesExtrasPlugin', '1', '0'
    );
    ```
 - enable the plugin at:
    ```
    index.php/[journalId]/manager/plugins/generic
    ```
 - acces the plugin here:
    ```
    index.php/[journalId]/editor
    ```

## Bug tracker

Have a bug or a feature request? [Please open a new issue](https://github.com/damnpoet/ojs-articlesextras/issues). Before opening any issue, please search for existing issues and read the [Issue Guidelines](https://github.com/necolas/issue-guidelines), written by [Nicolas Gallagher](https://github.com/necolas/).



## Author

**Alexander Dolgov**

+ [http://twitter.com/damnpoet](http://twitter.com/damnpoet)
+ [http://github.com/damnpoet](http://github.com/damnpoet)
+ [alexander122d@gmail.com](mailto:alexander122d@gmail.com)
