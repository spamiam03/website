## Check-In
Create a web-application that can be used by gyms or other companies, where people can check-in and pay (if required) in a simple and quick way.

### Installation
Composer Install Instructions:
Run this in your terminal to get the latest Composer version:
php -r "readfile('https://getcomposer.org/installer');" > composer-setup.php
php composer-setup.php
php -r "unlink('composer-setup.php);"

Downloading Website Project git repository:
Using git, clone the directory into a folder on local machine
git clone "[url]" [destination folder]
Ex: git clone "https://github.com/IllyaDesigns/CheckIn.git" /MyProject

Using terminal, locate the directory where the clone was made and type the command:
composer install

To view the website from a local machine enter the command:
php artisan serve
This will serve the website from a local machine. To view enter 'localmachine:8000' as the default url into your browser.