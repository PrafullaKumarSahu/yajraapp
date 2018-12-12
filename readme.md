

## About YajraApp

To configure it in your system follow the below instruction

- git clone https://github.com/PrafullaKumarSahu/yajraapp.git
- cd yajraapp
- composer install
- copy .env.example .env
- php artisan key:generate
- Configure .env file

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laraveldatatables
    DB_USERNAME=root
    DB_PASSWORD=
- php artisan migrate
- Find the providers in config >> app.php file and register the DatatablesServiceProvider
    'providers' => [
        // ...
        Yajra\Datatables\DatatablesServiceProvider::class,
    ]
    - Place the aliases in config >> app.php file and register the aliases.
    'aliases' => [
        // ...
        'Datatables' => Yajra\Datatables\Facades\Datatables::class,
    ]

    - php artisan tinker

        - factory(App\User::class, 100)->create();

    - php artisan serve
    - visit http://127.0.0.1:8000/create