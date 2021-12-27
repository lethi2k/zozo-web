<?php

//use system and pubgin
use Illuminate\Support\Facades\Route;
use Illuminate\Console\Application;

// use ecommerce
use App\Http\Controllers\Admin\Ecommerce\DashboardController;
use App\Http\Controllers\Admin\Ecommerce\ProductController;
use App\Http\Controllers\Admin\Ecommerce\CategoryController;
use App\Http\Controllers\Admin\Ecommerce\AttributeController;
use App\Http\Controllers\Admin\Ecommerce\VariantController;
use App\Http\Controllers\Admin\Ecommerce\ManufacturerController;
use App\Http\Controllers\Admin\Ecommerce\WarehouseController;
use App\Http\Controllers\Admin\Ecommerce\ImportWarehouseController;
use App\Http\Controllers\Admin\Ecommerce\ExportWarehouseController;
use App\Http\Controllers\Admin\Ecommerce\CancelWarehouseController;
use App\Http\Controllers\Admin\Ecommerce\SupplierController;
use App\Http\Controllers\Admin\Ecommerce\ShipmentController;
use App\Http\Controllers\Admin\Ecommerce\OrderController;
use App\Http\Controllers\Admin\Ecommerce\DiscountController;
use App\Http\Controllers\Admin\Ecommerce\DatacenterController;
use App\Http\Controllers\Admin\Ecommerce\ContactController;
use App\Http\Controllers\Admin\Ecommerce\StoreController;

// use crm
use App\Http\Controllers\Admin\Crm\CalendarController;
use App\Http\Controllers\Admin\Crm\ProjectController;
use App\Http\Controllers\Admin\Crm\TaskController;
use App\Http\Controllers\Admin\Crm\StaffController;
use App\Http\Controllers\Admin\Crm\EmailController;
use App\Http\Controllers\Admin\Setting\FileController;

