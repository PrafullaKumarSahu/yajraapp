

## About YajraApp
<p>
To configure it in your system follow the below instruction
</p>

- git clone <code>https://github.com/PrafullaKumarSahu/yajraapp.git</code>

- cd yajraapp

- <code>composer install</code>

- <code>copy .env.example .env</code>

- <code>php artisan key:generate</code>

- Configure .env file

<code>

    DB_CONNECTION=mysql
	
    DB_HOST=127.0.0.1
	
    DB_PORT=3306
	
    DB_DATABASE=laraveldatatables
	
    DB_USERNAME=root
	
    DB_PASSWORD=
	
</code>

- <code>php artisan migrate</code>
<p>
- Find the providers in <code>config >> app.php</code> file and register the DatatablesServiceProvider
</p>
<code>
    'providers' => [
        // ...
        Yajra\Datatables\DatatablesServiceProvider::class,
    ]
</code>

<p>
    - Place the aliases in <code>config >></code> app.php file and register the aliases.
</p>
	
<code>
    'aliases' => [
        // ...
        'Datatables' => Yajra\Datatables\Facades\Datatables::class,
    ]
</code>

<p>
- Open Tinker
</p>
    - <code>php artisan tinker</code>

<p>
- Create some fake data
</p>

        - <code>factory(App\User::class, 100)->create();</code>
		
- Run artisan server
		
    - <code>php artisan serve</code>
	
	
    - visit http://127.0.0.1:8000/create