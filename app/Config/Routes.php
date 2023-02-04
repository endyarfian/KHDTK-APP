<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//all-access
/////////////////////////////////////////////////////////////////////////////////////
$routes->get('/', 'Home::index');
$routes->get('/error404', 'Error::notfound');

//auth
// $routes->get('/auth/login', 'Auth::Login');
// $routes->get('/auth/register', 'Auth::Register');

//apps
$routes->get('/apps/dashboard', 'Dashboard::index');
$routes->get('/apps/maps', 'Maps::index');
$routes->get('/apps/maps-pl', 'MapsPl::pl2022');
$routes->get('/apps/test/(:num)', 'Test::index/$1');
$routes->get('/apps/maps/detail/(:num)', 'DetailMaps::index/$1');

//pages
$routes->get('/pages/profil', 'Dashboard::profile');
$routes->get('/pages/changelog', 'Dashboard::changelog');
$routes->get('/pages/faq', 'Dashboard::faq');
$routes->get('/pages/doc', 'Dashboard::doc');

//rencana pengelolaan
$routes->get('/database-user/rencana-strategis', 'UserRencanaStrategis::index');
$routes->get('/database-user/rencana-tahunan', 'UserRencanaTahunan::index');
//organisasi kawasan
$routes->get('/database-user/organisasi-kawasan', 'UserOrganisasiKawasan::index');
$routes->get('/database-user/struktur-umt', 'UserStrukturUmt::index');
$routes->get('/database-user/tanaman-umt', 'UserTanamanUmt::index');
//potensi sdh
$routes->get('/database-user/inven-sdh', 'UserInven::index');
$routes->get('/database-user/ukur-pu', 'UserUkur::index');
//potensi sosek
$routes->get('/database-user/sosekbud-desa', 'UserSosekbudDesa::index');
$routes->get('/database-user/hwd', 'UserHwd::index');
//alokasi realisasi
$routes->get('/database-user/alokasi-realisasi', 'UserAlokasiRealisasi::index');
//////////////////////////////////////////////////////////////////////////////////////
//end of all-access

//datauser
$routes->get('/database/data-user', 'DataUser::index', ['filter' => 'role:admin,developer']);
//renstra
$routes->get('/database/rencana-strategis', 'RencanaStrategis::rencana_strategis', ['filter' => 'role:admin,developer']);

$routes->post('/database/rencana-strategis/saverenstra', 'RencanaStrategis::saverenstra');
$routes->post('/database/rencana-strategis/editrenstra/(:num)', 'RencanaStrategis::editrenstra/$1');
$routes->delete('/database/rencana-strategis/hapusrenstra/(:num)', 'RencanaStrategis::deleterenstra/$1');

$routes->post('/database/rencana-strategis/saverenstratu', 'RencanaStrategis::saverenstratu');
$routes->post('/database/rencana-strategis/editrenstratu/(:num)', 'RencanaStrategis::editrenstratu/$1');
$routes->delete('/database/rencana-strategis/hapusrenstratu/(:num)', 'RencanaStrategis::deleterenstratu/$1');

$routes->post('/database/rencana-strategis/saverenstrata', 'RencanaStrategis::saverenstrata');
$routes->post('/database/rencana-strategis/editrenstrata/(:num)', 'RencanaStrategis::editrenstrata/$1');
$routes->delete('/database/rencana-strategis/hapusrenstrata/(:num)', 'RencanaStrategis::deleterenstrata/$1');

//rencana tahunan
$routes->get('/database/rencana-tahunan', 'RencanaTahunan::rencana_tahunan', ['filter' => 'role:admin,developer']);

$routes->post('/database/rencana-tahunan/savert', 'RencanaTahunan::savert');
$routes->post('/database/rencana-tahunan/editrt/(:num)', 'RencanaTahunan::editrt/$1');
$routes->delete('/database/rencana-tahunan/hapusrt/(:num)', 'RencanaTahunan::deletert/$1');

$routes->post('/database/rencana-tahunan/saverttujuan', 'RencanaTahunan::saverttujuan');
$routes->post('/database/rencana-tahunan/editrttujuan/(:num)', 'RencanaTahunan::editrttujuan/$1');
$routes->delete('/database/rencana-tahunan/hapusrttujuan/(:num)', 'RencanaTahunan::deleterttujuan/$1');

