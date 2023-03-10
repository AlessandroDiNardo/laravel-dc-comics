<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class MainController extends Controller
{
    // home
    public function home()
    {
        $people = Person::all();

        return view("pages.home", compact("people"));
    }

    // show
    public function showPerson(Person $person)
    {
        return view("pages.show", compact("person"));
    }

    // delete
    public function deletePerson(Person $person)
    {
        $person->delete();
        return redirect()->route("home");
    }

    // create
    public function createPerson()
    {
        return view("pages.create");
    }

    // request
    public function requestPerson(Request $request)
    {
        $data = $request->validate(
            [
                "firstName" => "string|required|max:32",
                "lastName" => "string|required|max:32",
                "dateOfBirth" => "date|required",
                "height" => "required|integer|min:40|max:260"
            ]

        );
        $person = new Person();
        $person->firstName = $data["firstName"];
        $person->lastName = $data["lastName"];
        $person->dateOfBirth = $data["dateOfBirth"];
        $person->height = $data["height"];
        $person->save();
        return redirect()->route("home");
    }

    // edit
    public function editPerson(Person $person)
    {
        return view("pages.edit", compact("person"));
    }

    // update
    public function updatePerson(Request $request, Person $person)
    {
        $data = $request->validate(
            [
                "firstName" => "string|required|max:32",
                "lastName" => "string|required|max:32",
                "dateOfBirth" => "date|required",
                "height" => "required|integer|min:40|max:260"
            ]

        );
        $person->firstName = $data["firstName"];
        $person->lastName = $data["lastName"];
        $person->dateOfBirth = $data["dateOfBirth"];
        $person->height = $data["height"];
        $person->save();

        return redirect()->route("home");
    }
}