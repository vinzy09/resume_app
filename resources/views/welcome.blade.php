<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Resume</title>
    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        /* Header Section */
        header {
            text-align: center;
            margin-bottom: 30px;
        }

        header img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            margin-bottom: 10px;
        }

        header h1 {
            font-size: 2em;
            color: #333;
        }

        header p {
            font-size: 1.1em;
            color: #777;
        }

        /* Section Titles */
        section h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #2c3e50;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
        }

        /* Summary Section */
        .summary p {
            font-size: 1.2em;
            margin-bottom: 20px;
            color: #555;
        }

        /* Experience Section */
        .experience .job {
            margin-bottom: 20px;
        }

        .experience h3 {
            font-size: 1.4em;
            color: #2980b9;
        }

        .experience p {
            font-size: 1.1em;
            color: #555;
            margin-bottom: 10px;
        }

        .experience ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        .experience ul li {
            margin-bottom: 8px;
        }

        /* Education Section */
        .education p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        /* Skills Section */
        .skills ul {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            list-style: none;
            padding-left: 0;
        }

        .skills li {
            background-color: #2980b9;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 1em;
        }

        /* Footer Section */
        footer {
            text-align: center;
            margin-top: 30px;
            color: #777;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Header Section -->
        <header>
            <img src="pp.jpg" alt="Profile Picture">
            <h1>Vincent Joe L. Visda</h1>
            <p>{{$details->title}} | {{$details->email}} | {{$details->phone}}</p>
        </header>

        <!-- Summary Section -->
        <section class="summary">
            <h2>Summary</h2>
            <p>{{$details->summry}}</p>
        </section>

        <!-- Experience Section -->
        <section class="experience">
            <h2>Experience</h2>
            <div class="job">
                <h3>Senior Software Developer</h3>
                <ul>
                    <li>Lead development of web-based applications using Python and PHP.</li>
                    <li>Optimized system performance, increasing application speed by 30%.</li>
                    <li>Collaborated with cross-functional teams to design new features based on user feedback.</li>
                </ul>
            </div>
            <div class="job">
                <h3>Software Engineer</h3>

                <ul>
                    <li>Developed e-commerce platforms using HTML, CSS, and JavaScript.</li>
                    <li>Implemented RESTful APIs to enhance system functionality and integration.</li>
                    <li>Performed regular code reviews and maintenance to ensure stability and security.</li>
                </ul>
            </div>
        </section>

        <!-- Education Section -->
        <section class="education">
            <h2>Education</h2>
            <p>{{$details->education}}</p>
        </section>

        <!-- Skills Section -->
        <section class="skills">
            <h2>Skills</h2>
            <ul>
                <li>{{$details->skills1}}</li>
                <li>{{$details->skills2}}</li>
                <li>{{$details->skills3}}</li>
                <li>{{$details->skills4}}</li>

            </ul>
        </section>

        <!-- Footer Section -->
        <footer>
            <p>&copy; 2025 John Jhoward Gelina</p>
        </footer>
    </div>

</body>
</html>
