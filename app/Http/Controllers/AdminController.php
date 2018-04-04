<?php

namespace App\Http\Controllers;

use App\Broadcasts_image;
use Illuminate\Http\Request;
use App\Honor as Honors;
use App\Administration as Administration;
use App\Broadcast as News;
use App\Broadcasts_image as News_image;
use App\Event as Events;
use App\Events_image as Events_image;
use App\Notice as Notices;
use App\Student as Students;

use Session;
use Auth;

class AdminController extends Controller
{
    public function ShowDashboard(){
        $news = News::with('broadcasts_image')->orderBy('id','DESC')->get();
        $events = Events::with('events_image')->orderBy('id','DESC')->get();
        $notice = Notices::orderBy('id','DESC')->get();
        $administration = Administration::orderBy('id','DESC')->get();
        $honor = Honors::orderBy('id','DESC')->get();
        $students = Students::with('user')->orderBy('id','DESC')->get();
        return view('admin.dashboard',['news' => $news, 'events'=>$events, 'notice'=>$notice, 'administration'=>$administration,'honor'=>$honor,'student'=>$students]);
    }

    public  function ShowRoleOfHonorsForm(){
        return view('admin.roleOfHonorsForm');
    }

    public function storeRoleOfHonorsForm(Request $request){
        $this->validate($request,array(
            'name' => 'required|max:255',
            'duration' => 'required|max:255',
            'pic' => 'mimes:jpeg,bmp,png,jpg|max:10000',
            'priority' => 'required'
        ));
        $honor = new Honors();
        $honor->name = $request->name;
        $honor->duration = $request->duration;
        $honor->priority = $request->priority;
        $honor->fb = $request->fb;
        $honor->linkedin = $request->linkedin;
        $honor->twitter = $request->twitter;
        $honor->rss = $request->rss;

        if($request->hasFile('pic')){
            $file = $request->file('pic');
            $fileName = time().$request->file('pic')->getClientOriginalName();
            $file->move(public_path('/uploads/images'), $fileName);
            $honor->photo = $fileName;
        }
        $honor->save();
        Session::flash('success_roleofhonor_post','Role Of Honor Successfully saved');
        return redirect(Route('admin.dashboard'));
    }

    public function ShowHallAdminstrationForm(){
        return view('admin.hallAdministrationForm');
    }

    public function storeHallAdminstrationForm(Request $request){
        $this->validate($request,array(
            'name' => 'required|max:255',
            'designation' => 'required',
            'status' => 'required',
            'pic' => 'mimes:jpeg,bmp,png,jpg|max:10000'
        ));
        $Administration = new Administration();
        $Administration->name = $request->name;
        $Administration->status = $request->status;
        $Administration->designation = $request->designation;
        $Administration->fb = $request->fb;
        $Administration->linked_in = $request->linkedin;
        $Administration->twitter = $request->twitter;
        $Administration->rss = $request->rss;

        if($request->hasFile('pic')){
            $file = $request->file('pic');
            $fileName = time().$request->file('pic')->getClientOriginalName();
            $file->move(public_path('/uploads/images'), $fileName);
            $Administration->photo = $fileName;
        }
        $Administration->save();
        Session::flash('success_administration_post','Successfully saved');
        return redirect(Route('admin.dashboard'));
    }

    public function showAddnewsForm(){
        return view('admin.addNewsForm');
    }

    public function storeAddnewsForm(Request $request){
        $this->validate($request,array(
            'headline' => 'required|max:500',
            'body' => 'required',
        ));

        $news = new News();
        $news->headline = $request->headline;
        $news->body = $request->body;
        $news->save();

        $news = News::orderBy('id','DESC')->first();
        if($request->hasFile('photos')){
            $counter =1;
            foreach($request->photos as $item){
                $fileName = time().$counter.$item->getClientOriginalName();
                $item->move(public_path('/uploads/news'),$fileName);
                $counter++;
                $image =  new News_image();
                $image->path = $fileName;
                $news->broadcasts_image()->save($image);
            }
        }

        Session::flash('success_news_post','Successfully Saved');
        return redirect(Route('admin.dashboard'));
    }

