@extends('layout')

@section('title', 'Student Profile')

@section('content')
<div class="card">
    <h2>Student Profile</h2>

    <div style="margin-top: 2rem;">
        <div style="border-bottom: 2px solid #ecf0f1; padding-bottom: 1rem; margin-bottom: 1rem;">
            <p style="font-size: 0.9rem; color: #7f8c8d; margin-bottom: 0.25rem;">Full Name</p>
            <p style="font-size: 1.1rem; color: #2c3e50; font-weight: 600;">Juan Dela Cruz</p>
        </div>

        <div style="border-bottom: 2px solid #ecf0f1; padding-bottom: 1rem; margin-bottom: 1rem;">
            <p style="font-size: 0.9rem; color: #7f8c8d; margin-bottom: 0.25rem;">Email Address</p>
            <p style="font-size: 1.1rem; color: #2c3e50; font-weight: 600;">juan.delacruz@example.com</p>
        </div>

        <div style="border-bottom: 2px solid #ecf0f1; padding-bottom: 1rem; margin-bottom: 1rem;">
            <p style="font-size: 0.9rem; color: #7f8c8d; margin-bottom: 0.25rem;">Course</p>
            <p style="font-size: 1.1rem; color: #2c3e50; font-weight: 600;">BS Computer Science</p>
        </div>

        <div style="border-bottom: 2px solid #ecf0f1; padding-bottom: 1rem; margin-bottom: 1rem;">
            <p style="font-size: 0.9rem; color: #7f8c8d; margin-bottom: 0.25rem;">Year Level</p>
            <p style="font-size: 1.1rem; color: #2c3e50; font-weight: 600;">3rd Year</p>
        </div>
    </div>

    <div style="margin-top: 2rem;">
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to Student List</a>
    </div>
</div>
@endsection