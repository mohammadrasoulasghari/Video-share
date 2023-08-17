#!/bin/bash

# دستور اجرای LAMP
sudo /opt/lampp/lampp start

# دستور اجرای سرور PHP
php artisan serve &

# دستور اجرای npm
npm run dev



