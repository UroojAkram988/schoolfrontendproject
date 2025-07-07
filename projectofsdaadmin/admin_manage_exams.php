<!DOCTYPE html><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Exams</title>
    <link rel="stylesheet" href="admin_pages.css">
</head>
<body>
    <div class="main center-content">
        <h1>Manage Exams</h1><form class="styled-form">
        <label for="class">Select Class:</label>
        <select id="class" name="class">
            <option value="1">Class 1</option>
            <option value="2">Class 2</option>
            <option value="3">Class 3</option>
            <option value="4">Class 4</option>
            <option value="5">Class 5</option>
        </select>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" placeholder="e.g. Science">

        <label for="exam-date">Exam Date:</label>
        <input type="date" id="exam-date" name="exam-date">

        <label for="exam-time">Exam Time:</label>
        <input type="time" id="exam-time" name="exam-time">

        <div class="actions">
            <button type="submit">Schedule Exam</button>
        </div>
    </form>

    <div class="styled-table-container">
        <h2>Upcoming Exams</h2>
        <table class="styled-table">
            <thead>
                <tr><th>Class</th><th>Subject</th><th>Date</th><th>Time</th></tr>
            </thead>
            <tbody>
                <tr><td>Class 4</td><td>Math</td><td>2025-05-25</td><td>10:00 AM</td></tr>
                <tr><td>Class 5</td><td>English</td><td>2025-05-26</td><td>11:30 AM</td></tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>