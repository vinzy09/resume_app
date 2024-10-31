<!DOCTYPE html>
<html>
<head>
    <title>Create Resume</title>
</head>
<body>
    <h1>Create Resume</h1>
    <form action="{{ route('resumes.store') }}" method="POST">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br>
        <label>Phone:</label><br>
        <input type="text" name="phone" required><br>
        <label>Address:</label><br>
        <input type="text" name="address" required><br>
        <label>About Me:</label><br>
        <textarea name="about_me" required></textarea><br>
        <label>Skills (comma-separated):</label><br>
        <input type="text" name="skills" required><br>
        <label>Education:</label><br>
        <input type="text" name="education" required><br>
        <label>Work Experience:</label><br>
        <input type="text" name="work_experience" required><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
