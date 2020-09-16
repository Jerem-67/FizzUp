![FizzUp](./public/favicon/apple-touch-icon.png)
 
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

## Configuration

All you need to run this app on your server.

When you have cloned this app, you have to run a `composer install` 
> Take a coffee 

Then you have to run:
`yarn install`,
`npm install`
> Take a second coffee 

This two past command will download all the packages 
you need to run the app on your server.
There are all available in `composer.json` and in `yarn.lock`.

Then you have to configure your `.env` :

### **If you want to make some changes in dev environment :** 

1. You have to create a `.env.local` (Copy/Past `.env). 
    > DATABASE_URL=mysql://_user_:_password_@127.0.0.1:3306/prosoon

    Change _user_ and _password_ with your mysql credentials
    Please double check your port and your localServer address for the BDD.

2. Run `yarn encore dev` to compile all scss file 
and create all builds needed.

If you have some node error please download node on your computer (https://nodejs.org/en/download/).

### **If you want to deploy on your server :**

If you use your own script for deployment please go on next topic.<br>
Else: 

1. Clone master on your server.

2. Configure `.env` in the same way as dev environment [↑](#if-you-want-to-make-some-changes-in-dev-environment-).

3. Run `composer install` `yarn install`  and then run `yarn encore prod`.

4. Run `APP_ENV=prod APP_DEBUG=0 php bin/console cache:clear`
To convert the app from dev in prod.

5. Run `yarn encore prod`.

---

#### In both case:  

1. Create your database, run `php bin/console doctrine:database:create`.

2. Run `php bin/console d:s:u --force`.

Run your app with `symfony server:start`

Shut down your app with `symfony server:stop`
  
---

## Hierarchy

There is 4 level of hierarchy on this app:
- Level 1 : **Anonymous** :  user who is not connected and just navigate in the front pages.
- Level 2 : **Student** (ROLE_STUDENT) : the student can manage his own resume.
- Level 3 : **School** (ROLE_SCHOOL) : the school can manage and create students (limited).
- Level 4 : **School Editor** (ROLE_SCHOOL_EDITOR) : the school editor have all access to the management.
- Level 5 : **Admin** (ROLE_ADMIN) : the admin can manage and create the schools.
- Level 6 : **Super Admin** (ROLE_SUPER_ADMIN) : the super admin can manage and create the admins.


## ToDo
 
This is the list of user story that we didn't dev.

- ...


## Authors

- Jeremy KOENIG : [GitHub](https://github.com/Jerem-67) | [LinkedIn](https://www.linkedin.com/in/jeremy-koenig/)
- Franck ROTH : [GitHub](https://github.com/Franck-Roth) | [LinkedIn](https://www.linkedin.com/in/franck-roth/)
- Maxime KAISER : [GitHub](https://github.com/MAXIKAIS) | [LinkedIn](https://www.linkedin.com/in/maxime-kaiser/)
