@extends('layouts.cv')

@section('title', $title . ' - Print')

@section('additional-styles')
<style>
    @media print {
        body {
            font-size: 12pt;
            line-height: 1.2;
        }
        .cv-section {
            break-inside: avoid;
            margin-bottom: 1rem;
        }
        .cv-grid {
            display: block;
        }
        .project-card:hover {
            transform: none;
            box-shadow: none;
        }
    }
</style>
@endsection

@section('content')
    @php
        $excludeNavigation = true;
        $excludeFooter = true;
    @endphp

    
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

    @section('additional-scripts')
    <script>
        window.onload = function() {
            window.print();
        }
    </script>
    @endsection
@endsection