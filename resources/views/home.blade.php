@extends('layout')

@section('title', 'Welcome to the Student Portal')

@section('content')
<div class="card">
    <h2>Welcome to the Student Portal</h2>
    
    <p style="font-size: 1.1rem; line-height: 1.6; margin: 1.5rem 0; color: #555;">
        The Student Portal is a comprehensive management system designed to streamline student information management. 
        This system allows administrators to easily add, view, edit, and manage student records in a user-friendly interface.
    </p>

    <p style="font-size: 1.1rem; line-height: 1.6; margin: 1.5rem 0; color: #555;">
        Features include:
    </p>
    
    <ul style="font-size: 1rem; line-height: 1.8; margin-left: 2rem; color: #555;">
        <li>View complete list of enrolled students</li>
        <li>Add new student records</li>
        <li>View detailed student profiles</li>
        <li>Edit and update student information</li>
    </ul>

    <div style="margin-top: 2rem;">
        <a href="{{ route('students.index') }}" class="btn">View Student List</a>
    </div>
</div>
@endsection