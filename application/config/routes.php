<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//------------------------------------------------ROUTES FOR FRONT-------------------------------------------

$route['home'] = 'home/index';
$route['order-form'] = 'home/view_order';


//--------------------------------------------------cart-------------------------------------------------
$route['dumpster_20'] = 'home/dumpster_20';
$route['dumpster_40'] = 'home/dumpster_40';
$route['under_construction'] = 'home/under_construction';

$route['dumpsters'] = 'home/dumpsters';
//------------------------------------------------ROUTES FOR ADMIN-------------------------------------------

$route['login'] = 'admin/login';
$route['forget-password'] = 'admin/forget_form';
$route['register'] = 'admin/register';
$route['profile'] = 'admin/profile';
$route['list/(:any)'] = 'admin/lists/$1';
$route['view/(:any)/(:any)'] = 'admin/view/$1/$1';
$route['view-update/(:any)/(:any)'] = 'admin/read_status_view/$1/$1';
$route['add/(:any)'] = 'admin/add/$1';
$route['add_data/(:any)'] = 'admin/add_data/$1';
$route['edit/(:any)/(:any)'] = 'admin/edit/$1/$1';
$route['duplicate/(:any)/(:any)'] = 'admin/duplicate/$1/$1';
$route['general-edit/(:any)/(:any)'] = 'admin/edit_extras/$1/$1';
$route['update_data/(:any)/(:any)'] = 'admin/update_data/$1/$1';
$route['delete/(:any)/(:any)'] = 'admin/delete/$1/$1';

$route['calculate-tax'] = 'admin/calculate_tax';

//------------------------------------------------ROUTES FOR MEMBERS-------------------------------------------
