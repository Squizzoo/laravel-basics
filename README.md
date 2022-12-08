Om te gebruiken heb je volgende software nodig:
- Composer
- Wamp/Xampp met PHP versie 8.+
- node.js
- npm

Voer uit volgende commands:
- npm install
- npm run build
- php artisan serve

Website maakt standaard gebuik van dababase met naam "laravel". <br />
Om database te vullen met mock data voer volgende commands uit:
- php artisan migrate
- php artisan db:seed --class=UserSeeder
