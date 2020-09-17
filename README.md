![FizzUp](https://cdn.fizzup.com/full/landing_01/images/logowhite_v2.png)
 
# Summary: 

- [Build With](#build-with "All versions we use for this app")
- [Configuration](#configuration "All you need to run this app on your server")
    - [**If you want to make some changes in dev envrionement**](#if-you-want-to-make-some-changes-in-dev-environment-) 
    - [**If you want to deploy on your server**](#if-you-want-to-deploy-on-your-server-)
- [Hierarchy](#hierarchy) 
- [ToDo](#todo)
- [Authors](#authors)

---

## Build With

- [PHP 7.4](https://www.php.net/)
- [Laravel](https://laravel.com/)
- [CKEditor 4](https://ckeditor.com/ckeditor-4/)

## Configuration

All you need to run this app on your server.

When you have cloned this app, you have to run a `composer install` 
> Take a coffee 

Then you have to run:
`npm install`
> Take a second coffee 

This two past command will download all the packages 
you need to run the app on your server.
There are all available in `composer.json`.

Then you have to configure your `.env` :

### **If you want to make some changes in dev environment :** 

1. You have to use a `.env` (Copy/Past `.env.exemple). 
    > DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=_databaseName_
      DB_USERNAME=_user_
      DB_PASSWORD=_password_

    Change _user_, _password_ and _databaseName_ with your mysql credentials
    Please double check your port and your localServer address for the BDD.

2. Run `npm run dev` to compile all scss file 
and create all builds needed.

### **If you want to deploy on your server :**

If you use your own script for deployment please go on next topic.<br>
Else: 

1. Clone master on your server.

2. Configure `.env` in the same way as dev environment [↑](#if-you-want-to-make-some-changes-in-dev-environment-).

3. Run `composer install` `npm install`.

4. Turn 'debug' to false in app.php (`'debug' => (bool) env('APP_DEBUG', false)`)
To convert the app from dev in prod.

5. Run `npm run production`.

---

#### In both case:  

1. Create your database.

2. Run ` php artisan migrate:fresh `.

Run your app with `php artisan serve`

Shut down your app with `ctrl + c`
  
---

## Hierarchy

This is the list of hierarchy on this app.

- ...


## ToDo
 
This is the list of user story that we didn't dev.

- ...


## Authors

- Jeremy KOENIG : [GitHub](https://github.com/Jerem-67) | [LinkedIn](https://www.linkedin.com/in/jeremy-koenig/)