$routes->post('/database/rencana-tahunan/saverttarget', 'RencanaTahunan::saverttarget');
$routes->post('/database/rencana-tahunan/editrttarget/(:num)', 'RencanaTahunan::editrttarget/$1');
$routes->delete('/database/rencana-tahunan/hapusrttarget/(:num)', 'RencanaTahunan::deleterttarget/$1');

$routes->post('/database/rencana-tahunan/savertk', 'RencanaTahunan::savertk');
$routes->post('/database/rencana-tahunan/editrtk/(:num)', 'RencanaTahunan::editrtk/$1');
$routes->delete('/database/rencana-tahunan/hapusrtk/(:num)', 'RencanaTahunan::deletertk/$1');

//organisasi kawasan
$routes->get('/database/organisasi-kawasan', 'OrganisasiKawasan::organisasi_kawasan', ['filter' => 'role:admin,developer']);

$routes->post('/database/organisasi-kawasan/savepk', 'OrganisasiKawasan::savepk');
$routes->post('/database/organisasi-kawasan/editpk/(:num)', 'OrganisasiKawasan::editpk/$1');
$routes->delete('/database/organisasi-kawasan/hapuspk/(:num)', 'OrganisasiKawasan::deletepk/$1');

$routes->post('/database/organisasi-kawasan/saveumt', 'OrganisasiKawasan::saveumt');
$routes->post('/database/organisasi-kawasan/editumt/(:num)', 'OrganisasiKawasan::editumt/$1');
$routes->delete('/database/organisasi-kawasan/hapusumt/(:num)', 'OrganisasiKawasan::deleteumt/$1');

$routes->post('/database/organisasi-kawasan/savezonasi', 'OrganisasiKawasan::savezonasi');
$routes->post('/database/organisasi-kawasan/editzonasi/(:num)', 'OrganisasiKawasan::editzonasi/$1');
$routes->delete('/database/organisasi-kawasan/hapuszonasi/(:num)', 'OrganisasiKawasan::deletezonasi/$1');

$routes->post('/database/organisasi-kawasan/savelmu', 'OrganisasiKawasan::savelmu');
$routes->post('/database/organisasi-kawasan/editlmu/(:num)', 'OrganisasiKawasan::editlmu/$1');
$routes->delete('/database/organisasi-kawasan/hapuslmu/(:num)', 'OrganisasiKawasan::deletelmu/$1');

$routes->post('/database/organisasi-kawasan/savezonasilmu', 'OrganisasiKawasan::savezonasilmu');
$routes->post('/database/organisasi-kawasan/editzonasilmu/(:num)', 'OrganisasiKawasan::editzonasilmu/$1');
$routes->delete('/database/organisasi-kawasan/hapuszonasilmu/(:num)', 'OrganisasiKawasan::deletezonasilmu/$1');

//struktur umt
$routes->get('/database/struktur-umt', 'StrukturUmt::struktur_umt', ['filter' => 'role:admin,developer']);

$routes->post('/database/struktur-umt/saveanakpetak', 'StrukturUmt::saveanakpetak');
$routes->post('/database/struktur-umt/editanakpetak/(:num)', 'StrukturUmt::editanakpetak/$1');
$routes->delete('/database/struktur-umt/hapusanakpetak/(:num)', 'StrukturUmt::deleteanakpetak/$1');

$routes->post('/database/struktur-umt/savecupet', 'StrukturUmt::savecupet');
$routes->post('/database/struktur-umt/editcupet/(:num)', 'StrukturUmt::editcupet/$1');
$routes->delete('/database/struktur-umt/hapuscupet/(:num)', 'StrukturUmt::deletecupet/$1');

//tanaman umt
$routes->get('/database/tanaman-umt', 'TanamanUmt::tanaman_umt', ['filter' => 'role:admin,developer']);

$routes->post('/database/tanaman-umt/savetnmanakpetak', 'TanamanUmt::savetnmanakpetak');
$routes->post('/database/tanaman-umt/edittnmanakpetak/(:num)', 'TanamanUmt::edittnmanakpetak/$1');
$routes->delete('/database/tanaman-umt/hapustnmanakpetak/(:num)', 'TanamanUmt::deletetnmanakpetak/$1');

//inven-sdh
$routes->get('/database/inven-sdh', 'Inven::inven', ['filter' => 'role:admin,developer']);

$routes->post('/database/inven-sdh/saveinven', 'Inven::saveinven');
$routes->post('/database/inven-sdh/editinven/(:num)', 'Inven::editinven/$1');
$routes->delete('/database/inven-sdh/hapusinven/(:num)', 'Inven::deleteinven/$1');

