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
$route['default_controller'] = 'Panel_admin_page_secure_login_page';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//===Admin panel

//login hissesi
$route["panel_admin_page_secure_login_secure_controller"] = "Panel_admin_page_secure_login_page/index";
$route["panel_admin_page_secure_login_secure_controller_action"] = "Panel_admin_page_secure_login_page/login/";
$route["panel_admin_page_secure_logout_secure_controller_action"] = "Panel_admin_page_secure_login_page/logout/";
//login hissesi


//kurslarimiz hissesi
$route["panel_admin_page_secure_courses_secure_controller"] = "Panel_admin_page_secure_courses/index/";
$route["panel_admin_page_secure_courses_secure_controller_get_data"] = "Panel_admin_page_secure_courses/get_data/";
$route["panel_admin_page_secure_courses_secure_controller_get_data_for_update"] = "Panel_admin_page_secure_courses/get_data_for_update/";
$route["panel_admin_page_secure_courses_secure_controller_add"] = "Panel_admin_page_secure_courses/add/";
$route["panel_admin_page_secure_courses_secure_controller_update/(.*)"] = "Panel_admin_page_secure_courses/update/$1";
$route["panel_admin_page_secure_courses_secure_controller_delete/(.*)"] = "Panel_admin_page_secure_courses/delete/$1";
//kurslarimiz hissesi

//kurslarimizin mellimler hissesi
$route["panel_admin_page_secure_courses_secure_controller_teachers/(.*)"] = "Panel_admin_page_secure_courses_teachers/index/$1";
$route["panel_admin_page_secure_courses_secure_controller_teachers_get_data/(.*)"] = "Panel_admin_page_secure_courses_teachers/get_data/$1";
$route["panel_admin_page_secure_courses_secure_controller_teachers_add/(.*)"] = "Panel_admin_page_secure_courses_teachers/add/$1";
$route["panel_admin_page_secure_courses_secure_controller_teachers_delete/(.*)/(.*)"] = "Panel_admin_page_secure_courses_teachers/delete/$1/$2";

//kurslarimizin mellimler hissesi



//partnyorlar hissesi
$route["panel_admin_page_secure_partners_secure_controller"] = "Panel_admin_page_secure_partners/index/";
$route["panel_admin_page_secure_partners_secure_controller_get_data"] = "Panel_admin_page_secure_partners/get_data/";
$route["panel_admin_page_secure_partners_secure_controller_get_data_for_update"] = "Panel_admin_page_secure_partners/get_data_for_update/";
$route["panel_admin_page_secure_partners_secure_controller_add"] = "Panel_admin_page_secure_partners/add/";
$route["panel_admin_page_secure_partners_secure_controller_update/(.*)"] = "Panel_admin_page_secure_partners/update/$1";
$route["panel_admin_page_secure_partners_secure_controller_delete/(.*)"] = "Panel_admin_page_secure_partners/delete/$1";
//partnyorlar hissesi



//tedbirler hissesi
$route["panel_admin_page_secure_events_secure_controller"] = "Panel_admin_page_secure_events/index/";
$route["panel_admin_page_secure_events_secure_controller_get_data"] = "Panel_admin_page_secure_events/get_data/";
$route["panel_admin_page_secure_events_secure_controller_get_data_for_update"] = "Panel_admin_page_secure_events/get_data_for_update/";
$route["panel_admin_page_secure_events_secure_controller_add"] = "Panel_admin_page_secure_events/add/";
$route["panel_admin_page_secure_events_secure_controller_update/(.*)"] = "Panel_admin_page_secure_events/update/$1";
$route["panel_admin_page_secure_events_secure_controller_delete/(.*)"] = "Panel_admin_page_secure_events/delete/$1";
//tedbirler hissesi



//muellimler hissesi
$route["panel_admin_page_secure_teachers_secure_controller"] = "Panel_admin_page_secure_teachers/index/";
$route["panel_admin_page_secure_teachers_secure_controller_get_data"] = "Panel_admin_page_secure_teachers/get_data/";
$route["panel_admin_page_secure_teachers_secure_controller_get_data_for_update"] = "Panel_admin_page_secure_teachers/get_data_for_update/";
$route["panel_admin_page_secure_teachers_secure_controller_add"] = "Panel_admin_page_secure_teachers/add/";
$route["panel_admin_page_secure_teachers_secure_controller_update/(.*)"] = "Panel_admin_page_secure_teachers/update/$1";
$route["panel_admin_page_secure_teachers_secure_controller_delete/(.*)"] = "Panel_admin_page_secure_teachers/delete/$1";
//muellimler hissesi



