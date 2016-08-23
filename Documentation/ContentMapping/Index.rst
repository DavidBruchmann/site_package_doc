.. include:: Includes.txt

Overview
========

Headline 1
----------

Angela updates file {{site_package/Configuration/TypoScript/setup.txt}} and adds the configuration to map content elements (BE) to the Fluid output (FE).

Angela updates file {{site_package/Resources/Private/Templates/Content.html}} and adds {{<f:format.raw>\{content\}</f:format.raw>}} where content should appear.

After committing the new version of the site_package extension to her Git repository, she also updates the extension on the server and clears the FE cache.

In the backend, she adds a content element to the page "Home", e.g. "Text & Media", saves the record and previews the page again.

A preview of the website (FE) proves that content entered in the BE appears in the FE. [CANDY]