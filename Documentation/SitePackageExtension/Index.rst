.. include:: Includes.txt

Site Package Extension
======================

Introduction to Extensions
--------------------------

From some other content management systems, Angela is used to the concept of storing the template files in directories such as "``themes/``" or "``templates/``". Whereas this is also possible in TYPO3 CMS (you could create a directory such as ``fileadmin/templates/``), the approach she takes for her first TYPO3 CMS project is slightly different but much more *professional*: she creates a so called *extension* for TYPO3 CMS.

Extensions are a great way to build a foundation for the website so that HTML template files and the site configuration are stored in a central place. By replacing an existing extension, Angela can change the visual appearance of the site completely with a click of a button. An extension can also contain PHP code, which extends the core functionality of TYPO3 CMS and provides new features (typical applications are news on a website, forums, blogs, e-commerce solutions, etc). Many TYPO3 extensions developed by TYPO3 enthusiasts have been published in the official `TYPO3 Extension Repository (TER) <https://typo3.org/extensions/>`_ and are available for free.


Preparation
-----------

Angela kick-starts a simple extension she calls "Site Package", which turns out is a fairly simple process: she creates a new directory "``site_package``" on her local machine and the following sub-directories inside:

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

As a person who knows Git, she uses a Git repository for her Site Package extension, so she can track changes in the future if required.

The `Public/` branch is self-explanatory: it contains the folders `Css/`, `Images/` and `JavaScript/`. All files in these folders will be delivered to the user (website visitors) *as they are*. These are static files which are not touched/changed by TYPO3 at all when they are sent to the client. However the directory `Private/` with its three sub-folders `Layouts/`, `Partials/` and `Templates/` require some explanation. Angela quite rightly figures out that:

**`Layouts`**
The HTML file which builds the overall *layout* of the website is stored in the `Layouts/` folder. Typically this is only **one** construct for all pages across the entire website. Pages can have different layouts of course, for example the home page could have a layout with full width to fit a large banner into it and sub-pages with contact details should show two or three columns -- but *page layouts* do not belong into the `Layout/` directory. They are stored in the `Templates/` directory (see below). In other words: the `Layouts` directory should contain the global layout for the entire website with elements which appear on all pages (e.g. the company logo, navigation menu, footer area, etc.).

**`Templates`**
The most important fact about HTML files in the `Templates/` directory has been described above already: this folder contains layouts, which are page-specific. Due to the fact that a website usually consists of a number of pages and some pages possibly show a different layout than others (e.g. number of columns), the `Templates/` directory may contain one or multiple HTML files. The website template Angela puchased shows one layout across all pages only, so this makes her first TYPO3 project very easy for her. However she keeps in mind that possibly more files will be stored in this folder.

**`Partials`**
.. Partials are small template units, which are perfect to fulfil recurring tasks, e.g. the output of information sets to multiple parts of your layout.
.. Like layouts, partials can also be configured and the ViewHelper `<f:render>` handles this.


Armed with this knowledge, it takes Angela just a few minutes to implement the layouts as described below.


Implement template files
~~~~~~~~~~~~~~~~~~~~~~~~

In order to implement the visual appearance of the new website, Angela copies all *static* files, which TYPO3 will not change dynamically at run time, from the purchased theme as follows:

* {{site_package/Resources/Public/Css/website.css}}
* {{site_package/Resources/Public/JavaScript/website.js}}
* {{site_package/Resources/Public/Images/logo.png}}

Angela copies the following remaining file, which just builds a template for a page, from the purchased theme as follows:

* {{site_package/Resources/Private/Templates/Content.html}} (was: index.html)

In order to ... Angela ignores third party libraries such as jQuery and Bootstrap.

