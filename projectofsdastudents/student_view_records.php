<!-- student_view_records.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Grades & Attendance</title>
    <link rel="stylesheet" href="student_pages.css">
</head>
<body>
    <div class="main center-content">
        <h1>My Grades & Attendance</h1>

        <form class="styled-form" method="get">
            <label for="subject">Select Subject:</label>
            <select id="subject" name="subject">
                <option value="">-- Select Subject --</option>
                <option value="math">Math</option>
                <option value="science">Science</option>
                <option value="english">English</option>
                <option value="history">History</option>
            </select>

            <label for="term">Select Term:</label>
            <select id="term" name="term">
                <option value="">-- Select Term --</option>
                <option value="term1">Term 1</option>
                <option value="term2">Term 2</option>
            </select>

            <div class="actions">
                <button type="submit">View Report</button>
            </div>
        </form>

        <div class="styled-table-container">
            <h2>Subject: Math | Term: Term 1</h2>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Score / Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Midterm Grade</td><td>85%</td></tr>
                    <tr><td>Final Grade</td><td>88%</td></tr>
                    <tr><td>Attendance</td><td>96%</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
