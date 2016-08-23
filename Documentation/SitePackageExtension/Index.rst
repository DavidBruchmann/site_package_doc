.. include:: Includes.txt

Site Package Extension
======================

Introduction to Extensions
--------------------------

From some other content management systems, Angela is used to the concept of storing the template files in directories such as "``themes/``" or "``templates/``". Whereas this is also possible in TYPO3 CMS (you would usually create a directory ``fileadmin/templates/``), the approach she takes for her first TYPO3 CMS project is slightly different but much more *professional* in her view: she creates a so called *extension*.

Extensions are a great way to...


Preparation
-----------

Angela kick-starts a site package extension to build a foundation for the website so that the HTML templates files and site configuration are stored in a central place.

As a person who knows Git, she uses a Git repository for the site package extension, so she can track changes in the future if required.


She creates a new directory "``site_package``" on her local machine and the following sub-directories inside:

::

    site_package/Resources/
    site_package/Resources/Private/
    site_package/Resources/Private/Layouts/
    site_package/Resources/Private/Partials/
    site_package/Resources/Private/Templates/
    site_package/Resources/Public/
    site_package/Resources/Public/Css/
    site_package/Resources/Public/Images/
    site_package/Resources/Public/JavaScript/


This directory structure will give her...


Implement template files
~~~~~~~~~~~~~~~~~~~~~~~~

In order to implement the visual appearance of the new website, Angela copies all *static* files, which TYPO3 will not change dynamically at run time, from the purchased theme as follows:

* {{site_package/Resources/Public/Css/website.css}}
* {{site_package/Resources/Public/JavaScript/website.js}}
* {{site_package/Resources/Public/Images/logo.png}}

Angela copies the following remaining file, which just builds a template for a page, from the purchased theme as follows:

* {{site_package/Resources/Private/Templates/Content.html}} (was: index.html)

In order to ... Angela ignores third party libraries such as jQuery and Bootstrap.

