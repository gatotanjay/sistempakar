<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/About', 'Home::about');
$routes->get('/Petunjuk', 'Home::petunjuk');
$routes->get('/Login', 'Home::login');
$routes->get('/Daftar', 'Home::daftar');
$routes->get('/Dashboard', 'Home::dashboard');
$routes->get('/Gejala', 'Home::gejala');
$routes->get('/Jenis', 'Home::jenis');
$routes->get('/Coba', 'Home::coba');










