<?php

namespace App\Http\Controllers;
use App\Administration as Administration;
use App\Honor as Honor;
use App\Broadcast as News;
use App\Broadcasts_image as News_image;
use App\Event as Events;
use App\Events_image as Events_image;

use Illuminate\Http\Request;
use App\Student as Student_form;
use Auth;
use App\Notice as Notice;
use Session;
use App\User as User;

class IndexController extends Controller
{
    public function activateUser(Request $request){
        $user = User::find(decrypt($request->id));
        $user ->status = 1;
        $user->save();
        $login = Auth::loginUsingId($user->id);
        if($login){
            return redirect('/');
        }
    }

    public function checkEmail(Request $request){
        $check = sizeof(User::where(['email' => $request->email])->get());
        if ($check>0) $check = "false";
        else $check = "true";
        return $check;
    }

    public function showIndex(){
        $today = date('Y-m-d');
        $upcomming_events = Events::with('events_image')->where('date','>',$today)->orderBy('id','DESC')->get();
        $latest_news = News::with('broadcasts_image')->orderBy('id','DESC')->get();
        $notice = Notice::orderBy('id','DESC')->get();
        return view('user.index',['events' =>$upcomming_events, 'news' => $latest_news , 'notice' => $notice]);
    }

    public function showAboutUs(){
        return view('user.aboutUs');
    }

    public function showHallAdministration(){
        $administration = Administration::where('status','current')->get();
        return view('user.hallAdministration',['administration'=>$administration]);
    }

    public function showRoleOfHonors(){
        $honor = Honor::orderBy('priority','ASC')->get();
        return view('user.roleOfHonors',['honors' => $honor]);
    }

    public function showEvents(){
        $events = Events::with('events_image')->orderBy('date','DESC')->paginate(6);
        return view('user.events',['events' => $events]);
    }

    public function showNews(){
        $news = News::with('broadcasts_image')->orderBy('id','DESC')->paginate(6);
        return view('user.news',['news' => $news]);
    }

    public function showStudentsForm(){
        $myfile = fopen(public_path("depts.txt"), "r") or die("Unable to open file!");
        $array = [];
        while (!feof($myfile)) {
            $line = fgets($myfile);
            array_push($array,$line);
        }
        $form = Student_form::where('user_id', (Auth::user()->id))->first();
        if($form){
            return view('user.Form',['item'=>$form]);
        }
        return view('user.studentsForm',['depts' => $array]);
    }

    public function storeStudentForm(Request $request){
        try{

            $student_form = new Student_form();
            $student_form->user_id = Auth::user()->id;
            $student_form->name = trim($request->name);
            if($request->hasFile('photo')){
                $file = $request->file('photo');
                $fileName = time().$request->file('photo')->getClientOriginalName();
                $file->move(public_path('/uploads/images'), $fileName);
                $student_form->photo = $fileName;
            }
            $student_form->reg_id = trim($request->reg_id);
            $student_form->admission_type = trim($request->admission_type);
            $student_form->father_name = trim($request->father_name);
            $student_form->mother_name = trim($request->mother_name);
            $student_form->present_address = trim($request->present_address);
            $student_form->permanent_address = trim($request->permanent_address);
            $student_form->dob = Date($request->dob);
            $student_form->dept = trim($request->dept);
            $student_form->bg = trim($request->bg);
            $student_form->identity = trim($request->identity);
            $student_form->present_year = trim($request->present_year);
            $student_form->class_role = trim($request->class_role);
            $student_form->admission_session = trim($request->admission_session);
            $student_form->current_session = trim($request->current_session);
            $student_form->res_status = trim($request->res_status);
            $student_form->building = trim($request->building);
            $student_form->room = trim($request->room);
            $student_form->bed = trim($request->bed);
            $student_form->readd_status = trim($request->readd_status);
            $student_form->mobile = trim($request->mobile);
            $student_form->email = trim($request->email);
            $student_form->g_mobile = trim($request->g_mobile);
            $student_form->save();
            Session::flash('success_post','Successfully Saved');
            return redirect('/');
        }
        catch(\Exception $e){
            return $e;
        }
    }

    public function editStudentForm(Request $request){
        try{
            $student_form = Student_form::find($request->id);
            $student_form->name = trim($request->name);
            if($request->hasFile('photo')){
                $file = $request->file('photo');
                $fileName = time().$request->file('photo')->getClientOriginalName();
                $file->move(public_path('/uploads/images'), $fileName);
                $student_form->photo = $fileName;
            }
            $student_form->reg_id = trim($request->reg_id);
            $student_form->admission_type = trim($request->admission_type);
            $student_form->father_name = trim($request->father_name);
            $student_form->mother_name = trim($request->mother_name);
            $student_form->present_address = trim($request->present_address);
            $student_form->permanent_address = trim($request->permanent_address);
            $student_form->dob = Date($request->dob);
            $student_form->dept = trim($request->dept);
            $student_form->bg = trim($request->bg);
            $student_form->identity = trim($request->identity);
            $student_form->present_year = trim($request->present_year);
            $student_form->class_role = trim($request->class_role);
            $student_form->admission_session = trim($request->admission_session);
            $student_form->current_session = trim($request->current_session);
            $student_form->res_status = trim($request->res_status);
            $student_form->building = trim($request->building);
            $student_form->room = trim($request->room);
            $student_form->bed = trim($request->bed);
            $student_form->readd_status = trim($request->readd_status);
            $student_form->mobile = trim($request->mobile);
            $student_form->email = trim($request->email);
            $student_form->g_mobile = trim($request->g_mobile);
            $student_form->save();
            Session::flash('success_post','Successfully Saved');
            return redirect('/');
        }
        catch(\Exception $e){
            return $e;
        }
    }

    public function showNewsDetails(Request $request){
        $news = News::with('broadcasts_image')->find($request->id);
        return view('user.newsDetail',['news' => $news]);
    }

    public function showEventDetails(Request $request){
    $event = Events::with('events_image')->find($request->id);
    //return $event;
    return view('user.eventDetail',['event' => $event]);
    }

    public function showNoticeDetails(Request $request){
        $notice =Notice::find($request->id);
        //return $event;
        return view('user.noticeDetail',['notice' => $notice]);
    }

    public function showNotice(Request $request){
        $notice = Notice::orderBy('id','DESC')->get();
        return view('user.notice',['notice' => $notice]);
    }

    public function showContact(Request $request){
        return view('user.contact');
    }
}
