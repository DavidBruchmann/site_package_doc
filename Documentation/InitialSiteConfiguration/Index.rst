.. include:: Includes.txt

Overview
========

Headline 1
----------

Angela adds a new folder {{Configuration/TypoScript}} to her site_package extension and a file {{setup.txt}} in order to configure the website.

Here, she configures...

* page = PAGE
** includeCSS, includeJS, includeJSFooter
* page.10 = FLUIDTEMPLATE

She did not include Bootstrap and jQuery in the previous step, because ...
Angela makes sure these libraries are loaded from an external source ({{external = 1}}).