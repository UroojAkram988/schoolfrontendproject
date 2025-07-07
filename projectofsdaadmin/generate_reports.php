<!-- generate_reports.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Reports</title>
    <link rel="stylesheet" href="admin_pages.css">

</head>
<body>
    <div class="main center-content">
        <h1>Generate Reports</h1>

        <form class="styled-form">
            <label for="filter">Filter By:</label>
            <select id="filter" name="filter">
                <option value="">-- Select Filter --</option>
                <option value="student">Student Performance</option>
                <option value="teacher">Teacher Performance</option>
            </select>

            <label for="class">Select Class:</label>
            <select id="class" name="class">
                <option value="">-- Select Class --</option>
                <option value="1">Class 1</option>
                <option value="2">Class 2</option>
                <option value="3">Class 3</option>
                <option value="4">Class 4</option>
                <option value="5">Class 5</option>
            </select>

            <label for="term">Select Term:</label>
            <select id="term" name="term">
                <option value="">-- Select Term --</option>
                <option value="term1">Term 1</option>
                <option value="term2">Term 2</option>
            </select>
            <label for="subject">Select Subject:</label>
<select id="subject" name="subject">
    <option value="">-- Select Subject --</option>
    <option value="math">Math</option>
    <option value="science">Science</option>
    <option value="english">English</option>
    <option value="history">History</option>
    <option value="geography">Geography</option>
</select>

            <label for="format">Report Format:</label>
            <select id="format" name="format">
                <option value="table">Table</option>
                <option value="pdf">PDF</option>
            </select>

            <div class="actions">
                <button type="submit">Generate Report</button>
            </div>
        </form>

        <h2>Example: Teacher Performance Summary</h2>
<table class="styled-table">
    <thead>
        <tr>
            <th>Teacher Name</th>
            <th>Class</th>
            <th>Subject</th>
            <th>Average Grade</th>
            <th>Attendance Rate</th>
            <th>Feedback Score</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>John Doe</td><td>Class 5</td><td>Math</td><td>85%</td><td>98%</td><td>4.6 / 5</td></tr>
        <tr><td>Sara Kim</td><td>Class 6</td><td>Science</td><td>78%</td><td>95%</td><td>4.2 / 5</td></tr>
        <tr><td>Jake Long</td><td>Class 7</td><td>English</td><td>88%</td><td>96%</td><td>4.8 / 5</td></tr>
    </tbody>
</table>

<h2>Example: Student Performance Summary</h2>
<table class="styled-table">
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Class</th>
            <th>Term</th>
            <th>Average Grade</th>
            <th>Attendance</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>Jane Smith</td><td>Class 3</td><td>Term 1</td><td>82%</td><td>94%</td></tr>
        <tr><td>Tom Hardy</td><td>Class 4</td><td>Term 1</td><td>76%</td><td>91%</td></tr>
        <tr><td>Anna Bell</td><td>Class 5</td><td>Term 1</td><td>88%</td><td>96%</td></tr>
    </tbody>
</table>
    </div>
</body>
</html>
