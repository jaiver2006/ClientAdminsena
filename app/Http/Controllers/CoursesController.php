<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CoursesController extends Controller
{
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }

    public function index()
    {
        $url = env('URL_SERVER_API');
        $courses = $this->fetchDataFromApi($url . '/courses');

        return view('Courses.index', compact('courses'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');
        $course = $this->fetchDataFromApi($url . '/courses/' . $id);

        return view('Courses.show', compact('course'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        $areas = Http::get($url . '/areas')->json();
        $trainingCenters = Http::get($url . '/training-centers')->json();

        return view('Courses.create', compact('areas', 'trainingCenters'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');
        Http::post($url . '/courses', $request->all());

        return redirect()->route('courses.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $course = $this->fetchDataFromApi($url . '/courses/' . $id);
        $areas = Http::get($url . '/areas')->json();
        $trainingCenters = Http::get($url . '/training-centers')->json();

        return view('Courses.edit', compact('course', 'areas', 'trainingCenters'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');
        Http::put($url . '/courses/' . $id, $request->all());

        return redirect()->route('courses.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/courses/' . $id);

        return redirect()->route('courses.index');
    }
}
