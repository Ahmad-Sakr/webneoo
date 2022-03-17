## IRAP E-Commerce Test Assignment - Ahmad Sakr

This is a test application developed by Ahmad Sakr as a test for Webneoo.

I developed two pages, Products & Products by Category (Page 9 & 10 in the XD design).

The details page of each product only shows his name (Just for demo).

The other pages are only for demo.

## How to Run

Please run the below command to migrate the database and seed categories & products:

<code>php artisan migrate:fresh --seed</code>

## Images

In case images didn't appear in the products page, please run the following command:

<code>php artisan storage:link</code>

Be sure to delete the storage directory from the public folder before run above command.
