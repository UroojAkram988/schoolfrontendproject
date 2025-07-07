<!-- admin_manage_attendance.php --><!DOCTYPE html><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Attendance</title>
    <link rel="stylesheet" href="admin_pages.css">
</head>
<body>
    <div class="main center-content">
        <h1>View Attendance</h1><form class="styled-form">
        <label for="role">Role:</label>
        <select id="role">
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
        </select>

        <label for="date">Date:</label>
        <input type="date">

        <div class="actions">
            <button type="submit">View Attendance</button>
        </div>
    </form>

    <div class="styled-table-container">
        <h2>Attendance Records</h2>
        <table class="styled-table">
            <thead>
                <tr><th>Name</th><th>Status</th><th>Time</th></tr>
            </thead>
            <tbody>
                <tr><td>John Smith</td><td>Present</td><td>08:00 AM</td></tr>
                <tr><td>Sara Kim</td><td>Absent</td><td>-</td></tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>