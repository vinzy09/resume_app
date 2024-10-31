<!DOCTYPE html>
<html>
<head>
    <title>Resumes</title>
</head>
<body>
    <h1>Resumes</h1>
    <a href="{{ route('resumes.create') }}">Create New Resume</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>About Me</th>
                <th>Skills</th>
                <th>Education</th>
                <th>Work Experience</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resumes as $resume)
                <tr>
                    <td>{{ $resume->name }}</td>
                    <td>{{ $resume->email }}</td>
                    <td>{{ $resume->phone }}</td>
                    <td>{{ $resume->address }}</td>
                    <td>{{ $resume->about_me }}</td>
                    <td>{{ json_decode($resume->skills) }}</td>
                    <td>{{ $resume->education }}</td>
                    <td>{{ $resume->work_experience }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
