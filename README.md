## About Phone Book App

Phone Book App is a simple web application created with aim to help keep track of personal, business contact details.
It basically a  take home project, build with the following such as:

- [PHP, Laravel](https://laravel.com/).
- [Livewire](https://laravel-livewire.com/docs/).
- DaisyUI [a lightweight TailwindCSS UI library](https://daisyui.com/)

## Setting up the Project

If you don't have PHP and and composer in your machine, you should ensure that your local machine has PHP and [Composer](https://getcomposer.org/) installed. If you are developing on macOS, PHP and Composer can be installed via [Homebrew](https://brew.sh/). In addition, we recommend [installing Node and NPM](https://nodejs.org/).

After you have installed PHP and Composer, you may create a new Laravel project via the Composer *[create-project]()* command:

Now clone the project either, *git clone* <reference-type>, and copy the #*URL*# of the associated channels below:
- https [https](https://github.com/jamesonyemi/phone-book-app.git)
- ssh [ssh](git@github.com:jamesonyemi/phone-book-app.git)
- gitcli [git-cli](gh repo clone jamesonyemi/phone-book-app)


When you are done cloning the project from the specified [github](https://github.com/jamesonyemi/phone-book-app.git) repository, the run the following commands:

 - use the command line of choice to nagigate to the root directory of the project like so: *[cd path-to-project-directory]()*
 - open the project on any *text-editor* of choice,
 and make a copy of the *[.env.example]()*
 and rename the copy you should made to *[.env]()*
 - Note, this renamed copy must be in the same location/directory as the *[.env.example]* -- the original file copied from.

### RUNNINGG THE PROJECT

- composer install
- npm install
- npm run dev

### DATABASE CONNECTION
- create a Database Name,
for example, phonebook_db (I have created one already, assigned as: DB_DATABASE=phonebook_db)
in your preferred DB driver MYSQL or MARIADB, POSTGRESDB etc,
if you want to change the DB name then go to the *.env* created previously and
add it, as: *DB_DATABASE=*db-name-your-created*

- php artisan migrate
This will create all related tables into the specified database name


### FINAL STEP

- php artisan serve --port=84
--- Note, default port is using 80, if other applications are running on port 80, then you need the to specify another free port.
Thus, the command **php artisan serve --port=84**

If that does not work don't worry, I have also attached a copy of the database, so that you can *import it*
*sql file is the root of the project*

THIS WILL GENERATE A URL, copy and paste on the browser tab
