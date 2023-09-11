# Chat-App
Chat App with Pusher Websockets

Installation:
Create your channel at https://pusher.com
Clone this repo
composer install
Update your API keys in .env
 PUSHER_APP_ID=
 PUSHER_APP_KEY=
 PUSHER_APP_SECRET=
 PUSHER_APP_CLUSTER=
Install NPM packages:
npm install
Create a MYSQL database file in the database folder:
php artisan migrate
Compile the web pages and run it
npm run dev
php artisan serve
