<?php

use Illuminate\Support\Facades\Route;

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


Route::get("/",[\App\Http\Controllers\HomeController::class, "gotoHome"])->name("home");
Route::get("/login",[\App\Http\Controllers\LoginController::class, "gotoLogin"])->name("loginPage");
Route::post("login",[\App\Http\Controllers\LoginController::class, "checkUser"])->name("login");
Route::post("signpup",[\App\Http\Controllers\LoginController::class, "signUp"])->name("signup");

Route::middleware(['user.auth'])->group(function(){
    Route::get("/logout",[\App\Http\Controllers\LoginController::class, "logOut"])->name("logout");
    
    //Drugs
    Route::get("/drag_list",[\App\Http\Controllers\HomeController::class, "gotoDrug"])->name("homeTodrug");
    Route::get("/buy/{drug}/drug",[\App\Http\Controllers\DrugController::class, "buyDrug"])->name("buydrug");
    //search
    Route::get("/search_by_name",[\App\Http\Controllers\HomeController::class, "gotoNameS"])->name("name.search");
    Route::get("/search_by_brand",[\App\Http\Controllers\HomeController::class, "gotoNameB"])->name("brand.search");
    Route::get("/search_name",[\App\Http\Controllers\SearchController::class, "search_Name"])->name("searchByname");
    Route::get("/search_name1",[\App\Http\Controllers\SearchController::class, "search_Name1"])->name("searchByname1");
    Route::get("/search_brand",[\App\Http\Controllers\SearchController::class, "search_Brand"])->name("searchBybrand");
    Route::get("/search_brand1",[\App\Http\Controllers\SearchController::class, "search_Brand1"])->name("searchBybrand1");

    Route::get("/contact",[\App\Http\Controllers\HomeController::class, "gotoContact"])->name("contactPage");

    Route::middleware(["user.role:ROLE_ADMIN"])->group(function(){
        //Drugs
        Route::get("/add_drug",[\App\Http\Controllers\DrugController::class, "gotoAddDrug"])->name("addDrug");
        Route::post("adding_Drug",[\App\Http\Controllers\DrugController::class, "add_Drug"])->name("addingDrug");
        Route::get("/drug/{drug}/update",[\App\Http\Controllers\DrugController::class,"gotoUpdate_drug"])->name("dr_update");
        Route::patch("/drug/update/{drug}",[\App\Http\Controllers\DrugController::class,"updateDrug"]);
        Route::put("/drug/delete/{drug}",[\App\Http\Controllers\DrugController::class,"deleteDrug"])->name("drug.delete");
        
        //Employee
        Route::get("/pharmacy_employee",[\App\Http\Controllers\EmployeeController::class, "gotoEmployee"])->name("homeToemployee");
        Route::get("/add_employee",[\App\Http\Controllers\EmployeeController::class, "gotoAddEmployee"])->name("addEmployee");
        Route::post("adding_Employee",[\App\Http\Controllers\EmployeeController::class, "add_Employee"])->name("addingEmployee");
        Route::get("/emp/{emp}/update",[\App\Http\Controllers\EmployeeController::class,"gotoUpdate_Employee"])->name("emp_update");
        Route::patch("/emp/update/{emp}",[\App\Http\Controllers\EmployeeController::class,"updateEmployee"]);
        Route::put("/emp/delete/{emp}",[\App\Http\Controllers\EmployeeController::class,"deleteEmployee"])->name("emp.delete");
    });

});
















//Route::get("/pharmacy_storage",[\App\Http\Controllers\HomeController::class, "gotoStorage"])->name("homeTostorage");


