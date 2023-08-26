<?php

namespace App\Http\Livewire;

use App\Models\cv;
use Livewire\Component;
use App\Models\skill;

class SkillsMange extends Component{
    public $skills;
  


    protected $rules = [
        'skills.*.skill' => 'required',
        'skills.*.level' => 'required'
    ];

    public function mount(){
        $cv = cv::find(2) ;
        $this->skills = skill::where('cv_id', $cv->id)->get();;
    }

    public function add(){
        $this->skills->push(new skill());
    }

    public function remove($index){
        $skill = $this->skills[$index];
        $this->skills->forget($index);
        $skill-> delete();
    }

    public function save(){
        $this->validate();
        $cv = cv::find(2) ;
 
        foreach ($this->skills as $skill){
            $skill->cv_id = $cv->id;
         $skill->save();
        }
     }

    public function render(){
        return view('livewire.skills-mange');
    }


}
