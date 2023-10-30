# flutter_laravel_contacts_app

<h1>Setting up a Laravel project locally</h1>

<h2>Follow these steps to set up a Laravel project fresh from Github</h2>
<p>Navigate to the project directory - cd contacts-backend</p>
<p>Run the following commands to set-up your project</p>
<ol> 
  <li>composer install - to install composer in</li>
  <li>npm install - make sure you have npm installed in your environment</li>
  <li>copy .env.example .env - to create a new environment file</li>
  <li>php artisan key:generate - to set-up a new project key</li>
  <li>Create database according to credentials from your new env file</li>
  <li>php artisan migrate --seed to add migrations and seeders to your new database </li>
  <li>php artisan serve to run the project</li>
    
</ol>
