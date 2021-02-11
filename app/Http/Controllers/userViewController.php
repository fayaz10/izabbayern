<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\models\menu;
use App\models\submenu;
use App\models\prayer;
use App\models\contact;
use App\models\team;
use App\models\publishes;
use App\models\subscriber;
use App\models\videos;
use App\models\posts;
Use DB;
Use App;
class userViewController extends Controller
{

 
    public function index(){
   
        $events = posts::where('category','=','events' )->where('post_type','!=','upcoming_event' )->where('status','=',1 )->orderBy('id','desc')->get()->take(4);
        $eventsup = posts::where('category','=','events' )->where('post_type','=','upcoming_event' )->where('status','=',1 )->orderBy('id','desc')->get()->take(1);
        $banners = posts::where('status','=',1)->where('category','=','banner')->get();
        $gallery = posts::where('category','=','gallery' )->where('status','=',1)->get()->take(6);
        $galleryHeader = posts::where('category','=','gallery' )->where('status','=',1)->get()->take(6);
        $prayer = prayer::get()->take(6);
        $fa_prayer = prayer::orderBy('id','desc')->get()->take(6);
        return view('userViewPages.index')
        ->with('banners',$banners)
        ->with('prayer',$prayer)
        ->with('galleryHeader',$galleryHeader)
        ->with('fa_prayer',$fa_prayer)
        ->with('gallery',$gallery)
        ->with('events',$events)
        ->with('eventsup',$eventsup);
    }

    public function gallery(){
      $gallery = posts::where('category','=','gallery' )->where('status','=',1)->get();
      return view('userViewPages.gallery')->with('gallery',$gallery);
    }
    public function aboutus(){
          $submenus = submenu::where('status','=',1)->get();
          $news = posts::where('status','=',1)->where('category','=','news')->get()->take(3);
          $aboutus = posts::where('status','=',1)->where('category','=','aboutus')->get();
          $contactus = contact::get()->take(1);
            return view('userViewPages.about_us')
            ->with('contactus',$contactus )
            ->with('news',$news)
            ->with('submenus',$submenus)
            ->with('aboutus',$aboutus);
    }

    public function services(){
          $services = posts::where('status','=',1)->where('category','=','services')->get();
            return view('userViewPages.services')->with('services',$services);
    }

 
  
    public function faq(){
          $faqs = posts::where('status','=',1)->where('category','=','faq')->get();
        return view('userViewPages.faq')->with('faqs',$faqs);
    }
   


    public function ourpublishes(){
          $publishes = posts::where('status','=',1)->where('category','=','publish' )->get();
            return view('userViewPages.our_publishes')->with('publishes',$publishes);
    }
    public function downloadmp4_mp3_pdf_image($file){
      return response()->download('storage/MP4_MP3_PDF_Image_files/'.$file);
    }

    public function library(){
          $library = posts::where('status','=',1)->where('category','=','library' )->get();
            return view('userViewPages.library')->with('library',$library);
    }
   
    public function announcements(){
          $announcements = posts::where('status','=',1)->where('category','=','announce' )->paginate(6);
          return view('userViewPages.announcements')->with('announcements',$announcements);
    }
    public function events(){
          $events = posts::where('status','=',1)->where('category','=','events' )->paginate(6);
             return view('userViewPages.events')->with('events',$events);
    }
    public function news(){
          $news = posts::where('status','=',1)->where('category','=','news' )->paginate(6);
              return view('userViewPages.news')->with('news',$news);
    }
    public function show_detail($id)
    {
      $archive = posts::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
      ->groupBy('year','month')
      ->orderByRaw('min(created_at) desc')
      ->get()->toArray();
      $news = posts::where('status','=',1)->where('category','=','news')->get()->take(3);
      $contactus = contact::get()->take(1);
      $submenus = submenu::where('status','=',1)->get();
       $findEvents = posts::find($id);
       $events = posts::where('status','=',1)->get();
       return view('userViewPages.show_details')
       ->with('contactus',$contactus )
       ->with('news',$news)
       ->with('submenus',$submenus)
       ->with('archive',$archive)
       ->with('events',$events)
       ->with('findEvents',$findEvents);

    }

    public function ourteacher(){
          $teachers = team::where('category','=','teacher')->where('status','=',1)->get();
               return view('userViewPages.our_teacher')
               ->with('teachers',$teachers);
    }

    public function ourteam(){
      $ourteam = team::where('status','=',1)->where('category','=', 'team')->get();
        return view('userViewPages.our_team')
        ->with('ourteam',$ourteam);
    }

    public function show_Team($id)
    {
           $teachers = team::where('status','=',1)->get();
           $header = team::where('header','=',2)->where('status','=',1)->get()->take(1);
           $teacher = team::find($id);
              return view('userViewPages.show_teacher_and_team')
              ->with('teacher',$teacher)
              ->with('teachers',$teachers)
              ->with('header',$header);

    }

    public function classes($classname = null){
        $videos = videos::where('status','=',1)
        ->where('class','=',$classname)->get();
    return view('userViewPages.classes')->with('videos',$videos);
    }
    public function zakat(){

      $zakats = posts::where('status','=',1)
      ->where('category','=','zakat')->get()->take(3);
       return view('userViewPages.zakat')->with('zakats',$zakats);
    }

    public function donate(){
          $donations = posts::where('status','=',1)->where('category','=','donations')->get();
              return view('userViewPages.donate')->with('donations',$donations);
    }
    public function donate2(){
           $donations = posts::where('status','=',1)->where('category','=','donations')->get();
               return view('userViewPages.donate2')->with('donations',$donations);
    }
    public function thankdonate(){
        return view('userViewPages.thank_donate');
    }






     








}
