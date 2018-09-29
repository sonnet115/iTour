<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['admin/login'] = 'home/showAdminLogin';
$route['admin/submit'] = 'home/adminLogin';
$route['admin/addplaceform'] = 'home/addPlaceForm';
$route['admin/addedplace'] = 'home/addedPlace';
$route['admin/addplace'] = 'home/addPlace';
$route['admin/logout'] = 'home/adminLogout';

$route['hotel/basicinfo'] = 'home/showHotelBasic';
$route['hotel/addbranch'] = 'home/addHotelBranch';
$route['hotel/managebranch'] = 'home/manageHotelBranch';
$route['hotel/submitbranch'] = 'home/submitHotelBranch';
$route['hotel/logout'] = 'home/hotelLogout';

$route['traveller/basicinfo'] = 'home/showTravbasic';
$route['traveller/searchform'] = 'home/showSearch';
$route['traveller/logout'] = 'home/travellerLogout';

$route['search/result1'] = 'home/showResult1';
$route['search/result2'] = 'home/showResult2';
$route['search/show/(:any)'] = 'home/showPlaceDetails';

$route['show/(:any)'] = 'home/showTopPlaceDetails';

$route['trareg'] = 'home/registerTraveller';
$route['tralogin'] = 'home/travellerLogin';

$route['hotelreg'] = 'home/registerHotel';
$route['hotlogin'] = 'home/hotelLogin';


$route['hill'] = 'home/loadHill';
$route['food'] = 'home/loadFood';
$route['fest'] = 'home/loadFest';
$route['thrill'] = 'home/loadThrill';
$route['forest'] = 'home/loadForest';
$route['archaeology'] = 'home/loadArchaeology';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
