@extends('layouts.cv')

@section('title', $title)

@section('content')
    
    @include('cv.components.header', ['personalInfo' => $personalInfo])

    <div class="cv-grid">
        
        <div class="cv-left">
            
            @include('cv.components.about', ['about' => $about])
            
            
            @include('cv.components.education', ['education' => $education])
            
           
            @include('cv.components.certifications', ['certifications' => $certifications])
        </div>

        
        <div class="cv-right">
            
            @include('cv.components.experience', ['experience' => $experience])
            
            
            @include('cv.components.skills', ['skills' => $skills])
            
            
            @include('cv.components.projects', ['projects' => $projects])
        </div>
    </div>
@endsection