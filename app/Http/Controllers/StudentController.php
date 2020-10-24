<?php
namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students=Student::paginate(3);
        return view('student',['students'=>$students,'layout'=>'index']);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      //  $students=Student::all();
        $students=Student::paginate(3);
        return view('student',['students'=>$students,'layout'=>'create']);   
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $this->validate($request,['age'=>'required',]);
        
        $student =new Student();
        $student->cne=$request->input('cne');
        $student->firstName=$request->input('firstName');
        $student->secondName=$request->input('secondName');
        $student->age=$request->input('age');
        $student->speaciality=$request->input('speaciality');
        $student->save();

    
        //email code
        /*
        $to_name="Kinjal PAtel";
        $to_email="dhavalpatel2575@gmail.com";
        $data=array("name"=>"Dhaval PAtel","body"=>"Test Mail");

        Mail::send('mail',$data,function($message) use ($to_name,$to_email){
            $message->to($to_email)
            ->subject ('Lara Mail Subject');
        });

        */
        return redirect('/');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $student =Student::find($id);
        $students=Student::all();
        return view('student',['students'=>$students,'student'=>$student,'layout'=>'show']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $student =Student::find($id);
        $students=Student::all();
        return view('student',['students'=>$students,'student'=>$student,'layout'=>'edit']);   
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       // echo "update";
        $student =Student::find($id);
        $student->cne=$request->input('cne');
        $student->firstName=$request->input('firstName');
        $student->secondName=$request->input('secondName');
        $student->age=$request->input('age');
        $student->speaciality=$request->input('speaciality');
        $student->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $student =Student::find($id);
        $student->delete();
        return redirect('/');
    }
}
