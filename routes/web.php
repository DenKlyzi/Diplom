<?php

use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    if (auth()->check() && auth()->user()->login === 'admin') {
        return view('main.index');
    }
    return redirect('/login')->withErrors(['error' => 'Доступ запрещен']);
})->name('admin');

Route::get('/login', [\App\Http\Controllers\Site\Auth\LogController::class, 'showLogForm'])->name('login');

Route::post('/login', [\App\Http\Controllers\Site\Auth\LogController::class, 'log']);

Route::get('/main', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::get('/contacts', \App\Http\Controllers\Site\Contacts\IndexController::class)->name('site.contacts');

Route::post('/send-contact-form', [\App\Http\Controllers\ContactController::class, 'send'])->name('send.contact.form');

Route::post('/order', [App\Http\Controllers\OrderController::class, 'store'])->name('order.store');



Route::group(['prefix'=> 'categories'], function ()
{
    Route::get('/', \App\Http\Controllers\Category\IndexController::class)->name('category.index');
    Route::get('/create', \App\Http\Controllers\Category\CreateController::class)->name('category.create');
    Route::delete('/{category}', \App\Http\Controllers\Category\DeleteController::class)->name('category.delete');
    Route::get('/{category}/edit', \App\Http\Controllers\Category\EditController::class)->name('category.edit');
    Route::get('/{category}', \App\Http\Controllers\Category\ShowController::class)->name('category.show');
    Route::post('/', \App\Http\Controllers\Category\StoreController::class)->name('category.store');
    Route::patch('/{category}', \App\Http\Controllers\Category\UpdateController::class)->name('category.update');
});

Route::group(['prefix'=> 'users'], function ()
{
    Route::get('/', \App\Http\Controllers\Users\IndexController::class)->name('users.index');
    Route::get('/create', \App\Http\Controllers\Users\CreateController::class)->name('users.create');
    Route::delete('/{users}', \App\Http\Controllers\Users\DeleteController::class)->name('users.delete');
    Route::get('/{users}/edit', \App\Http\Controllers\Users\EditController::class)->name('users.edit');
    Route::get('/{users}', \App\Http\Controllers\Users\ShowController::class)->name('users.show');
    Route::post('/', \App\Http\Controllers\Users\StoreController::class)->name('users.store');
    Route::patch('/{users}', \App\Http\Controllers\Users\UpdateController::class)->name('users.update');
});

Route::group(['prefix'=> 'products'], function ()
{
    Route::get('/', \App\Http\Controllers\Products\IndexController::class)->name('products.index');
    Route::get('/create', \App\Http\Controllers\Products\CreateController::class)->name('products.create');
    Route::delete('/{products}', \App\Http\Controllers\Products\DeleteController::class)->name('products.delete');
    Route::get('/{products}/edit', \App\Http\Controllers\Products\EditController::class)->name('products.edit');
    Route::get('/{products}', \App\Http\Controllers\Products\ShowController::class)->name('products.show');
    Route::post('/', \App\Http\Controllers\Products\StoreController::class)->name('products.store');
    Route::patch('/{products}', \App\Http\Controllers\Products\UpdateController::class)->name('products.update');
});

Route::group(['prefix'=> 'gpus'], function ()
{
    Route::get('/', \App\Http\Controllers\GpuCatalogs\IndexController::class)->name('gpus.index');
    Route::get('/create', \App\Http\Controllers\GpuCatalogs\CreateController::class)->name('gpus.create');
    Route::delete('/{gpus}', \App\Http\Controllers\GpuCatalogs\DeleteController::class)->name('gpus.delete');
    Route::get('/{gpus}/edit', \App\Http\Controllers\GpuCatalogs\EditController::class)->name('gpus.edit');
    Route::get('/{gpus}', \App\Http\Controllers\GpuCatalogs\ShowController::class)->name('gpus.show');
    Route::post('/', \App\Http\Controllers\GpuCatalogs\StoreController::class)->name('gpus.store');
    Route::patch('/{gpus}', \App\Http\Controllers\GpuCatalogs\UpdateController::class)->name('gpus.update');
});

Route::group(['prefix'=> 'cpus'], function ()
{
    Route::get('/', \App\Http\Controllers\CpuCatalogs\IndexController::class)->name('cpus.index');
    Route::get('/create', \App\Http\Controllers\CpuCatalogs\CreateController::class)->name('cpus.create');
    Route::delete('/{cpus}', \App\Http\Controllers\CpuCatalogs\DeleteController::class)->name('cpus.delete');
    Route::get('/{cpus}/edit', \App\Http\Controllers\CpuCatalogs\EditController::class)->name('cpus.edit');
    Route::get('/{cpus}', \App\Http\Controllers\CpuCatalogs\ShowController::class)->name('cpus.show');
    Route::post('/', \App\Http\Controllers\CpuCatalogs\StoreController::class)->name('cpus.store');
    Route::patch('/{cpus}', \App\Http\Controllers\CpuCatalogs\UpdateController::class)->name('cpus.update');
});

Route::group(['prefix'=> 'rams'], function ()
{
    Route::get('/', \App\Http\Controllers\RamCatalogs\IndexController::class)->name('rams.index');
    Route::get('/create', \App\Http\Controllers\RamCatalogs\CreateController::class)->name('rams.create');
    Route::delete('/{rams}', \App\Http\Controllers\RamCatalogs\DeleteController::class)->name('rams.delete');
    Route::get('/{rams}/edit', \App\Http\Controllers\RamCatalogs\EditController::class)->name('rams.edit');
    Route::get('/{rams}', \App\Http\Controllers\RamCatalogs\ShowController::class)->name('rams.show');
    Route::post('/', \App\Http\Controllers\RamCatalogs\StoreController::class)->name('rams.store');
    Route::patch('/{rams}', \App\Http\Controllers\RamCatalogs\UpdateController::class)->name('rams.update');
});

Route::group(['prefix'=> 'boxes'], function ()
{
    Route::get('/', \App\Http\Controllers\BoxCatalogs\IndexController::class)->name('boxes.index');
    Route::get('/create', \App\Http\Controllers\BoxCatalogs\CreateController::class)->name('boxes.create');
    Route::delete('/{boxes}', \App\Http\Controllers\BoxCatalogs\DeleteController::class)->name('boxes.delete');
    Route::get('/{boxes}/edit', \App\Http\Controllers\BoxCatalogs\EditController::class)->name('boxes.edit');
    Route::get('/{boxes}', \App\Http\Controllers\BoxCatalogs\ShowController::class)->name('boxes.show');
    Route::post('/', \App\Http\Controllers\BoxCatalogs\StoreController::class)->name('boxes.store');
    Route::patch('/{boxes}', \App\Http\Controllers\BoxCatalogs\UpdateController::class)->name('boxes.update');
});

Route::group(['prefix'=> 'monitors'], function ()
{
    Route::get('/', \App\Http\Controllers\MonitorCatalogs\IndexController::class)->name('monitors.index');
    Route::get('/create', \App\Http\Controllers\MonitorCatalogs\CreateController::class)->name('monitors.create');
    Route::delete('/{monitors}', \App\Http\Controllers\MonitorCatalogs\DeleteController::class)->name('monitors.delete');
    Route::get('/{monitors}/edit', \App\Http\Controllers\MonitorCatalogs\EditController::class)->name('monitors.edit');
    Route::get('/{monitors}', \App\Http\Controllers\MonitorCatalogs\ShowController::class)->name('monitors.show');
    Route::post('/', \App\Http\Controllers\MonitorCatalogs\StoreController::class)->name('monitors.store');
    Route::patch('/{monitors}', \App\Http\Controllers\MonitorCatalogs\UpdateController::class)->name('monitors.update');
});

Route::group(['prefix'=> 'peripherys'], function ()
{
    Route::get('/', \App\Http\Controllers\PeripheryCatalogs\IndexController::class)->name('peripherys.index');
    Route::get('/create', \App\Http\Controllers\PeripheryCatalogs\CreateController::class)->name('peripherys.create');
    Route::delete('/{peripherys}', \App\Http\Controllers\PeripheryCatalogs\DeleteController::class)->name('peripherys.delete');
    Route::get('/{peripherys}/edit', \App\Http\Controllers\PeripheryCatalogs\EditController::class)->name('peripherys.edit');
    Route::get('/{peripherys}', \App\Http\Controllers\PeripheryCatalogs\ShowController::class)->name('peripherys.show');
    Route::post('/', \App\Http\Controllers\PeripheryCatalogs\StoreController::class)->name('peripherys.store');
    Route::patch('/{peripherys}', \App\Http\Controllers\PeripheryCatalogs\UpdateController::class)->name('peripherys.update');
});

Route::group(['prefix'=> 'others'], function ()
{
    Route::get('/', \App\Http\Controllers\OtherCatalogs\IndexController::class)->name('others.index');
    Route::get('/create', \App\Http\Controllers\OtherCatalogs\CreateController::class)->name('others.create');
    Route::delete('/{others}', \App\Http\Controllers\OtherCatalogs\DeleteController::class)->name('others.delete');
    Route::get('/{others}/edit', \App\Http\Controllers\OtherCatalogs\EditController::class)->name('others.edit');
    Route::get('/{others}', \App\Http\Controllers\OtherCatalogs\ShowController::class)->name('others.show');
    Route::post('/', \App\Http\Controllers\OtherCatalogs\StoreController::class)->name('others.store');
    Route::patch('/{others}', \App\Http\Controllers\OtherCatalogs\UpdateController::class)->name('others.update');
});

Route::group(['prefix' => 'orders'], function () {
    Route::get('/', \App\Http\Controllers\Orders\IndexController::class)->name('orders.index');
    Route::delete('/{order}', \App\Http\Controllers\Orders\DeleteController::class)->name('orders.delete');
    Route::get('/{order}', \App\Http\Controllers\Orders\ShowController::class)->name('orders.show');
    Route::post('/', \App\Http\Controllers\Orders\StoreController::class)->name('orders.store');
});

Route::get('/', \App\Http\Controllers\Site\Layouts\IndexController::class)->name('site.index');
Route::get('/contacts', \App\Http\Controllers\Site\Contacts\IndexController::class)->name('site.contacts');

Route::middleware(['guest'])->group(function () {
    Route::get('login', [\App\Http\Controllers\Site\Auth\LogController::class, 'showLogForm'])->name('site.login');
    Route::post('login', [\App\Http\Controllers\Site\Auth\LogController::class, 'log']);
    Route::get('register', [\App\Http\Controllers\Site\Auth\RegisterController::class, 'showRegistrationForm'])->name('site.register');
    Route::post('register', [\App\Http\Controllers\Site\Auth\RegisterController::class, 'register']);
    Route::post('/check-login', [\App\Http\Controllers\Site\Auth\RegisterController::class, 'checkLogin'])->name('check.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [\App\Http\Controllers\Site\Auth\ProfileController::class, 'show'])->name('site.profile');
    Route::get('logout', [\App\Http\Controllers\Site\Auth\LogController::class, 'logout'])->name('site.logout');
});

Route::get('logout', [\App\Http\Controllers\Site\Auth\LogController::class, 'logout'])->name('site.logout');

Route::group(['prefix' => 'boxcat'], function () {
    Route::get('/', [\App\Http\Controllers\Site\BoxCat\IndexController::class, 'ShowCards'])->name('site.boxcat');
    Route::get('/{box_id}', [\App\Http\Controllers\Site\BoxCat\ProductController::class, 'getProduct'])->name('site.boxprod');
});

Route::group(['prefix' => 'cpucat'], function () {
    Route::get('/', [\App\Http\Controllers\Site\CpuCat\IndexController::class, 'ShowCards'])->name('site.cpucat');
    Route::get('/{cpu_id}', [\App\Http\Controllers\Site\CpuCat\ProductController::class, 'getProduct'])->name('site.cpuprod');
});

Route::group(['prefix' => 'gpucat'], function () {
    Route::get('/', [\App\Http\Controllers\Site\GpuCat\IndexController::class, 'ShowCards'])->name('site.gpucat');
    Route::get('/{gpu_id}', [\App\Http\Controllers\Site\GpuCat\ProductController::class, 'getProduct'])->name('site.gpuprod');
});

Route::group(['prefix' => 'monitorcat'], function () {
    Route::get('/', [\App\Http\Controllers\Site\MonitorCat\IndexController::class, 'ShowCards'])->name('site.monitorcat');
    Route::get('/{monitor_id}', [\App\Http\Controllers\Site\MonitorCat\ProductController::class, 'getProduct'])->name('site.monitorprod');
});

Route::group(['prefix' => 'othercat'], function () {
    Route::get('/', [\App\Http\Controllers\Site\OtherCat\IndexController::class, 'ShowCards'])->name('site.othercat');
    Route::get('/{other_id}', [\App\Http\Controllers\Site\OtherCat\ProductController::class, 'getProduct'])->name('site.otherprod');
});

Route::group(['prefix' => 'peripherycat'], function () {
    Route::get('/', [\App\Http\Controllers\Site\PeripheryCat\IndexController::class, 'ShowCards'])->name('site.peripherycat');
    Route::get('/{periphery_id}', [\App\Http\Controllers\Site\PeripheryCat\ProductController::class, 'getProduct'])->name('site.peripheryprod');
});

Route::group(['prefix' => 'pccat'], function () {
    Route::get('/', [\App\Http\Controllers\Site\PcCat\IndexController::class, 'ShowCards'])->name('site.pccat');
    Route::get('/{pc_id}', [\App\Http\Controllers\Site\PcCat\ProductController::class, 'getProduct'])->name('site.pcprod');
});

Route::group(['prefix' => 'ramcat'], function () {
    Route::get('/', [\App\Http\Controllers\Site\RamCat\IndexController::class, 'ShowCards'])->name('site.ramcat');
    Route::get('/{ram_id}', [\App\Http\Controllers\Site\RamCat\ProductController::class, 'getProduct'])->name('site.ramprod');
});

Route::group(['prefix' => 'cart'], function () {
    Route::get('/', [\App\Http\Controllers\Site\Cart\IndexController::class, 'showCart'])->name('site.cart');
    Route::get('/add-to-cart', [\App\Http\Controllers\Site\Cart\IndexController::class, 'addToCart'])->name('addToCart');
    Route::delete('/remove/{id}', [\App\Http\Controllers\Site\Cart\IndexController::class, 'removeFromCart'])->name('cart.remove');
});

Route::group(['prefix' => 'likes'], function () {
    Route::get('/likes', \App\Http\Controllers\Site\Likes\IndexController::class)->name('site.likes');
    Route::get('/add-to-like', [\App\Http\Controllers\Site\Likes\IndexController::class, 'addToLike'])->name('addToLike');
    Route::delete('/remove/{id}', [\App\Http\Controllers\Site\Likes\IndexController::class, 'removeFromLike'])->name('likes.remove');
    Route::delete('/add-to-cart-from-like/{id}', [\App\Http\Controllers\Site\Likes\IndexController::class, 'addToCartFromLike'])->name('likes.add_to_cart');
});

Route::group(['prefix'=> 'news'], function ()
{
    Route::get('/', \App\Http\Controllers\News\IndexController::class)->name('news.index');
    Route::get('/create', \App\Http\Controllers\News\CreateController::class)->name('news.create');
    Route::delete('/{news}', \App\Http\Controllers\News\DeleteController::class)->name('news.delete');
    Route::get('/{news}/edit', \App\Http\Controllers\News\EditController::class)->name('news.edit');
    Route::get('/{news}', \App\Http\Controllers\News\ShowController::class)->name('news.show');
    Route::post('/', \App\Http\Controllers\News\StoreController::class)->name('news.store');
    Route::patch('/{news}', \App\Http\Controllers\News\UpdateController::class)->name('news.update');
});

Route::group(['prefix' => 'newscat'], function () {
    Route::get('/', [\App\Http\Controllers\Site\NewsCat\IndexController::class, 'ShowCards'])->name('site.newscat');
});









