<?php
use Illuminate\Http\Request;
use App\Http\Controllers\StripePaymentController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userViewController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\submenuController;
use App\Http\Controllers\prayerController;
use App\Http\Controllers\teamController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\subscriberController;
use App\Http\Controllers\partinarsController;
use App\Http\Controllers\commentsController;
use App\Http\Controllers\postsController;
use App\Http\Controllers\adminAuthController;
use App\Http\Controllers\tagsController;
use App\Http\Controllers\userContactController;
use App\Http\Controllers\archivesController;
use App\Http\Controllers\donerController;
use App\Http\Controllers\PayPalPaymentController;

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


Route::get('/', [userViewController::class, 'index'])->name('Inedx');



Route::get('/home', [userViewController::class, 'index'])->name('Inedx');
Auth::routes();
// ========================User View Routes=================================
Route::get('/index', [userViewController::class, 'index']);
Route::get('/about-us', [userViewController::class, 'aboutus']);
Route::get('/services', [userViewController::class, 'services']);
Route::get('/services/{id}', [userViewController::class, 'show_services']);
Route::get('/faq', [userViewController::class, 'faq']);
Route::get('/our-publishes', [userViewController::class, 'ourpublishes']);
Route::get('/download-file/downloadmp4_mp3_pdf_image/{file}', [userViewController::class, 'downloadmp4_mp3_pdf_image']);
Route::get('/library', [userViewController::class, 'library']);
Route::get('/announcements', [userViewController::class, 'announcements']);
Route::get('/events', [userViewController::class, 'events']);
Route::get('/details/{id}', [userViewController::class, 'show_detail']);
Route::post('/posts/{id}/comments',[commentsController::class,'store']);
Route::get('/news', [userViewController::class, 'news']);
Route::get('/gallery', [userViewController::class, 'gallery']);

Route::get('/archives', [archivesController::class, 'archives']);
Route::get('/posts/tags/{tag}', [tagsController::class, 'show_tag']);
Route::get('/posts/tag/{post}', [tagsController::class, 'show_tag_details']);

Route::get('/our-team', [userViewController::class, 'ourteam']);
Route::get('/our-team/{id}', [userViewController::class, 'show_Team']);

Route::get('/our-teachers', [userViewController::class, 'ourteacher']);
Route::get('/our-teacher/{id}', [userViewController::class, 'show_Teacher']);

Route::get('/zakat', [userViewController::class, 'zakat']);
// ===================================================================='
Route::get('/classes', [userViewController::class, 'classes']);
Route::get('/classes/{classname}', [userViewController::class, 'classes']);
// =====================================================================

Route::post('/donate/{id}/comments', [commentsController::class, 'add_donate_comments']);
Route::get('/donate/{id}', [userViewController::class, 'show_donates']);
Route::get('/donate', [userViewController::class, 'donate']);
Route::post('/donate2', [userViewController::class, 'donate2']);
Route::get('/donate2', [userViewController::class, 'donate2']);
Route::get('/thankdonate', [userViewController::class, 'thankdonate']);

Route::get('/contact-us', [userContactController::class, 'contactus']);
Route::post('/user-contact-us',[userContactController::class, 'userContactUS']);
Route::post('/subscrib',[userContactController::class, 'subscriber']);


Route::get('lang/{locale}', function ($locale){
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/selectCatFormRoute', function ( Request $request) {
    session(['selectCatFormRoute'=>$request->selectCat]);
return redirect()->back();
});

// =============Strip payments routes ===================
Route::Post('/stripeOne', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
Route::post('/doante-route', [StripePaymentController::class, 'donatefun']);


// ================PayPal payments Routes===================================
Route::get('handle-payment', [PayPalPaymentController::class, 'handlePayment'])->name('make.payment');
Route::get('cancel-payment', [PayPalPaymentController::class, 'paymentCancel'])->name('cancel.payment');
Route::get('payment-success', [PayPalPaymentController::class, 'paymentSuccess'])->name('success.payment');
Route::get('payment-welcome', [PayPalPaymentController::class, 'paymentWelcome']);


Route::get('/welcome', function () {
    return view('welcome');
});







// =========================Admin View Routes=========================================
Route::prefix('admin')->middleware('can:manage-users')->group(function(){
Route::get('dashboard',[postsController::class,'dashboard']);
Route::resource('posts',postsController::class); 
Route::resource('menu',menuController::class);
Route::resource('submenu',submenuController::class);
Route::resource('prayer',prayerController::class);
Route::resource('team',teamController::class); 
Route::resource('partinars',partinarsController::class); 
Route::resource('contact',contactController::class); 
Route::resource('videos',videosController::class); 
Route::resource('our-subscribers',subscriberController::class); 
Route::get('login', [adminAuthController::class, 'adminLogin']);
Route::resource('ruler',adminAuthController::class);
Route::resource('tags',tagsController::class);
Route::post('imagePro', [HomeController::class, 'imageProStore']);
Route::get('doners', [donerController::class, 'index']);


});