$routes->post('/database/inven-sdh/saveinvenumt', 'Inven::saveinvenumt');
$routes->post('/database/inven-sdh/editinvenumt/(:num)', 'Inven::editinvenumt/$1');
$routes->delete('/database/inven-sdh/hapusinvenumt/(:num)', 'Inven::deleteinvenumt/$1');

$routes->post('/database/inven-sdh/saveinvenpu', 'Inven::saveinvenpu');
$routes->post('/database/inven-sdh/editinvenpu/(:num)', 'Inven::editinvenpu/$1');
$routes->delete('/database/inven-sdh/hapusinvenpu/(:num)', 'Inven::deleteinvenpu/$1');

//ukur-pu
$routes->get('/database/ukur-pu', 'Ukur::ukur', ['filter' => 'role:admin,developer']);

$routes->post('/database/ukur-pu/savekayu', 'Ukur::savekayu');
$routes->post('/database/ukur-pu/editkayu/(:num)', 'Ukur::editkayu/$1');
$routes->delete('/database/ukur-pu/hapuskayu/(:num)', 'Ukur::deletekayu/$1');

$routes->post('/database/ukur-pu/savenonkayu', 'Ukur::savenonkayu');
$routes->post('/database/ukur-pu/editnonkayu/(:num)', 'Ukur::editnonkayu/$1');
$routes->delete('/database/ukur-pu/hapusnonkayu/(:num)', 'Ukur::deletenonkayu/$1');

//sosek
$routes->get('/database/sosekbud-desa', 'SosekbudDesa::sosekbud_desa', ['filter' => 'role:admin,developer']);

$routes->post('/database/sosekbud-desa/savedesa', 'SosekbudDesa::savedesa');
$routes->post('/database/sosekbud-desa/editdesa/(:num)', 'SosekbudDesa::editdesa/$1');
$routes->delete('/database/sosekbud-desa/hapusdesa/(:num)', 'SosekbudDesa::deletedesa/$1');

$routes->post('/database/sosekbud-desa/savelemdes', 'SosekbudDesa::savelemdes');
$routes->post('/database/sosekbud-desa/editlemdes/(:num)', 'SosekbudDesa::editlemdes/$1');
$routes->delete('/database/sosekbud-desa/hapuslemdes/(:num)', 'SosekbudDesa::deletelemdes/$1');

//hwd
$routes->get('/database/hwd', 'Hwd::hwd', ['filter' => 'role:admin,developer']);

$routes->post('/database/hwd/savedesahwd', 'Hwd::savedesahwd');
$routes->post('/database/hwd/editdesahwd/(:num)', 'Hwd::editdesahwd/$1');
$routes->delete('/database/hwd/hapusdesahwd/(:num)', 'Hwd::deletedesahwd/$1');

$routes->post('/database/hwd/savehwdanakpetak', 'Hwd::savehwdanakpetak');
$routes->post('/database/hwd/edithwdanakpetak/(:num)', 'Hwd::edithwdanakpetak/$1');
$routes->delete('/database/hwd/hapushwdanakpetak/(:num)', 'Hwd::deletehwdanakpetak/$1');

$routes->post('/database/hwd/saveandil', 'Hwd::saveandil');
$routes->post('/database/hwd/editandil/(:num)', 'Hwd::editandil/$1');
$routes->delete('/database/hwd/hapusandil/(:num)', 'Hwd::deleteandil/$1');

//rencanakegiatan
$routes->get('/database/alokasi-realisasi', 'AlokasiRealisasi::alokasi_realisasi', ['filter' => 'role:admin,developer']);

$routes->post('/database/alokasi-realisasi/savertka', 'AlokasiRealisasi::savertka');
$routes->post('/database/alokasi-realisasi/editrtka/(:num)', 'AlokasiRealisasi::editrtka/$1');
$routes->delete('/database/alokasi-realisasi/hapusrtka/(:num)', 'AlokasiRealisasi::deletertka/$1');

$routes->post('/database/alokasi-realisasi/savertkr', 'AlokasiRealisasi::savertkr');
$routes->post('/database/alokasi-realisasi/editrtkr/(:num)', 'AlokasiRealisasi::editrtkr/$1');
$routes->delete('/database/alokasi-realisasi/hapusrtkr/(:num)', 'AlokasiRealisasi::deletertkr/$1');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
