<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAccountsController;
use App\Http\Controllers\AdminRecipeController;
use App\Http\Controllers\AdminCommunityController;
use App\Http\Controllers\AdminReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ProfileCollectionController;
use App\Http\Controllers\ProfileRecipeController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\UserCommunityReportController;
use App\Http\Controllers\FAQController;

//landing
Route::get('/', function () {
    return view('welcome');
});

//----------------------------------------------------------------------------------------------------------------------------------------------------
//Login Part
Route::get('/RecipeVault/Portal', [LoginController::class, 'index'])->name('portal');
Route::match(['get', 'post'], '/RecipeVault/Portal/login', [LoginController::class, 'login'])->name('portal.login');
Route::post('/RecipeVault/Portal/store', [LoginController::class, 'store'])->name('portal.store');

//----------------------------------------------------------------------------------------------------------------------------------------------------
//User Side Routes
Route::get('/user/index', [UserController::class, 'index'])->name('users.user_index');
Route::get('/user/index/logout', [UserController::class, 'logout'])->name('users.logout');
Route::get ('/users/index/recipesshow/{id}', [UserController::class, 'ShowRecipeFromHome'])->name('users.recipes.home.show');

Route::get ('/users/recipe/showcategoriesrecipe/{id}', [RecipeController::class, 'ShowRecipeFromCategories'])->name('users.recipes.categories.show'); //for gikan sa profile ang back ani

//for other user na makita
Route::get('/user/index/other-user-profile/{user_id}', [UserController::class, 'otherprofile'])->name('users.view_other_profile');
// Route::get ('/users/otherprofile/recipesshow/{id}', [ProfileRecipeController::class, 'ShowRecipeFromOtherProfile'])->name('users.recipes.otherprofile.show');
Route::get('/users/otherprofile/recipesshow/{id}/{user_id}', [ProfileRecipeController::class, 'ShowRecipeFromOtherProfile'])
    ->name('users.recipes.otherprofile.show');

//Search Feature
Route::get('/search', [UserController::class, 'search'])->name('search');

//User Profile
Route::get('/user/profile/index', [UserProfileController::class, 'ShowProfile'])->name('users.profile.show');
Route::post('/users/profile/update-profile-picture', [UserProfileController::class, 'updateProfilePicture'])->name('users.profile.updateProfilePicture');

//User Profile Recipe part
Route::resource('recipes', RecipeController::class);

Route::get('users/profile/addrecipe', [ProfileRecipeController::class, 'addRecipe'])->name('users.profile.addrecipe');
Route::post('users/profile/addrecipe', [ProfileRecipeController::class, 'storeRecipe'])->name('users.profile.store_recipe');
Route::get('users/profile/recipes/{id}/edit', [ProfileRecipeController::class, 'edit'])->name('users.profile.recipes_edit');
Route::put('users/profile/recipes/{id}', [ProfileRecipeController::class, 'update'])->name('users.profile.recipes_update');
Route::delete('users/profile/recipes/{id}', [ProfileRecipeController::class, 'destroy'])->name('users.profile.recipes_destroy');

Route::get ('/users/profile/recipesshow/{id}', [ProfileRecipeController::class, 'ShowRecipeFromProfile'])->name('users.recipes.profile.show');


//User Profile Collection na part
Route::post('/user/profile/collections/createcollection', [ProfileCollectionController::class, 'ProfileCollectionStore'])->name('users.profile.collection_create_store');
Route::post('/users/profile/collections/add-recipe', [ProfileCollectionController::class, 'ProfileCollectionAddRecipeinCollection'])->name('users.profile.collections_addRecipe_in_collection');


//User Recipe na literal dili profile
Route::get ('/users/recipe', [RecipeController::class, 'ShowCategoriesRecipe'])->name('users.categories_recipe.show');
Route::get ('/users/recipe/{id}', [RecipeController::class, 'ShowRecipe'])->name('users.recipes.show'); //for gikan sa profile ang back ani
Route::post('/user/recipe/collections/createcollection', [RecipeController::class, 'RecipeCreateCollectionStore'])->name('users.recipes.create_collection_store');
Route::post('/users/recipe/collections/add-recipe', [RecipeController::class, 'RecipeAddRecipeinCollection'])->name('users.recipes.addRecipe_in_collection');