    public function showEditNewsForm(Request $request){
        $news = News::with('broadcasts_image')->orderBy('id','DESC')->find($request->id);
        return view('admin.edits.editNewsForm',['news' =>$news]);
    }

    public function EditNewsForm(Request $request){
        $this->validate($request,array(
            'headline' => 'required|max:500',
            'body' => 'required',
        ));

        $news = News::find($request->id);
        $news->headline = $request->headline;
        $news->body = $request->body;
        $news->save();

        $news = News::orderBy('id','DESC')->first();
        if($request->hasFile('photos')){
            $counter =1;
            foreach($request->photos as $item){
                $fileName = time().$counter.$item->getClientOriginalName();
                $item->move(public_path('/uploads/news'),$fileName);
                $counter++;
                $image =  new News_image();
                $image->path = $fileName;
                $news->broadcasts_image()->save($image);
            }
        }

        Session::flash('success_edit','Successfully Edited');
        return redirect(Route('admin.dashboard'));
    }

    public function deletetNews(Request $request){
        $news = News::find($request->id);
        $news->delete();
        Session::flash('success_delete','Successfully Deleted');
        return redirect()->back();

    }

    public function showEditNoticeForm(Request $request){
        $notice = Notices::find($request->id);
        return view('admin.edits.editNoticeForm',['notice' =>$notice]);
    }

    public function EditNoticeForm(Request $request){
        $this->validate($request,array(
            'headline' => 'required|max:255',
            'body' => 'required',
        ));

        $notice = Notices::find($request->id);
        $notice->headline = trim($request->headline);
        $notice->body = trim($request->body);
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $fileName = time().$request->file('photo')->getClientOriginalName();
            $file->move(public_path('/uploads/notice'), $fileName);
            $notice->photo = $fileName;
        }
        $notice->save();
        Session::flash('success_edit','Successfully Edited');
        return redirect(Route('admin.dashboard'));
    }

    public function deletetNotice(Request $request){
        $notice = Notices::find($request->id);
        $notice->delete();
        Session::flash('success_delete','Successfully Deleted');
        return redirect()->back();

    }

    public function showEditHonorForm(Request $request){
        $honor =Honors ::find($request->id);
        return view('admin.edits.editHonorForm',['honor' =>$honor]);
    }

    public function EditHonorForm(Request $request){
        $this->validate($request,array(
            'name' => 'required|max:255',
            'duration' => 'required|max:255',
            'pic' => 'mimes:jpeg,bmp,png,jpg|max:10000',
            'priority' => 'required'
        ));
        $honor = Honors::find($request->id);
        $honor->name = $request->name;
        $honor->duration = $request->duration;
        $honor->priority = $request->priority;
        $honor->fb = $request->fb;
        $honor->linkedin = $request->linkedin;
        $honor->twitter = $request->twitter;
        $honor->rss = $request->rss;

        if($request->hasFile('pic')){
            $file = $request->file('pic');
            $fileName = time().$request->file('pic')->getClientOriginalName();
            $file->move(public_path('/uploads/images'), $fileName);
            $honor->photo = $fileName;
        }
        $honor->save();

        Session::flash('success_edit','Successfully Edited');
        return redirect(Route('admin.dashboard'));
    }

    public function deletetHonor(Request $request){
        $honor = Honors::find($request->id);
        $honor->delete();
        Session::flash('success_delete','Successfully Deleted');
        return redirect()->back();

    }

    public function showEditAdministrationForm(Request $request){
        $adm =Administration ::find($request->id);
        return view('admin.edits.editAdministrationForm',['administration' =>$adm]);
    }

    public function EditAdministrationForm(Request $request){
        $this->validate($request,array(
            'name' => 'required|max:255',
            'designation' => 'required',
            'status' => 'required',
            'pic' => 'mimes:jpeg,bmp,png,jpg|max:10000'
        ));
        $Administration =Administration ::find($request->id);
        $Administration->name = $request->name;
        $Administration->status = $request->status;
        $Administration->designation = $request->designation;
        $Administration->fb = $request->fb;
        $Administration->linked_in = $request->linkedin;
        $Administration->twitter = $request->twitter;
        $Administration->rss = $request->rss;

        if($request->hasFile('pic')){
            $file = $request->file('pic');
            $fileName = time().$request->file('pic')->getClientOriginalName();
            $file->move(public_path('/uploads/images'), $fileName);
            $Administration->photo = $fileName;
        }
        $Administration->save();
        Session::flash('success_edit','Successfully Edited');
        return redirect(Route('admin.dashboard'));
    }

    public function deletetAdministration(Request $request){
        $adm = Administration ::find($request->id);
        $adm->delete();
        Session::flash('success_delete','Successfully Deleted');
        return redirect()->back();

    }

    public function showEditEventsForm(Request $request){
        $event = Events::with('events_image')->find($request->id);
        return view('admin.edits.editEventsForm',['event' =>$event]);
    }

    public function EditEventsForm(Request $request){
        $this->validate($request,array(
            'headline' => 'required|max:500',
            'body' => 'required',
            'date' => 'required'
        ));

        $events = Events::find($request->id);
        $events->headline = $request->headline;
        $events->body = $request->body;
        $events->date = $request->date;
        $events->save();

        $events = Events::orderBy('id','DESC')->first();
        if($request->hasFile('photos')){
            $counter =1;
            foreach($request->photos as $item){
                $fileName = time().$counter.$item->getClientOriginalName();
                $item->move(public_path('/uploads/events'),$fileName);
                $counter++;
                $image =  new Events_image();
                $image->path = $fileName;
                $events->events_image()->save($image);
            }
        }

        Session::flash('success_edit','Successfully Edited');
        return redirect(Route('admin.dashboard'));
    }

    public function deletetEvents(Request $request){
        $event = Events::find($request->id);
        $event->delete();
        Session::flash('success_delete','Successfully Deleted');
        return redirect()->back();

    }

    public function showAddeventsForm(){
        return view('admin.addEventsForm');
    }

    public function storeEvents(Request $request){
        $this->validate($request,array(
            'headline' => 'required|max:500',
            'body' => 'required',
            'date' => 'required'
        ));

        $events = new Events();
        $events->headline = $request->headline;
        $events->body = $request->body;
        $events->date = $request->date;
        $events->save();

        $events = Events::orderBy('id','DESC')->first();
        if($request->hasFile('photos')){
            $counter =1;
            foreach($request->photos as $item){
                $fileName = time().$counter.$item->getClientOriginalName();
                $item->move(public_path('/uploads/events'),$fileName);
                $counter++;
                $image =  new Events_image();
                $image->path = $fileName;
                $events->events_image()->save($image);
            }
        }

        Session::flash('success_post','Successfully Saved');
        return redirect(Route('admin.dashboard'));
    }

    public function showAddNoticeForm(){
        return view('admin.addNoticeForm');
    }

    public function storeAddNoticeForm(Request $request){
        $this->validate($request,array(
            'headline' => 'required|max:255',
            'body' => 'required',
        ));

        $notice = new Notices();
        $notice->headline = trim($request->headline);
        $notice->body = trim($request->body);
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $fileName = time().$request->file('photo')->getClientOriginalName();
            $file->move(public_path('/uploads/notice'), $fileName);
            $notice->photo = $fileName;
        }
        $notice->save();
        Session::flash('success_post','Successfully Saved');
        return redirect(route('admin.dashboard'));
    }

    public function showStudentDetail(Request $request){
        $student = Students::with('user')->where('id',$request->id)->first();
        return view('admin.student',['student' =>$student]);
    }

}
