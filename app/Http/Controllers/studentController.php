<?php

 

namespace App\Http\Controllers;

 

use illuminate\Http\request;

 

class studentController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        //

    }

 

    //

    public function read($id){

        switch ($id){

            case 1:

             return [

                'id'=>1,

                'name'=>'kian',

                'family'=>'omidi',

            ];

                break;

             case 2:

                return [

                     'id'=>2,

                     'name'=>'ali',

                     'family'=>'armani',

             ];

                break;

                default:

                return 'others';

 

        }

    }

 

    public function list(){

        //return 'hello';

        $students = [];

              //connect to DB

 

              $students []= [

                  'id'=>1,

                  'name'=>'kian',

                  'family'=>'malaki',

              ];

              $students []= [

                'id'=>2,

                'name'=>'ali',

                'family'=>'ahmadi',

            ];

            $students []= [

                'id'=>3,

                'name'=>'mamad',

                'family'=>'mohamadi',

            ];

        return $students;

 

    }

 

    public function create(request $request){

        $id= $request->id;

        $name= $request->name;

        $family= $request->family;

        //DB

 

        $result = 'student id=' . $id . 'was created!!';

        return $result;

 

 

    }

}