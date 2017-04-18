<?php

namespace App\Http\Controllers;

use App\Bsst;
use App\fbs;
use App\blood_group;
use App\hcg;
use App\lipidp;
use App\ufr;
use App\Report;
use App\s_creatinine;
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
        $this->validate($request, [
            'name' => 'required',
            'date' => 'required',
        ]);
        $report=new Report;
        $report->name_front=$request->input('name_front');
        $report->name=$request->input('name');
        $report->gender=$request->input('gender');
        $report->age_years=$request->input('age_years');
        $report->age_months=$request->input('age_months');
        $report->age_days=$request->input('age_days');
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
//                return view('Dashboard.view_report')->with('user',Auth::user())->with('report',$report)->with('det',$bsst)->with('types',Type::all());
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$bsst);
            }else if($request->input('type')==4 or $request->input('type')==5 or $request->input('type')==6 ){
                $fbs=new fbs;
                $fbs->report_id=$report->id;
                $fbs->fbs=$request->input('fbs');
                $fbs->ppbs=$request->input('ppbs');
                $fbs->urine_sugar=$request->input('urine_sugar');
                $fbs->urine_albumen=$request->input('urine_albumen');
                if(!$fbs->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$fbs);
            }else if($request->input('type')==7 or $request->input('type')==8){
                $ufr=new ufr;
                $ufr->report_id=$report->id;
                $ufr->appearance=$request->input('appearance');
                $ufr->sg=$request->input('sg');
                $ufr->reaction=$request->input('reaction');
                $ufr->albumen=$request->input('albumen');
                $ufr->sugar=$request->input('sugar');
                $ufr->acetone=$request->input('acetone');
                $ufr->bile=$request->input('bile');
                $ufr->urobilino=$request->input('urobilino');
                $ufr->u_pus=$request->input('u_pus');
                $ufr->u_rbc=$request->input('u_rbc');
                $ufr->fpi=$request->input('fpi');
                $ufr->cast=$request->input('cast');
                $ufr->o_deposit=$request->input('o_deposit');
                $ufr->crystals=$request->input('crystals');
                $ufr->hwo=$request->input('hwo');
                $ufr->rwo=$request->input('rwo');
                $ufr->ameba=$request->input('ameba');
                $ufr->cysts=$request->input('cysts');
                $ufr->clc=$request->input('clc');
                $ufr->s_pus=$request->input('s_pus');
                $ufr->s_rbc=$request->input('s_rbc');
                $ufr->mucus=$request->input('mucus');
                $ufr->macrophags=$request->input('macrophags');
                $ufr->consistens=$request->input('consistens');
                $ufr->r_substances=$request->input('r_substances');

                if(!$ufr->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$ufr);
            }else if($request->input('type')==9 or $request->input('type')==10){
                $hcg=new hcg;
                $hcg->report_id=$report->id;
                $hcg->hcg=$request->input('hcg');
                $hcg->repeat=$request->input('repeat');
                $hcg->appearance=$request->input('appearance');
                $hcg->sg=$request->input('sg');
                $hcg->reaction=$request->input('reaction');
                $hcg->albumen=$request->input('albumen');
                $hcg->sugar=$request->input('sugar');
                $hcg->acetone=$request->input('acetone');
                $hcg->bile=$request->input('bile');
                $hcg->urobilino=$request->input('urobilino');
                $hcg->u_pus=$request->input('u_pus');
                $hcg->u_rbc=$request->input('u_rbc');
                $hcg->fpi=$request->input('fpi');
                $hcg->cast=$request->input('cast');
                $hcg->o_deposit=$request->input('o_deposit');
                $hcg->crystals=$request->input('crystals');

                if(!$hcg->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$hcg);
            }else if($request->input('type')==11){
                $blood_group=new blood_group;
                $blood_group->report_id=$report->id;
                $blood_group->group=$request->input('group');

                if(!$blood_group->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$blood_group);
            }else if($request->input('type')==12){
                $lipidp=new lipidp;
                $lipidp->report_id=$report->id;
                $lipidp->c_total=$request->input('c_total');
                $lipidp->c_hdl=$request->input('c_hdl');
                $lipidp->triglycerides=$request->input('triglycerides');
                $lipidp->c_ldl=$request->input('c_ldl');
                $lipidp->c_total_hdl=$request->input('c_total_hdl');

                if(!$lipidp->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$lipidp);
            }else if($request->input('type')==13|$request->input('type')==14|$request->input('type')==15){
                $lipidp=new s_creatinine;
                $lipidp->report_id=$report->id;
                $lipidp->s_creatinine=$request->input('s_creatinine');
                $lipidp->egfr=$request->input('egfr');
                $lipidp->b_urea=$request->input('b_urea');

                if(!$lipidp->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$lipidp);
            }
        }
    }

    public function submit_edit_form(Request $request){
//        dd($request);
        $this->validate($request, [
            'name' => 'required',
            'date' => 'required',
        ]);
        $report=Report::where('id',$request->input('id'))->first();
        $report->name_front=$request->input('name_front');
        $report->name=$request->input('name');
        $report->gender=$request->input('gender');
        $report->age_years=$request->input('age_years');
        $report->age_months=$request->input('age_months');
        $report->age_days=$request->input('age_days');
        $report->type=$request->input('type');
        $report->specimen=$request->input('specimen');
        if($request->input('date')==null){
            $report->date=$request->input('date-early');
        }else{
            $report->date=Carbon::createFromFormat('m/d/Y',$request->input('date'));
        }
        if($report->update()){
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

                if(!$bsst->update()){
                    $report->delete();
                    return $this->index()->with('message','Error occured,task failed!');
                }
//                return view('Dashboard.view_report')->with('user',Auth::user())->with('report',$report)->with('det',$bsst)->with('types',Type::all());
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$bsst);
            }else if($request->input('type')==4 or $request->input('type')==5 or $request->input('type')==6 ){
                $fbs=fbs::where('report_id',$request->input('id'))->first();
                $fbs->report_id=$report->id;
                $fbs->fbs=$request->input('fbs');
                $fbs->ppbs=$request->input('ppbs');
                $fbs->urine_sugar=$request->input('urine_sugar');
                $fbs->urine_albumen=$request->input('urine_albumen');
                if(!$fbs->update()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$fbs);
            }else if($request->input('type')==7 or $request->input('type')==8){
                $ufr=new ufr;
                $ufr->report_id=$report->id;
                $ufr->appearance=$request->input('appearance');
                $ufr->sg=$request->input('sg');
                $ufr->reaction=$request->input('reaction');
                $ufr->albumen=$request->input('albumen');
                $ufr->sugar=$request->input('sugar');
                $ufr->sugar=$request->input('acetone');
                $ufr->bile=$request->input('bile');
                $ufr->urobilino=$request->input('urobilino');
                $ufr->u_pus=$request->input('u_pus');
                $ufr->u_rbc=$request->input('u_rbc');
                $ufr->fpi=$request->input('fpi');
                $ufr->cast=$request->input('cast');
                $ufr->o_deposit=$request->input('o_deposit');
                $ufr->crystals=$request->input('crystals');
                $ufr->hwo=$request->input('hwo');
                $ufr->rwo=$request->input('rwo');
                $ufr->ameba=$request->input('ameba');
                $ufr->cysts=$request->input('cysts');
                $ufr->clc=$request->input('clc');
                $ufr->s_pus=$request->input('s_pus');
                $ufr->s_rbc=$request->input('s_rbc');
                $ufr->mucus=$request->input('mucus');
                $ufr->macrophags=$request->input('macrophags');
                $ufr->consistens=$request->input('consistens');
                $ufr->r_substances=$request->input('r_substances');

                if(!$ufr->update()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$ufr);
            }else if($request->input('type')==9 or $request->input('type')==10){
                $hcg=new hcg;
                $hcg->report_id=$report->id;
                $hcg->hcg=$request->input('hcg');
                $hcg->repeat=$request->input('repeat');
                $hcg->appearance=$request->input('appearance');
                $hcg->sg=$request->input('sg');
                $hcg->reaction=$request->input('reaction');
                $hcg->albumen=$request->input('albumen');
                $hcg->sugar=$request->input('sugar');
                $hcg->acetone=$request->input('acetone');
                $hcg->bile=$request->input('bile');
                $hcg->urobilino=$request->input('urobilino');
                $hcg->u_pus=$request->input('u_pus');
                $hcg->u_rbc=$request->input('u_rbc');
                $hcg->fpi=$request->input('fpi');
                $hcg->cast=$request->input('cast');
                $hcg->o_deposit=$request->input('o_deposit');
                $hcg->crystals=$request->input('crystals');

                if(!$hcg->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$hcg);
            }else if($request->input('type')==11){
                $blood_group=new blood_group;
                $blood_group->report_id=$report->id;
                $blood_group->group=$request->input('group');

                if(!$blood_group->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$blood_group);
            }else if($request->input('type')==12){
                $lipidp=new lipidp;
                $lipidp->report_id=$report->id;
                $lipidp->c_total=$request->input('c_total');
                $lipidp->c_hdl=$request->input('c_hdl');
                $lipidp->triglycerides=$request->input('triglycerides');
                $lipidp->c_ldl=$request->input('c_ldl');
                $lipidp->c_total_hdl=$request->input('c_total_hdl');

                if(!$lipidp->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$lipidp);
            }else if($request->input('type')==13|$request->input('type')==14|$request->input('type')==15){
                $lipidp=new s_creatinine;
                $lipidp->report_id=$report->id;
                $lipidp->s_creatinine=$request->input('s_creatinine');
                $lipidp->egfr=$request->input('egfr');
                $lipidp->b_urea=$request->input('b_urea');

                if(!$lipidp->save()){
                    $report->delete();
                    return $this->browse($request)->with('message','Error occured,task failed!');
                }
                return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$lipidp);
            }
        }
    }

    public function browse(Request $request){
        $reports=Report::paginate(10);
        return view('Dashboard.browse')->with('user',Auth::user())->with('reports',$reports)->with('types',Type::all())->with('req',$request);
    }
    
    public function detailed(Request $request){
        $reports=Report::paginate(10);
        return view('Dashboard.detailed')->with('user',Auth::user())->with('reports',$reports)->with('types',Type::all())->with('req',$request);
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
    public function detailed_filter(Request $request){
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
        return view('Dashboard.detailed')->with('user',Auth::user())->with('reports',$reports)->with('types',Type::all())->with('req',$request);
    }

    public function report_print(Request $request){
        $report=Report::where('id',$request->input('id'))->first();
        $det=$report->getObject();
        return view('Dashboard.invoice')->with('user',Auth::user())->with('report',$report)->with('det',$det);
    }
    
    public function report_view(Request $request){
        $report=Report::where('id',$request->input('id'))->first();
//        if($report->type=='1' or $report->type=='2' or $report->type=='3'){
            $det=$report->getObject();
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
        return redirect(route('browse'))->with('user',Auth::user())->with('reports',$reports)->with('types',Type::all())->with('req',$request)->with('message',$message);

    }
}
