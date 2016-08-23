.. include:: Includes.txt

Introduction
============

Meet Angela
-----------

This tutorial accompanies Angela. Angela is a web developer and has some basic experience with HTML, CSS and JavaScript. She is familiar with Git and has used some simple content management systems before. For a new project she decided to develop a new website using TYPO3 CMS, because she heard about its powerful features and its flexibility.

However due to the fact that she has never worked with this system before, she is a little bit scared of using it. For example, she does not know exactly where to start.

Angela decides to give it a shot anyway because the project size, complexity and time frame allow her to make mistakes. In addition she has realised that the systems she worked with in the past often lack of a certain functionality or limit her in building specific features. They are simply not flexible enough to meet the requirements of her clients, which became more and more sophisticated and professional.

The following chapters describe the steps required and helped Angela to successfully build the new website in TYPO3 CMS.


Design Templates
----------------

Her client asked Angela to build the new website from scratch. The site should feature a modern design, has to be mobile responsive and will contain about 10 pages with content as a starting point. Further pages will be added later.

Angela consults with the client and they have chosen to use an existing simple HTML template, which Angela purchased from an online marketplace for website templates (she searched for the keywords "website templates" at one of her favourite search engines to find a few vendors).

The template comes as a package with a set of HTML, CSS, JavaScript files and uses the well known `Twitter Bootstrap framework <https://getbootstrap.com>`_ and `jQuery <https://getbootstrap.com>`_ JavaScript library. After extracting the package on her local machine, she finds the following directory and files:

::

    html/index.html
    html/css/website.css
    html/images/logo.png
    html/js/website.js
    html/libs/bootstrap/css/...
    html/libs/bootstrap/js/...
    html/libs/bootstrap/fonts/...
    html/libs/jquery/jquery.js


Web Hosting
-----------

Angela comes across a hosting provider who offers TYPO3 hosting. This offer includes a pre-installed, empty TYPO3 instance and SSH access to the server. The hosting provider also sent her the initial access details to the administrator interface of the TYPO3 instance (also known as the *TYPO3 backend*) and the "Install Tool password".

As the first steps, she makes sure, that the server meets the requirements and all her accesses work:

* she logs into the server using SSH

* she logs into the backend of TYPO3

* she accesses the Install Tool and
    * checks that all system environment checks are ok (*green*)
    * runs the system tests, e.g. to check if image manipulation works

.. note::

    To access the login form of the TYPO3 backend, simply append "``/typo3``" to the end of the URL of your website. For example ``http://example.com`` shows the *frontend* of the website and ``http://example.com/typo3`` gives you access to the *backend*.

    Once logged-in at the backend, the Install Tool can be opened via "**SYSTEM** > **Install**". This requires the Install Tool password and a backend user with administrator privileges. Alternatively the Install Tool can be opened by accessing the URL ``http://example.com/typo3/install`` directly, but this requires further steps for security reasons.

.. note::

    In case your hosting plan does not include a TYPO3 CMS instance, you can install the system yourself.
    Please see the official :ref:`Installation and Upgrade Guide <t3install:start>` for further details.


Prerequisites
-------------

As pointed out above, as a web developer, Angela has some basic knowledge in the following areas:

* HTML, CSS and JavaScript
* Git (version control system, client-side)
* SSH/FTP (she knows how to copy files and directories to and from the server)

These capabilities are required for the next steps described in the following chapters.
