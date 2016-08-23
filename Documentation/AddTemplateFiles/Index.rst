.. include:: Includes.txt

Overview
========

Headline 1
----------

In order to implement the visual appearance of the new website, Angela copies all *static* files, which TYPO3 will not change dynamically at run time, from the purchased theme as follows:

* {{site_package/Resources/Public/Css/website.css}}
* {{site_package/Resources/Public/JavaScript/website.js}}
* {{site_package/Resources/Public/Images/logo.png}}

Angela copies the following remaining file, which just builds a template for a page, from the purchased theme as follows:

* {{site_package/Resources/Private/Templates/index.html}}

In order to ... Angela ignores third party libraries such as jQuery and Bootstrap.