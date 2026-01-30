@extends('layout')

@section('title', 'Student List')

@section('content')
@section('header-actions')
    <a href="{{ route('students.create') }}" class="btn btn-primary">Add New Student</a>
@endsection

<div class="card">

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
                    <x-view-button href="{{ route('students.show', 1) }}">View</x-view-button>
                    <x-edit-button href="{{ route('students.edit', 1) }}">Edit</x-edit-button>
                </td>
            </tr>
            <tr>
                <td>Christopher Columbus</td>
                <td>BS Information Technology</td>
                <td>2nd Year</td>
                <td class="actions">
                    <x-view-button href="{{ route('students.show', 2) }}">View</x-view-button>
                    <x-edit-button href="{{ route('students.edit', 2) }}">Edit</x-edit-button>
                </td>
            </tr>
            <tr>
                <td>Donald Trump</td>
                <td>BS Computer Engineering</td>
                <td>4th Year</td>
                <td class="actions">
                    <x-view-button href="{{ route('students.show', 3) }}">View</x-view-button>
                    <x-edit-button href="{{ route('students.edit', 3) }}">Edit</x-edit-button>
                </td>
            </tr>
            <tr>
                <td>JD Vance</td>
                <td>BS Information Systems</td>
                <td>1st Year</td>
                <td class="actions">
                    <x-view-button href="{{ route('students.show', 4) }}">View</x-view-button>
                    <x-edit-button href="{{ route('students.edit', 4) }}">Edit</x-edit-button>
                </td>
            </tr>
            <tr>
                <td>Anne Hathaway</td>
                <td>BS Computer Science</td>
                <td>2nd Year</td>
                <td class="actions">
                    <x-view-button href="{{ route('students.show', 5) }}">View</x-view-button>
                    <x-edit-button href="{{ route('students.edit', 5) }}">Edit</x-edit-button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection