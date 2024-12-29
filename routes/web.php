<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\AuthenticateAdmin;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\Admin\UserListController;
use App\Http\Controllers\ServiceDetailsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\RegisteredAdminController;
use App\Http\Controllers\ConfirmationOrderController;
use App\Http\Controllers\Admin\Transaction\HistoryController;
use App\Http\Controllers\Admin\Services\AddServicesController;
use App\Http\Controllers\Admin\Services\EditServiceController;
use App\Http\Controllers\Admin\Services\ServicesListController;
use App\Http\Controllers\Admin\Transaction\EditOrderController;
use App\Http\Controllers\Admin\Transaction\OrderListController;
use App\Http\Controllers\Admin\Services\DeleteServicesController;
use App\Http\Controllers\Admin\ServiceDetails\AddServiceDetailsController;
use App\Http\Controllers\Admin\ServiceDetails\EditServiceDetailController;
use App\Http\Controllers\Admin\ServiceDetails\ServiceDetailsListController;
use App\Http\Controllers\Admin\ServiceDetails\DeleteServiceDetailsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Guest
Route::group(['prefix' => '/'], function () {
    Route::get('/', function () {
        return view('user/home');
    })->name('home');

    Route::get('/home', function () {
        return redirect()->route('home');
    });
});



Route::get('/contact', function () {
    return view('user/contact');
});

Route::get('/sejarah', function () {
    return view('user/sejarah');
});

Route::get('/kegiatan', function () {
    return view('user/kegiatan');
});

Route::get('/tugasdanfungsi', function () {
    return view('user/tugasdanfungsi');
});

Route::get('/peralatansurvei', function () {
    return view('user/peralatansurvei');
});

Route::get('/kapalsurvei', function () {
    return view('user/kapalsurvei');
});


Route::get('/services', function () {
    return view('/user/services/services');
});

Route::get('/orders', function () {
    return view('user/orders/orders');
});





// end Guest

// Users
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/service-details/{service_id}', [ServiceDetailsController::class, 'showServiceDetails'])->name('service-details');
    Route::post('/orders/{service_details_id}', [OrderController::class, 'store'])->name('order.store');
    Route::get('/orders/{service_details_id}', [OrderController::class, 'showOrders'])->name('show.orders');
    Route::get('/order/konfirmasi/{order_id}', [ConfirmationOrderController::class, 'showConfirmation'])->name('confirmation.order');
    Route::post('/confirmation/{order_id}', [ConfirmationOrderController::class, 'storeConfirmation'])->name('confirmation.store');
    Route::get('/statusorder', [OrderController::class, 'showStatusOrder'])->name('statusorder');
});

Route::get('/profile.edit', [ProfileController::class, 'index'])->name('profile');

require __DIR__ . '/auth.php';



Route::get('/services', [ServicesController::class, 'index'])->name('services');





// end Users



// Admin

Route::get('/admin/register', [RegisteredAdminController::class, 'createAdmin'])->name('admin.register');
Route::post('/admin/register', [RegisteredAdminController::class, 'storeAdmin']);

// Routes for Admin Login
Route::get('/admin/login', [LoginAdminController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [LoginAdminController::class, 'loginAdmin'])->name('admin.login.submit');

// Routes for Admin Dashboard (protected with auth.admin middleware)
Route::group(['middleware' => 'auth.admin', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('userlist', [UserListController::class, 'index'])->name('userList');



    // CRUD SERVICES
    Route::get('/serviceslist', [ServicesListController::class, 'showServices'])->name('showservices');

    Route::get('/addservices', [AddServicesController::class, 'addServices'])->name('addservices');

    Route::post('services/store', [AddServicesController::class, 'store'])->name('admin.services.store');

    Route::get('/editservice{id}', [EditServiceController::class, 'showEditService'])->name('showeditservice');

    Route::put('/updateservice/{id}', [EditServiceController::class, 'update'])->name('updateservice');

    Route::delete('services/{id}', [DeleteServicesController::class, 'destroy'])->name('admin.services.destroy');
    // END CRUD SERVICES



    // CRUD SERVICE DETAILS
    Route::get('/servicedetailslist', [ServiceDetailsListController::class, 'showServiceDetails'])->name('showservicesdetails');

    Route::get('/addservicedetails', [AddServiceDetailsController::class, 'addServicedetails'])->name('addservicedetails');

    Route::post('/admin/servicedetails', [AddServiceDetailsController::class, 'store'])->name('admin.servicedetails.store');

    Route::get('/editservicedetail/{id}', [EditServiceDetailController::class, 'showEditServiceDetail'])->name('showeditservicedetail');

    Route::put('/updateservicedetail/{id}', [EditServiceDetailController::class, 'update'])->name('updateservicedetail');

    Route::delete('servicedetails/{id}', [DeleteServiceDetailsController::class, 'destroy'])->name('admin.servicedetails.destroy');
    // END CRUD SERVICE DETAILS

    // CRUD ORDERS
    Route::get('/orderlist', [OrderListController::class, 'showOrders'])->name('showorders');

    Route::get('/editorder/{id}', [EditOrderController::class, 'showEditOrder'])->name('showeditorder');

    Route::put('/updateorder/{id}', [EditOrderController::class, 'update'])->name('updateorder');

    Route::delete('orders/{id}', [OrderListController::class, 'destroy'])->name('admin.orders.destroy');
    // END CRUD ORDERS


    // START HISTORY
    Route::get('/history', [HistoryController::class, 'showHistory'])->name('showhistory');
    // Route::delete('history/{id}', [HistoryController::class, 'destroy'])->name('admin.history.destroy');
    // END HSITROY

    Route::post('/logout', [LoginAdminController::class, 'logoutAdmin'])->name('admin.logout');
});



// end Admin