// use blog
use App\Http\Controllers\Admin\Post\BlogController;
use App\Http\Controllers\Admin\Post\InteractiveController;
use App\Http\Controllers\Admin\Post\AuthorController;
use App\Http\Controllers\Admin\Post\ReportController;
use App\Http\Controllers\Admin\Post\CategoryController as CategoryBlogController;
use App\Http\Controllers\Admin\Setting\ApplicationController;
use App\Http\Controllers\Admin\Setting\SettingController;

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


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {

    // ecommerce
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index']);
        Route::get('blog', [DashboardController::class, 'blog']);
        Route::get('crm', [DashboardController::class, 'CRM']);
    });

    Route::prefix('product')->group(function () {
        Route::get('list/all', [ProductController::class, 'index']);
        Route::get('add', [ProductController::class, 'create']);
    });

    Route::prefix('category')->group(function () {

        //get list
        Route::get('list', [CategoryController::class, 'index']);
        Route::get('detail/{id}', [CategoryController::class, 'detail']);

        // create
        Route::get('create', [CategoryController::class, 'create']);
        Route::post('store', [CategoryController::class, 'store']);

        //update
        Route::get('edit/{id}', [CategoryController::class, 'edit']);
        Route::post('update/{id}', [CategoryController::class, 'update']);

        //delete
        Route::get('destroy/{id}', [CategoryController::class, 'destroy']);

        //search ajax
        Route::post('ajax', [CategoryController::class, 'filter']);
        Route::post('ajax/parent', [CategoryController::class, 'parent']);
    });

    Route::prefix('variant')->group(function () {
        Route::get('list', [VariantController::class, 'index']);

        // create
        Route::get('create', [VariantController::class, 'create']);
        Route::post('store', [VariantController::class, 'store']);

        //update
        Route::get('edit/{id}', [VariantController::class, 'edit']);
        Route::post('update/{id}', [VariantController::class, 'update']);

        //delete
        Route::get('destroy/{id}', [VariantController::class, 'destroy']);
    });

    Route::prefix('attribute')->group(function () {
        Route::get('list', [AttributeController::class, 'index']);
    });

    Route::prefix('manufacturer')->group(function () {
        Route::get('list', [ManufacturerController::class, 'index']);
    });

    Route::prefix('warehouse')->group(function () {
        Route::get('list/all', [WarehouseController::class, 'index']);
        Route::get('import/list', [ImportWarehouseController::class, 'index']);
        Route::get('export/list', [ExportWarehouseController::class, 'index']);
        Route::get('cancel/list', [CancelWarehouseController::class, 'index']);
        Route::get('supplier/list', [SupplierController::class, 'index']);
    });

    Route::prefix('shipment')->group(function () {
        Route::get('overview', [ShipmentController::class, 'overview']);
        Route::get('list', [ShipmentController::class, 'index']);
        Route::get('setting', [ShipmentController::class, 'setting']);
    });

    Route::prefix('order')->group(function () {
        Route::get('list/all', [OrderController::class, 'index']);
        Route::get('list/cancel', [OrderController::class, 'cancel']);
        Route::get('list/refund', [OrderController::class, 'refund']);
        Route::get('add', [OrderController::class, 'create']);
    });

    Route::prefix('discount')->group(function () {
        Route::get('list/all', [DiscountController::class, 'index']);
        Route::get('portal', [DiscountController::class, 'portal']);
    });

    Route::prefix('datacenter')->group(function () {
        Route::get('list/all', [DatacenterController::class, 'index']);
        Route::get('add', [DatacenterController::class, 'create']);
    });

    Route::prefix('contact')->group(function () {
        Route::get('list/all', [ContactController::class, 'index']);
        Route::get('add', [ContactController::class, 'create']);
    });

    Route::prefix('store')->group(function () {
        Route::get('list', [StoreController::class, 'index']);
        Route::get('rating', [StoreController::class, 'rating']);
        Route::get('report', [StoreController::class, 'report']);
        Route::get('add', [StoreController::class, 'create']);
    });

    //crm
    Route::prefix('crm')->group(function () {

        Route::prefix('calendar')->group(function () {
            Route::get('tui', [CalendarController::class, 'index']);
            Route::get('full', [CalendarController::class, 'full']);
        });

        Route::prefix('project')->group(function () {
            Route::get('list', [ProjectController::class, 'index']);
            Route::get('overview', [ProjectController::class, 'overview']);
        });

        Route::prefix('task')->group(function () {
            Route::get('list', [TaskController::class, 'index']);
            Route::get('kanban', [TaskController::class, 'kanban']);
        });

        Route::prefix('staff')->group(function () {
            Route::get('list', [StaffController::class, 'index']);
        });

        Route::prefix('email')->group(function () {
            Route::get('list', [EmailController::class, 'index']);
        });
    });

    //blog
    Route::prefix('post')->group(function () {

        Route::prefix('blog')->group(function () {
            Route::get('list', [BlogController::class, 'index']);
        });

        Route::prefix('interactive')->group(function () {
            Route::get('list', [InteractiveController::class, 'index']);
        });

        Route::prefix('author')->group(function () {
            Route::get('list', [AuthorController::class, 'index']);
            Route::get('blog', [AuthorController::class, 'blog']);
        });

        Route::prefix('report')->group(function () {
            Route::get('list', [ReportController::class, 'index']);
        });

        Route::prefix('category')->group(function () {
            Route::get('list', [CategoryBlogController::class, 'index']);
        });
    });

    //setting
    Route::prefix('setting')->group(function () {

        Route::prefix('setting')->group(function () {
            Route::get('list', [SettingController::class, 'index']);
        });

        Route::prefix('file')->group(function () {
            Route::get('list', [FileController::class, 'index']);
        });

        Route::prefix('application')->group(function () {
            Route::get('list', [ApplicationController::class, 'index']);
        });
    });

});

Route::fallback(function () {
    return view("admin/error.404");
});
