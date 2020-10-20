# Project
At first, we have to create a new Laravel project: <br/>

<i> laravel new Project </i> <br/>

After we created, we need to add Authentication of the laravel by the followings command: <br/>

<i> composer require laravel/jetstream </i> <br/>
<i> php artisan jetstream:install livewire </i> <br/>
<i> php artisan jetstream:install inertia </i> <br/>

This Also do Routing for the Project such as Login, ResetPassword, Registere, etc.<br/>
As I wanted to do the project with simple front, I added bootstrap: <br/>

<i> composer require laravel/ui </i> <br/>
<i> php artisan ui bootstrap </i> <br/>
<i> php artisan ui bootstrap --auth </i> <br/>

Now are project is ready for coding <br>
At first we have to create our models, as we can see we have 4 Models (Property, Owner, User, Phone) <br/>
we create each of the Models with their migration by the following command: <br/>

<i>php artisan make:model OwrModel -m</i>

Beside creating a mode, it also create its migration <br/>
After we built columns of the migrations, we create a controller: <br/>

<i> php artisan make:controller MycontrollerName -r </i>

This is also create a controller with some exciting useful functions <br/>
If we want to do the "Validation" easier we can make a "Request" by the following command: <br/>

<i> php artisan make:request Myrequest </i> <br/>

And then in owr request we have to function by the name (rules, messages) <br/>
we create our rules like the lenght and min , max ,etc. <br/>
And in the "message" function we can create a message for each validation <br/>
After we done validation and creating,updating,.... houese, our code is complete and <br/>
next thing we have to do is doing the "Repository Pattern". <br/>
As I using "phpstorm" , we select a command that we want to use "Repository" and then press : <br/>

<i> Command + option + m </i> or if you're in windows you can use <i> Ctrl + Alt + m </i> <br/>

we can create these Repositories as public and then we move all of them into the "PHP class" <br/>

This is my first time publishing in Github so if it has any problems please forgive and I try next time doing better




