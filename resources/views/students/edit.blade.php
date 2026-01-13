@extends('layout')

@section('title', 'Edit Student')

@section('content')
<div class="card">
    <h2>Edit Student</h2>

    <form>
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" value="Juan Dela Cruz" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" value="juan.delacruz@example.com" required>
        </div>

        <div class="form-group">
            <label for="course">Course</label>
            <select id="course" name="course" required>
                <option value="">Select a course</option>
                <option value="BS Computer Science" selected>BS Computer Science</option>
                <option value="BS Information Technology">BS Information Technology</option>
                <option value="BS Computer Engineering">BS Computer Engineering</option>
                <option value="BS Information Systems">BS Information Systems</option>
            </select>
        </div>

        <div class="form-group">
            <label for="year_level">Year Level</label>
            <select id="year_level" name="year_level" required>
                <option value="">Select year level</option>
                <option value="1st Year">1st Year</option>
                <option value="2nd Year">2nd Year</option>
                <option value="3rd Year" selected>3rd Year</option>
                <option value="4th Year">4th Year</option>
            </select>
        </div>

        <div class="button-group">
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection