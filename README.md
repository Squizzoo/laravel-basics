Om te gebruiken is er volgende software nodig:
- Composer
- Wamp/Xampp met PHP versie 8.+
- node.js
- npm

".env.example" veranderen naar  ".env", zonodig gegevens aanpassen (denk aan database)

Voer uit volgende commands:
- composer install
- npm install
- npm run build
- php artisan key:generate
- php artisan migrate
- php artisan serve

Website maakt standaard gebuik van de database met naam "laravel". <br />
Om database te vullen met mock data voer volgende command uit:
- php artisan db:seed --class=UserSeeder

