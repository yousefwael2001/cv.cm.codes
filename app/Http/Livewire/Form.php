<?php

namespace App\Http\Livewire;

use App\Models\skill;
use App\Models\education;
use App\Models\experience;
use App\Models\language;
use App\Models\cv;
use Livewire\Component;
use PDF;

class Form extends Component{

    
    public $skills;
    public $education;
    public $experiences;
    public $Languages;

    public $fname;
    public $lname;
    public $email;
    public $phone;
    public $address = '';
    public $nationality = '';
    public $brief = '';
    public $t = 't';
   
    protected $rules = [
        'skills.*.skill' => 'required',
        'skills.*.level' => 'required',
        'education.*.schoolName' => 'required',
        'education.*.degree' => 'required',
        'education.*.year' => 'required',
        'experiences.*.experience' => 'required',
        'experiences.*.time' => 'required',
        'Languages.*.Language' => 'required',
        'Languages.*.level' => 'required',
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required',
        'phone' => 'required',
        // '' => 'required',
    ];

    public function mount(){
        $cv=cv::where('email', $this->email)->value('id');
        $this->skills = skill::where('cv_id', $cv)->get();
        $this->education = education::where('cv_id', $cv)->get();
        $this->experiences = experience::where('cv_id', $cv)->get();
        $this->Languages = language::where('cv_id', $cv)->get();
    }


    // add new filed
    public function addS(){
        $this->skills->push(new skill());
    }
    public function addEd(){
        $this->education->push(new education());
    }
    public function addEx(){
        $this->experiences->push(new experience());
    }
    public function addL(){
        $this->Languages->push(new language());
    }

    
    // remove filed
    public function removeS($index){
        $skill = $this->skills[$index];
        $this->skills->forget($index);
        $skill-> delete();
    }
    public function removeEd($index){
        $education = $this->education[$index];
        $this->education->forget($index);
        $education-> delete();
    }
    public function removeEx($index){
        $experience = $this->experiences[$index];
        $this->experiences->forget($index);
        $experience-> delete();
    }
    public function removeL($index){
        $Language = $this->Languages[$index];
        $this->Languages->forget($index);
        $Language-> delete();
    }


    // save filed to DB
    public function saveS(){
        $this->validate();
        $cv=cv::where('email', $this->email)->value('id');

        foreach ($this->skills as $skill){
            $skill->cv_id = $cv;
            $skill->save();
        }
    }
    public function saveEd(){
        $this->validate();
        $cv=cv::where('email', $this->email)->value('id');

        foreach ($this->education as $education){
            $education->cv_id = $cv;
            $education->save();
        }
    }
    public function saveEx(){
        $this->validate();
        $cv=cv::where('email', $this->email)->value('id');

        foreach ($this->experiences as $experience){
            $experience->cv_id = $cv;
            $experience->save();
        }
    }
    public function saveL(){
        $this->validate();
        $cv=cv::where('email', $this->email)->value('id');

        foreach ($this->Languages as $Language){
            $Language->cv_id = $cv;
            $Language->save();
        }
    }


    // save cv to DB
    public function sumbit(){
        $this->validate();
        $cv = new cv;
        $cv->fname = $this->fname;
        $cv->lname = $this->lname;
        $cv->email = $this->email;
        $cv->phone = $this->phone;
        $cv->address = $this->address;
        $cv->nationality = $this->nationality;
        $cv->BriefDescripthin = $this->brief;
        $cv->template = $this->t;
        $cv->save();
    }

    public function updateB(){
        $this->validate();
        cv::where('email', $this->email)->update([
            'BriefDescripthin' => $this->brief
        ]);
    }

    public function updatet(){
        $this->validate();
        cv::where('email', $this->email)->update([
            'template' => $this->t
        ]);
    }

    public function down(){
        $pdf = PDF::chunkLoadView('<html-separator/>', $this->t, [ ]);
        return $pdf->stream('cv.pdf');
    }

    public function render(){
        return view('livewire.form');
    }
}
