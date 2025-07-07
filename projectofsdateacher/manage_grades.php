
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Grades</title>
    <link rel="stylesheet" href="../projectofsdaadmin/admin_pages.css">
    
</head>
<body>
    <div class="main center-content">
        <h1>Manage Grades</h1>

        <form class="styled-form">
            <label for="class">Class:</label>
            <select id="class" name="class">
                <option value="">-- Select Class --</option>
                <option value="1">Class 1</option>
                <option value="2">Class 2</option>
                <option value="3">Class 3</option>
                <option value="4">Class 4</option>
                <option value="5">Class 5</option>
            </select>

            <label for="subject">Subject:</label>
            <select id="subject" name="subject">
                <option value="">-- Select Subject --</option>
                <option value="math">Math</option>
                <option value="science">Science</option>
                <option value="english">English</option>
                <option value="history">History</option>
            </select>

            <label for="term">Term:</label>
            <select id="term" name="term">
                <option value="">-- Select Term --</option>
                <option value="term1">Term 1</option>
                <option value="term2">Term 2</option>
            </select>

            <div class="actions">
                <button type="submit">Load Grades</button>
            </div>
        </form>

        <table class="styled-table">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Subject</th>
                    <th>Term</th>
                    <th>Grade</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Jane Smith</td><td>Class 3</td><td>Math</td><td>Term 1</td><td>A</td><td><button>Edit</button> <button>Enter</button></td></tr>
                <tr><td>Tom Hardy</td><td>Class 4</td><td>Science</td><td>Term 1</td><td>B+</td><td><button>Edit</button> <button>Enter</button></td></tr>
                <tr><td>Anna Bell</td><td>Class 5</td><td>English</td><td>Term 1</td><td>A-</td><td><button>Edit</button> <button>Enter</button></td></tr>
            </tbody>
        </table>
    </div>
</body>
</html>
