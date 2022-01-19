<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [UserController::class,"index"])->name("app.home");
Route::get('/about', [UserController::class,"about"])->name("about");
Route::get('/faq', [UserController::class,"faq"])->name("faq");
Route::get('/login', [UserController::class,"login"])->name("user.login");
Route::get('/home', [UserController::class,"home"])->name("home");
Route::get('/contact', [UserController::class,"contact"])->name("contact");
Route::get('/services', [UserController::class,"services"])->name("services");
Route::get('/register', [UserController::class,"register"])->name("register");
Route::get('/pricing', [UserController::class,"pricing"])->name("pricing");
Route::get('/antifraud', [UserController::class,"antifraud"])->name("antifraud");
Route::get('/portfolio', [UserController::class,"portfolio"])->name("portfolio");
Route::get('/security', [UserController::class,"security"])->name("security");
Route::get('/history', [UserController::class,"history"])->name("history");
Route::get('/cryptocurrency', [UserController::class,"cryptocurrency"])->name("cryptocurrency");
Route::get('/forex', [UserController::class,"forex"])->name("forex");
Route::get('/realestate', [UserController::class,"realestate"])->name("realestate");
Route::get('/escrowservices', [UserController::class,"escrowservices"])->name("escrowservices");
Route::get('/personalloans', [UserController::class,"personalloans"])->name("personalloans");
Route::get('/cannibisstock', [UserController::class,"cannibisstock"])->name("cannibisstock");



Route::get('/customer/dashboard', [UserController::class,"dashboard"])->name("user.dashboard.view");
Route::get('/customer/wallet', [UserController::class,"wallet"])->name("user.wallet.view");
Route::get('/customer/deposit', [UserController::class,"deposit"])->name("user.deposit.view");
Route::get('/customer/conversion', [UserController::class,"convert"])->name("user.conversion.view");
Route::get('/customer/plan', [UserController::class,"plan"])->name("user.plan.view");
Route::get('/customer/withdraw', [UserController::class,"withdraw"])->name("user.withdraw.view");
Route::get('/customer/partners', [UserController::class,"partners"])->name("user.partners.view");
Route::get('/customer/history{name}', [UserController::class,"customerHistory"])->name("user.history.view");
Route::get('/customer/settings{name}', [UserController::class,"settings"])->name("user.setting.view");
// Route::get('/customer/logout', [UserController::class,"logout"])->name("user.logout.view");



Route::get('/admin/dashboard', [UserController::class,"dashboardadmin"])->name("admin.index.view");
Route::get('/admin/deposit{name}', [UserController::class,"despositadmin"])->name("admin.deposit.view");
Route::get('/admin/withdraw{name}', [UserController::class,"withdrawadmin"])->name("admin.withdraw.view");
Route::get('/admin/investment{name}', [UserController::class,"investmentadmin"])->name("admin.investment.view");
Route::get('/admin/wallet', [UserController::class,"walletadmin"])->name("admin.wallet.view");
Route::get('/admin/users{name}', [UserController::class,"usersadmin"])->name("admin.users.view");
Route::get('/admin/plan', [UserController::class,"planadmin"])->name("admin.plans.view");
Route::get('/admin/application', [UserController::class,"applicationadmin"])->name("admin.application.view");
Route::get('/admin/profile', [UserController::class,"profileadmin"])->name("admin.profile.view");


Route::post('/register/{ref?}',[UserController::class,"register"])-> name("user.register.post");
Route::post('/login',[UserController::class,"userlogin"])-> name("user.login.post");