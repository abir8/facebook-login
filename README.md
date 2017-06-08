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
---
Also, add the Socialite facade to the aliases array in your app configuration file:
```
'Socialite' => Laravel\Socialite\Facades\Socialite::class,
```
---
You will also need to add credentials for the OAuth services your application utilizes. These credentials should be placed in your config/services.php configuration file, and should use the key facebook depending on the providers your application requires. For example:
```
'github' => [
    'client_id' => 'your-github-app-id',
    'client_secret' => 'your-github-app-secret',
    'redirect' => 'http://your-callback-url',
],
```
---