//mezunlar hissesi
$route["panel_admin_page_secure_alumni_secure_controller"] = "Panel_admin_page_secure_alumni/index/";
$route["panel_admin_page_secure_alumni_secure_controller_get_data"] = "Panel_admin_page_secure_alumni/get_data/";
$route["panel_admin_page_secure_alumni_secure_controller_get_data_for_update"] = "Panel_admin_page_secure_alumni/get_data_for_update/";
$route["panel_admin_page_secure_alumni_secure_controller_add"] = "Panel_admin_page_secure_alumni/add/";
$route["panel_admin_page_secure_alumni_secure_controller_update/(.*)"] = "Panel_admin_page_secure_alumni/update/$1";
$route["panel_admin_page_secure_alumni_secure_controller_delete/(.*)"] = "Panel_admin_page_secure_alumni/delete/$1";
//mezunlar hissesi


//contact hissesi
$route["panel_admin_page_secure_contact_secure_controller"] = "Panel_admin_page_secure_contact/index/";
$route["panel_admin_page_secure_contact_secure_controller_get_data"] = "Panel_admin_page_secure_contact/get_data/";
$route["panel_admin_page_secure_contact_secure_controller_get_data_for_update"] = "Panel_admin_page_secure_contact/get_data_for_update/";
$route["panel_admin_page_secure_contact_secure_controller_add"] = "Panel_admin_page_secure_contact/add/";
$route["panel_admin_page_secure_contact_secure_controller_update/(.*)"] = "Panel_admin_page_secure_contact/update/$1";
$route["panel_admin_page_secure_contact_secure_controller_delete/(.*)"] = "Panel_admin_page_secure_contact/delete/$1";
//contact hissesi



//haqqimizda hissesi
$route["panel_admin_page_secure_about_secure_controller"] = "Panel_admin_page_secure_about/index/";
$route["panel_admin_page_secure_about_secure_controller_get_data"] = "Panel_admin_page_secure_about/get_data/";
$route["panel_admin_page_secure_about_secure_controller_get_data_for_update"] = "Panel_admin_page_secure_about/get_data_for_update/";
$route["panel_admin_page_secure_about_secure_controller_add"] = "Panel_admin_page_secure_about/add/";
$route["panel_admin_page_secure_about_secure_controller_update/(.*)"] = "Panel_admin_page_secure_about/update/$1";
$route["panel_admin_page_secure_about_secure_controller_delete/(.*)"] = "Panel_admin_page_secure_about/delete/$1";
//haqqimizda hissesi

//=====Admin panel









//===================================================== FRONT HISSE ==============================================================
//Ana sehife
$route["(:any)/Home"] = "HomeWebPageController/index/";



//Haqqimizda
$route["(:any)/About"] = "AboutWebPageController/index/";


// Elaqe
$route["(:any)/Contact"] = "ContactWebPageController/index/";


// Tedbirler
$route["(:any)/Events"] = "EventsWebPageController/index/";
$route["(:any)/Events(.*)"] = "EventsWebPageController/index/$1";
$route["(:any)/Event_single(.*)"] = "EventsWebPageController/single_page/$2/$1";



// Kurslar
$route["(:any)/Courses"] = "CoursesWebPageController/index/";
$route["(:any)/Courses(.*)"] = "CoursesWebPageController/index/$1";
$route["(:any)/Course_single(.*)"] = "CoursesWebPageController/single_page/$2/$1";



// Muellimler
$route["(:any)/Teachers"] = "TeachersWebPageController/index/";
$route["(:any)/Teachers(.*)"] = "TeachersWebPageController/index/$1";
$route["(:any)/Teacher_single(.*)"] = "TeachersWebPageController/single_page/$2/$1";









//===================================================== FRONT HISSE ==============================================================