Route::post('/users/recipe/raterecipe/{recipe_id}', [RecipeController::class, 'RateRecipe'])->name('users.recipes.rate_recipe');
// Route::put('/users/recipe/raterecipe/update/{recipe_id}', [RecipeController::class, 'RecipeRateUpdate'])->name('users.recipes.rate_recipe_update');

//User Collection
Route::get('/user/collections', [CollectionController::class, 'index'])->name('users.collections.show');
Route::post('/users/collections/store', [CollectionController::class, 'store'])->name('users.collections.store'); 
Route::delete('/users/collections/delete', [CollectionController::class, 'destroy'])->name('users.collections.destroy');
Route::put('/users/collections/edit', [CollectionController::class, 'update'])->name('users.collections.update');


Route::post('/users/collections/addrecipe', [CollectionController::class, 'AddRecipeinCollection'])->name('users.collections.addRecipe');
Route::delete('/users/collections/{collection}/recipes/{recipe}', [CollectionController::class, 'removeRecipeFromCollection'])->name('users.collections.removeRecipe');


//Users Community Routes
Route::get('/users/community', [CommunityController::class, 'index'])->name('users.community.index');
Route::get('/users/community/chat', [CommunityController::class, 'chat'])->name('users.community.chat');
Route::post('/users/community/send-message', [CommunityController::class, 'sendMessage'])->name('users.community.sendMessage');
Route::post('/users/community/report', [UserCommunityReportController::class, 'reportuser'])->name('users.community.report');

//for users feedback
Route::get('/users/feedback', [FeedbackController::class, 'showFeedback'])->name('users.feedback.show');
Route::post('/users/feedback/store', [FeedbackController::class, 'store'])->name('users.feedback.store');







//----------------------------------------------------------------------------------------------------------------------------------------------------
//Admin Side Routes

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.admin_index');
Route::get('/user/dashboard/logout', [AdminController::class, 'logout'])->name('admin.logout');

//for admin accounts
Route::get('/admin/accounts', [AdminAccountsController::class, 'showAccounts'])->name('admin.accounts.show');
Route::get('/admin/accounts/search', [AdminAccountsController::class, 'search'])->name('admin.accounts.search');
Route::get('/admin/accounts/edit/{user}', [AdminAccountsController::class, 'edit'])->name('admin.accounts.edit');
Route::put('/admin/accounts/update/{user}', [AdminAccountsController::class, 'update'])->name('admin.accounts.update');
Route::delete('/admin/account/softdelete/{user}', [AdminAccountsController::class, 'softDelete'])->name('admin.accounts.softDelete');


//for admin recipes
Route::get('/admin/recipes', [AdminRecipeController::class, 'showRecipes'])->name('admin.recipes.show');
Route::get('/admin/recipes/search', [AdminRecipeController::class, 'search'])->name('admin.recipes.search');
Route::delete('/admin/recipe/softdelete/{recipes}', [AdminRecipeController::class, 'softDelete'])->name('admin.recipes.softDelete');

//for admin community
Route::get('/admin/community', [AdminCommunityController::class, 'showCommunity'])->name('admin.community.show');
Route::get('/admin/community/search', [AdminCommunityController::class, 'search'])->name('admin.community.search');
Route::delete('/admin/community/softdelete/{community}', [AdminCommunityController::class, 'softDelete'])->name('admin.community.softDelete');

//for admin report
Route::get('/admin/reports', [AdminReportController::class, 'showReports'])->name('admin.reports.show');
Route::delete('/admin/reports/softdelete/{report}', [AdminReportController::class, 'softDelete'])->name('admin.report.softDelete');



//----------------------------------------------------------------------------------------------------------------------------------------


// Route::get('/recipevault/faq', [FAQController::class, 'showfaq'])->name('show.faq');


//----------------------------------------------------------------------------------------------------------------------------------------------------

