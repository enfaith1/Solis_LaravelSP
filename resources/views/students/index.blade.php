@extends('layout')

@section('title', 'Student List')

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h2>Student List</h2>
        <a href="{{ route('students.create') }}" class="btn btn-success">Add New Student</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Natalio Solis</td>
                <td>BS Computer Science</td>
                <td>2nd Year</td>
                <td class="actions">
                    <a href="{{ route('students.show', 1) }}" class="action-link">View</a>
                    <span>|</span>
                    <a href="{{ route('students.edit', 1) }}" class="action-link">Edit</a>
                </td>
            </tr>
            <tr>
                <td>Christopher Columbus</td>
                <td>BS Information Technology</td>
                <td>2nd Year</td>
                <td class="actions">
                    <a href="{{ route('students.show', 2) }}" class="action-link">View</a>
                    <span>|</span>
                    <a href="{{ route('students.edit', 2) }}" class="action-link">Edit</a>
                </td>
            </tr>
            <tr>
                <td>Donald Trump</td>
                <td>BS Computer Engineering</td>
                <td>4th Year</td>
                <td class="actions">
                    <a href="{{ route('students.show', 3) }}" class="action-link">View</a>
                    <span>|</span>
                    <a href="{{ route('students.edit', 3) }}" class="action-link">Edit</a>
                </td>
            </tr>
            <tr>
                <td>JD Vance</td>
                <td>BS Information Systems</td>
                <td>1st Year</td>
                <td class="actions">
                    <a href="{{ route('students.show', 4) }}" class="action-link">View</a>
                    <span>|</span>
                    <a href="{{ route('students.edit', 4) }}" class="action-link">Edit</a>
                </td>
            </tr>
            <tr>
                <td>Anne Hathaway</td>
                <td>BS Computer Science</td>
                <td>2nd Year</td>
                <td class="actions">
                    <a href="{{ route('students.show', 5) }}" class="action-link">View</a>
                    <span>|</span>
                    <a href="{{ route('students.edit', 5) }}" class="action-link">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection