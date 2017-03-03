<?php

namespace App\Http\Controllers;

use App\Bsst;
use App\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Type;
use Illuminate\Support\Facades\Redirect;
use Mockery\Exception;

class DashboardController extends Controller
{

  public function new_form_choose(Request $request){
//      $this->validate($request,[
//         'name'=>'required',
//          'gender'=>'required',
//          'type'=>'required'
//      ]);
      return view('Dashboard.new_report')->with('user',Auth::user())->with('req',$request)->with('types',Type::all())->with('submit','new')->with('obj',new Request())->with('req_old',new Bsst());
  }
    public function edit_form_choose(Request $request){
        $req=Report::Where('id',$request->input('id'))->first();
        $req_old=$req->getObject();
        return view('Dashboard.new_report')->with('user',Auth::user())->with('obj',$req)->with('req',$request)->with('req_old',$req_old)->with('types',Type::all())->with('submit','edit');
    }
    
    public function index() {
        return view('Dashboard.index')->with('user',Auth::user())->with('types',Type::all());
    }

    public function submit_form(Request $request){
        $report=new Report;
        $report->name=$request->input('name');
        $report->gender=$request->input('gender');
        $report->age=$request->input('age');
        $report->type=$request->input('type');
        $report->specimen=$request->input('specimen');
        $report->date=Carbon::createFromFormat('m/d/Y',$request->input('date'));
        if($report->save()){
            if($request->input('type')==1 or $request->input('type')==2 or $request->input('type')==3 ){
                $bsst=new Bsst;
                $bsst->report_id=$report->id;
                $bsst->fbs=$request->input('fbs');
                $bsst->pre_breakfast=$request->input('pre_breakfast');
                $bsst->post_breakfast=$request->input('post_breakfast');
                $bsst->pre_lunch=$request->input('pre_lunch');
                $bsst->post_lunch=$request->input('post_lunch');
                $bsst->pre_dinner=$request->input('pre_dinner');
                $bsst->post_dinner=$request->input('post_dinner');
                if(!$bsst->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.view_report')->with('user',Auth::user())->with('report',$report)->with('det',$bsst)->with('types',Type::all());
            }
        }
    }

    public function submit_edit_form(Request $request){
        $report=Report::where('id',$request->input('id'))->first();
        $report->name=$request->input('name');
        $report->gender=$request->input('gender');
        $report->age=$request->input('age');
        $report->type=$request->input('type');
        $report->specimen=$request->input('specimen');
        if($request->input('date-early')){
            $report->date=$request->input('date');
        }else{
            $report->date=Carbon::createFromFormat('m/d/Y',$request->input('date'));
        }
        if($report->save()){
            if($request->input('type')==1 or $request->input('type')==2 or $request->input('type')==3 ){
                $bsst=Bsst::where('report_id',$request->input('id'))->first();
                $bsst->report_id=$report->id;
                $bsst->fbs=$request->input('fbs');
                $bsst->pre_breakfast=$request->input('pre_breakfast');
                $bsst->post_breakfast=$request->input('post_breakfast');
                $bsst->pre_lunch=$request->input('pre_lunch');
                $bsst->post_lunch=$request->input('post_lunch');
                $bsst->pre_dinner=$request->input('pre_dinner');
                $bsst->post_dinner=$request->input('post_dinner');

                if(!$bsst->save()){
                    $report->delete();
                    return $this->index()->with('message','Error occured,task failed!');
                }
                return view('Dashboard.view_report')->with('user',Auth::user())->with('report',$report)->with('det',$bsst)->with('types',Type::all());
            }
        }
    }

    public function browse(Request $request){
        $reports=Report::paginate(10);
        return view('Dashboard.browse')->with('user',Auth::user())->with('reports',$reports)->with('types',Type::all())->with('req',$request);
    }

    public function browse_filter(Request $request){
        if($request->input()!=[]){
            if($request->input('gender')=='all'){
                $reports=Report::whereIn('gender',array('male','female','other'));
            }else {
                $reports = Report::where('gender', $request->input('gender'));
            }
            if($request->input('name')){
                $reports=$reports->where('name','LIKE','%'.$request->input('name').'%');
            }
            if($request->input('age')){
                $reports=$reports->where('age',$request->input('age'));
            }
            if($request->input('type')!='null'){
                $reports=$reports->where('type',$request->input('type'));
            }
            if($request->input('date')){
                $reports=$reports->where('date',Carbon::createFromFormat('m/d/Y',$request->input('date'))->toDateString());
            }
            $reports=$reports->paginate(10);
        }else{
            $reports=Report::paginate(10);
        }
        return view('Dashboard.browse')->with('user',Auth::user())->with('reports',$reports)->with('types',Type::all())->with('req',$request);
    }

    public function report_print(Request $request){
        $report=Report::where('id',$request->input('id'))->first();
        if($report->type=='1' or $report->type=='2' or $report->type=='3'){
            $det=Bsst::where('report_id',$request->input('id'))->first();
        }
        return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$det);
    }
    
    public function report_view(Request $request){
        $report=Report::where('id',$request->input('id'))->first();
        if($report->type=='1' or $report->type=='2' or $report->type=='3'){
            $det=Bsst::where('report_id',$request->input('id'))->first();
        }
        return view('Dashboard.view_report')->with('user',Auth::user())->with('report',$report)->with('det',$det)->with('types',Type::all());
    }

    public function delete_form(Request $request){
        $report=Report::find($request->input('id'));
        $report_oth=$report->getObject();
        if($report_oth->delete()){
            $report->delete();
            $message="Report Deleted Successfully";
        }else{
            $message="Task failed";
        }
        $reports=Report::paginate(10);
        return view('Dashboard.browse')->with('user',Auth::user())->with('reports',$reports)->with('types',Type::all())->with('req',$request)->with('message',$message);

    }
}
