<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "frontend";
$route['admin'] = "login";
$route['admin/home'] = "home";
$route['admin/logout'] = "login/logout";
//category
$route['admin/category'] = "category/category";
$route['admin/category/addcategory'] = "category/category/addCategory";
$route['admin/category/delete/(:num)'] = "category/category/delete/$1";
$route['admin/category/addcategory/(:num)'] = "category/category/addCategory/$1";
//subcategory
$route['admin/subcategory'] = "subcategory/subcategory";
$route['admin/subcategory/addsubcategory'] = "subcategory/subcategory/addSubcategory";
$route['admin/subcategory/delete/(:num)'] = "subcategory/subcategory/delete/$1";
$route['admin/subcategory/addsubcategory/(:num)'] = "subcategory/subcategory/addSubcategory/$1";
//product
$route['admin/product'] = "product/product";
$route['admin/product/addproduct'] = "product/product/addProduct";
$route['admin/product/delete/(:num)'] = "product/product/delete/$1";
$route['admin/product/addproduct/(:num)'] = "product/product/addProduct/$1";
$route['admin/product/ajaxfilter'] = "product/product/ajaxfilter";
//pages
$route['404_override'] = '';
$route['admin/pages'] = "pages/pages";
$route['admin/pages/addpage'] = "pages/pages/addPage";
$route['admin/pages/delete/(:num)'] = "pages/pages/delete/$1";
$route['admin/pages/addpage/(:num)'] = "pages/pages/addPage/$1";

//frontend
$route['home'] = "frontend";
$route['home/productdetails/(:num)'] = "frontend/productdetails/$1";
$route['home/category/(:num)'] = "frontend/category/$1";
$route['home/subproducts/(:num)'] = "frontend/subProducts/$1";
$route['home/aboutus'] = "frontend/aboutus";
$route['home/login'] = "frontend/login";
$route['home/signup'] = "frontend/signup";
$route['home/logout'] = "frontend/logout";
$route['home/frontend/signup'] = "frontend/signup";
//cart
$route['home/cart/displayAll'] = "cart/displayAll";
$route['home/cart/add/(:num)'] = "cart/add/$1";
$route['home/cart/cartUpdate/(:num)'] = "cart/cartUpdate/$1";
$route['home/cart/cartDelete/(:num)'] = "cart/cartDelete/$1";
$route['home/cart/checkOut'] = "cart/checkOut";
/* End of file routes.php */
/* Location: ./application/config/routes.php */