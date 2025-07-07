<!-- teacher_attendance.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Attendance</title>
    <link rel="stylesheet" href="teacher_pages.css">
</head>
<body>
    <div class="main center-content">
        <h1>Mark Attendance</h1>

        <form class="styled-form" method="post">
            <label for="class">Select Class:</label>
            <select id="class" name="class">
                <option value="">-- Select Class --</option>
                <option value="1">Class 1</option>
                <option value="2">Class 2</option>
                <option value="3">Class 3</option>
                <option value="4">Class 4</option>
                <option value="5">Class 5</option>
                <option value="6">Class 6</option>
                <option value="7">Class 7</option>
                <option value="8">Class 8</option>
                <option value="9">Class 9</option>
                <option value="10">Class 10</option>
            </select>

            <div class="actions">
                <button type="submit">Load Students</button>
            </div>
        </form>

        <div class="styled-table-container">
            <h2>Class 5 - Attendance Sheet</h2>
            <form method="post">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Mark Attendance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jane Smith</td>
                            <td>
                                <label><input type="radio" name="attendance_jane" value="present"> Present</label>
                                <label><input type="radio" name="attendance_jane" value="absent"> Absent</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Tom Hardy</td>
                            <td>
                                <label><input type="radio" name="attendance_tom" value="present" required> Present</label>
                                <label><input type="radio" name="attendance_tom" value="absent"> Absent</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Anna Bell</td>
                            <td>
                                <label><input type="radio" name="attendance_anna" value="present" required> Present</label>
                                <label><input type="radio" name="attendance_anna" value="absent"> Absent</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="actions">
                    <button type="submit">Submit Attendance</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
