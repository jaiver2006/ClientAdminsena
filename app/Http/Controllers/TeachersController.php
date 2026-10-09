<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TeachersController extends Controller
{
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }

    public function index()
    {
        $url = env('URL_SERVER_API');
        $teachers = $this->fetchDataFromApi($url . '/teachers');

        return view('Teachers.index', compact('teachers'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');
        $teacher = $this->fetchDataFromApi($url . '/teachers/' . $id);

        return view('Teachers.show', compact('teacher'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        $areas = Http::get($url . '/areas')->json();
        $trainingCenters = Http::get($url . '/training-centers')->json();

        return view('Teachers.create', compact('areas', 'trainingCenters'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');
        Http::post($url . '/teachers', $request->all());

        return redirect()->route('teachers.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $teacher = $this->fetchDataFromApi($url . '/teachers/' . $id);
        $areas = Http::get($url . '/areas')->json();
        $trainingCenters = Http::get($url . '/training-centers')->json();

        return view('Teachers.edit', compact('teacher', 'areas', 'trainingCenters'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');
        Http::put($url . '/teachers/' . $id, $request->all());

        return redirect()->route('teachers.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/teachers/' . $id);

        return redirect()->route('teachers.index');
    }
}
