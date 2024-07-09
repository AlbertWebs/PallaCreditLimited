<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/news-updates', [App\Http\Controllers\HomeController::class, 'updates'])->name('news-updates');
Route::get('/news-updates/{slung}', [App\Http\Controllers\HomeController::class, 'update'])->name('news-update');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact-us');




/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::group(['prefix' => '/admin'], function () {
         Route::get('/', [AdminsController::class, 'adminHome'])->name('admin.home');

         // SiteSettings
        Route::get('credentials', [AdminsController::class, 'systemsCredentials']);
        Route::get('SiteSettings', [AdminsController::class, 'SiteSettings']);
        Route::get('SocialMediaSettings', [AdminsController::class, 'SocialMediaSettings']);
        Route::get('logo-and-favicon', [AdminsController::class, 'logo_and_favicon']);
        Route::post('logo-and-favicon-update', [AdminsController::class, 'logo_and_favicon_update']);

        // Terms and Conditions
        Route::get('terms', [AdminsController::class, 'terms']);
        Route::get('addTerms', [AdminsController::class, 'addTerms']);
        Route::get('editTerm/{id}', [AdminsController::class, 'editTerm']);
        Route::post('add_term', [AdminsController::class, 'add_term']);
        Route::post('edit_term/{id}', [AdminsController::class, 'edit_term']);
        Route::get('delete_term/{id}', [AdminsController::class, 'delete_term']);

        // Privacy Policy
        Route::get('privacy', [AdminsController::class, 'privacy']);
        Route::get('addPrivacy', [AdminsController::class, 'addPrivacy']);
        Route::get('editPrivacy/{id}', [AdminsController::class, 'editPrivacy']);
        Route::post('add_privacy', [AdminsController::class, 'add_privacy']);
        Route::post('edit_privacy/{id}', [AdminsController::class, 'edit_privacy']);
        Route::get('delete_privacy/{id}', [AdminsController::class, 'delete_privacy']);

        Route::get('/get-subcategories/{id}',  [AdminsController::class, 'get_subcategories']);

        // Copyright Statement
        Route::get('editCopyright', [AdminsController::class, 'copyright']);
        Route::post('edit_Copyright', [AdminsController::class, 'edit_copyright']);

        // About Us
        Route::get('editAbout', [AdminsController::class, 'about']);
        Route::post('edit_About', [AdminsController::class, 'edit_about']);

         // Categories
         Route::get('categories', [AdminsController::class, 'categories']);
         Route::get('addCategory', [AdminsController::class, 'addCategory']);
         Route::post('add_Category', [AdminsController::class, 'add_Category']);
         Route::get('editCategories/{id}', [AdminsController::class, 'editCategories']);
         Route::get('extras/{id}', [AdminsController::class, 'extras']);
         Route::post('edit_Category/{id}', [AdminsController::class, 'edit_Category']);
         Route::get('deleteCategory/{id}', [AdminsController::class, 'deleteCategory']);

        // Mains
        Route::get('mains', [AdminsController::class, 'mains']);
        Route::get('addMain', [AdminsController::class, 'addMain']);
        Route::post('add_Main', [AdminsController::class, 'add_Main']);
        Route::get('editMains/{id}', [AdminsController::class, 'editMains']);
        Route::post('edit_Main/{id}', [AdminsController::class, 'edit_Main']);
        Route::get('deleteMain/{id}', [AdminsController::class, 'deleteMain']);

        // SubCategories
        Route::get('subcategories', [AdminsController::class, 'subcategories']);
        Route::get('addSubCategory', [AdminsController::class, 'addSubCategory']);
        Route::post('add_SubCategory', [AdminsController::class, 'add_SubCategory']);
        Route::get('editSubCategories/{id}', [AdminsController::class, 'editSubCategories']);
        Route::get('extras/{id}', [AdminsController::class, 'extras']);
        Route::post('edit_SubCategory/{id}', [AdminsController::class, 'edit_SubCategory']);
        Route::get('deleteSubCategory/{id}', [AdminsController::class, 'deleteSubCategory']);

        // Products
        Route::get('product-approve', [AdminsController::class, 'approve']);
        Route::get('approve-product/{id}', [AdminsController::class, 'approve_now']);
        Route::get('products', [AdminsController::class, 'products']);
        Route::get('addProduct', [AdminsController::class, 'addProduct']);
        Route::post('add_Product', [AdminsController::class, 'add_Product']);
        Route::get('editProducts/{id}', [AdminsController::class, 'editProducts']);
        Route::post('edit_Product/{id}', [AdminsController::class, 'edit_Product']);
        Route::get('deleteProduct/{id}', [AdminsController::class, 'deleteProduct']);


        Route::get('product-approve', [AdminsController::class, 'approve'])->name('product-approve');


        // Blog
        Route::get('blog', [AdminsController::class, 'blog']);
        Route::get('addBlog', [AdminsController::class, 'addBlog']);
        Route::post('add_Blog', [AdminsController::class, 'add_Blog']);
        Route::get('editBlog/{id}', [AdminsController::class, 'editBlog']);
        Route::post('edit_Blog/{id}', [AdminsController::class, 'edit_Blog']);
        Route::get('delete_Blog/{id}', [AdminsController::class, 'delete_Blog']);

        // Payments
        Route::get('b2b', [AdminsController::class, 'b2b']);
        Route::get('b2c', [AdminsController::class, 'b2c']);
        Route::get('lnmo_api_response', [AdminsController::class, 'lnmo_api_response']);
        Route::get('mobile_payments', [AdminsController::class, 'mobile_payments']);
        Route::get('reverse_transaction', [AdminsController::class, 'reverse_transaction']);
        Route::get('transaction_status', [AdminsController::class, 'transaction_status']);
        Route::get('accountbalance', [AdminsController::class, 'accountbalance']);
        Route::get('approve-transaction/{id}', [AdminsController::class, 'approve_transaction']);
        Route::get('approve-transaction-stk/{id}', [AdminsController::class, 'approve_transaction_stk']);

        //Manage Users
        Route::get('users', [AdminsController::class, 'users']);
        Route::get('admins', [AdminsController::class, 'admins']);
        Route::get('managers', [AdminsController::class, 'managers']);
        Route::get('addUser', [AdminsController::class, 'addUser']);
        Route::get('editUser/{id}', [AdminsController::class, 'editUser']);
        Route::post('add_User', [AdminsController::class, 'add_User']);
        Route::post('edit_User/{id}', [AdminsController::class, 'edit_User']);
        Route::get('delete_user/{id}', [AdminsController::class, 'delete_user']);
        Route::get('switchRole/{id}', [AdminsController::class, 'switchRole']);
        Route::get('switchStatus/{id}', [AdminsController::class, 'switchStatus']);
        Route::get('slungify', [AdminsController::class, 'slungify']);



        // Orders
        Route::get('orders', [AdminsController::class, 'orders']);
        Route::get('process-order', [AdminsController::class, 'process_order']);

        Route::get('county-bounty', [AdminsController::class, 'county_bounty']);
        Route::get('artisan-voices', [AdminsController::class, 'artisan_voices']);
        Route::post('update-county-bounty', [AdminsController::class, 'update_county_bounty'])->name('update-county-bounty');
        Route::post('update-artisan-voices', [AdminsController::class, 'update_artisan_voices'])->name('update-artisan-voices');


        // AJAX REQUESTS
        Route::post('addCategoryAjaxRequest', [AdminsController::class, 'addCategoryAjaxRequest']);
        Route::post('deleteExtraAjax', [AdminsController::class, 'deleteExtraAjaxRequest']);
        Route::post('deleteBlogAjax', [AdminsController::class, 'deleteBlogAjax']);
        Route::put('updateSiteSettingsAjax', [AdminsController::class, 'updateSiteSettingsAjax']);
        Route::put('updateSiteSocialMediaAjax', [AdminsController::class, 'updateSiteSocialMediaAjax']);
        Route::post('deleteSubCategoryAjax', [AdminsController::class, 'deleteSubCategoryAjax']);

        Route::post('deleteCategoryAjax', [AdminsController::class, 'deleteCategoryAjax']);
        Route::post('deleteC2BAjax', [AdminsController::class, 'deleteC2BAjax']);
        Route::post('deleteB2BAjax', [AdminsController::class, 'deleteB2BAjax']);
        Route::post('deleteB2CAjax', [AdminsController::class, 'deleteB2CAjax']);
        Route::post('deleteBalAjax', [AdminsController::class, 'deleteBalAjax']);
        Route::post('deleteSTKAjax', [AdminsController::class, 'deleteSTKAjax']);
        Route::post('deleteReverseAjax', [AdminsController::class, 'deleteReverseAjax']);
        Route::post('deleteTransactionAjax', [AdminsController::class, 'deleteTransactionAjax']);
        Route::post('deleteUserAjax', [AdminsController::class, 'deleteUserAjax']);
        Route::post('deletePrivacyAjax', [AdminsController::class, 'deletePrivacyAjax']);
        Route::post('deleteTermsAjax', [AdminsController::class, 'deleteTermsAjax']);
        Route::post('deleteProductAjax', [AdminsController::class, 'deleteProductAjax']);
        //clean facebook pixels
        Route::get('addProductToFacebookPixel', [AdminsController::class, 'addProductToFacebookPixel']);
        Route::get('emptyProductToFacebookPixel', [AdminsController::class, 'emptyProductToFacebookPixel']);
        Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
        Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');

    });
});
