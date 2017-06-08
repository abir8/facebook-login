# facebook-login

## Introduction
Laravel Facebook Login System using Socialite provides.It handles almost all of the boilerplate social authentication code.
To get started with Socialite, use Composer to add the package to your project's dependencies:

```
 composer require laravel/socialite
```
---
## Configuration
After installing the Socialite library, register the Laravel\Socialite\SocialiteServiceProvider in your config/app.php configuration file:
```
'providers' => [
    // Other service providers...

    Laravel\Socialite\SocialiteServiceProvider::class,
],
```

Also, add the Socialite facade to the aliases array in your app configuration file:
```
'Socialite' => Laravel\Socialite\Facades\Socialite::class,
```
---
## Create facebook app and add facebook config
You will also need to add credentials for the OAuth services your application utilizes. These credentials should be placed in your config/services.php configuration file, and should use the key facebook depending on the providers your application requires. For example:
```
'facebook' => [
    'client_id' => 'your-facebook-app-id',
    'client_secret' => 'your-facebook-app-secret',
    'redirect' => 'http://your-callback-url',
],
```
---
## Controller
Let’s Open up our FacebookController.php file in Auth folder and add this:
```
<?php

namespace App\Http\Controllers;

use Socialite;

class FacebookController extends Controller
{
    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        echo "<img src='".$user->getAvatar()."'>";
        echo $user->getName();
        echo "<br/>";
        echo $user->getEmail();
        
    }
}
```
---
## Database
We need to update our users migration so that it will allow us to store facebook-specific information. Since this is a new app, I could just modify the users migration, but if you have an existing app, you’ll need to make a new migration.
```
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('facebook_id')->unique();
            $table->string('avatar');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}

```
---
## Set up routes
You will need two routes: one for redirecting the user to the OAuth provider, and another for receiving the callback from the provider after authentication.
```
Route::get('login/facebook', 'FacebookController@redirectToProvider')->name('facebook.login');
Route::get('login/facebook/callback', 'FacebookController@handleProviderCallback');

```
In your web.php file in routes folder also add this:
```
Route::get('/home', 'HomeController@index')->name('home');

```
---
Now, run *php artisan serve* and click on the *Facebook Login* button on your login page.

**Wow...Now we can logged in from facebook..and we can also access our data from Facebook.**




