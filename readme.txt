Episodio 12 - Episodio 20
--------------------------------------------------------------------------------
php artisan make::auth
php artisan make:controller SessionsController
php artisan make:controller RegistrationController
--------------------------------------------------------------------------------
/sucursales/{{ $sucursal->codsuc }}
action('SucursalesController@show', [$sucursal->codsuc])
url('/sucursales', $sucursal->codsuc)
--------------------------------------------------------------------------------
php artisan make:controller ClientesController -r
php artisan make:controller OrdenesController -r
php artisan make:controller SucursalesController
--------------------------------------------------------------------------------
php artisan tinker
$suc = new App\Sucursal;
$suc->codsuc = "01";
$suc->nomsuc = "Sucursal 01";
$suc->save();
$suc->update(['nomsuc' => 'Sucursal DOS']);
$suc = App\Sucursal::find(1);
$suc = App\Sucursal:where('alias','Test1')->first();
$suc->toArray();
$suc = App\Sucursal::create(['codsuc' => '02', 'nomsuc' => 'Sucursal 02']);
App\Sucursal::all()->toArray();
--------------------------------------------------------------------------------
php artisan make:model Usuario
php artisan make:model Cliente
php artisan make:model Sucursal
php artisan make:model Orden
--------------------------------------------------------------------------------
php artisan make:migration create_usuarios_table --create="usuarios"
php artisan make:migration create_clientes_table --create="clientes"
php artisan make:migration create_sucursales_table --create="sucursales"
php artisan make:migration create_recibos_table --create="recibos"
php artisan help migrate
php artisan migrate
php artisan migrate:reset
--------------------------------------------------------------------------------
.env                 (Modificar BD)
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=srtrial_db
DB_USERNAME=root
DB_PASSWORD=
--------------------------------------------------------------------------------
config/database.php  (Modificar BD)
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'srtrial_db'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],
--------------------------------------------------------------------------------
cd C:\wamp64\laravel\srtrial_prj\srtrial
cd C:\Desarrollo\laravel\srtrial_prj\srtrial
php artisan serve
http://localhost:8000/sucursales
http://localhost:8000/sucursales/create
--------------------------------------------------------------------------------

