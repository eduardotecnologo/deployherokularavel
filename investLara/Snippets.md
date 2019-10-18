https://github.com/andersao/l5-repository#installation edudev ? 
▶ composer require prettus/l5-repository

##Criando Entidades********************************
▶ php artisan make:entity User
 Would you like to create a Presenter? [y|N] (yes/no) [no]:
 > y
App\Transformers\UserTransformerPresenter created successfully.
 Would you like to create a Transformer? [y|N] (yes/no) [no]:
 > y
Transformer created successfully.
 Would you like to create a Validator? [y|N] (yes/no) [no]:
 > y
Validator created successfully.
 Would you like to create a Controller? [y|N] (yes/no) [no]:
 > y

##Criando Model*************************************
 ▶ php artisan make:model UserSocial -m
Model created successfully.
Created Migration: 2019_10_17_231300_create_user_socials_table

##Formulários no Laravel****************************
https://laravelcollective.com/docs/5.4/html
 edudeveloper@Eduardos-MacBook-Pro  ~/Documents/Git/Estudos-PHP   edudev 
▶ composer require "laravelcollective/html":"^5.4.0"

##Criando Controllers ******************************
▶ php artisan make:controller DashboardController