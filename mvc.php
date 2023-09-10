<?php

//what is mvc =>structure for web application framework
//  MODEL VIEW CONTROLLER

// 
//model => data model => place where we manage our project data;
// view => user interface 
// controller => place where we manage user input and output in our web application
// in other ways function where we manage requests and response

// what is artisan => it's a manager which can manage the project which includes in the laravel framework

//so controller works with request and response // 
// it's working with routes basically because request and response are coming from routes

// !important what is migration ?  to manage database table / we will use query language in this migration files 
// we can create database tables in laravel using migration technology.
// why we need migration to activate one of the mvc structure model we need migration
// with migration technology we can manage data
// Another way of migration => table structure 

// how can we create migration and model code 
//php artisan make:model Article -m ' why add the m at the last because it is for migration ' 
// in this way we can create both migration and model at the same time.

//what is database seeding ? 
/* after creating data we can some fake data into our database that technology is called database seeding .
so to add data we need to create Model Factory mock data (Model Object) 
example => php artisan make:factory ArticleFactory