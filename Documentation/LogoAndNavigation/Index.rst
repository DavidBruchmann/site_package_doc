.. include:: Includes.txt

Overview
========

Headline 1
----------

Angela creates a second page "Contact" inside "Home", but when she previews the website, she realises that the menu at the top (FE) does not take the new page into account.

Angela updates file {{site_package/Configuration/TypoScript/setup.txt}} and adds the configuration to create a menu ({{HMENU}}).

Angela updates file {{site_package/Resources/Private/Templates/Content.html}} and adds {{<f:cObject typoscriptObjectPath="lib.topmenu" />}} where the menu should appear.

When she previews the site, the menu appears, but shows "Contact" only. So she adds a shortcut page to the parent page. Now both pages appear in the menu.

Angela updates both files again to include the logo and a link to "/".