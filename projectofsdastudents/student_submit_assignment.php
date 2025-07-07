<!-- student_submit_assignment.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Assignment</title>
    <link rel="stylesheet" href="student_pages.css">
</head>
<body>
    <div class="main center-content">
        <h1>Submit Assignment</h1>

        <form class="styled-form" method="post" enctype="multipart/form-data">
            <label for="class">Select Class:</label>
            <select id="class" name="class">
                <option value="">-- Select Class --</option>
                <option value="1">Class 1</option>
                <option value="2">Class 2</option>
                <option value="3">Class 3</option>
                <option value="4">Class 4</option>
                <option value="5">Class 5</option>
            </select>

            <label for="assignment">Upload Assignment:</label>
            <input type="file" id="assignment" name="assignment" required>

            <label for="remarks">Remarks (optional):</label>
            <textarea id="remarks" name="remarks" rows="4" placeholder="Enter any additional notes..."></textarea>

            <div class="actions">
                <button type="submit">Submit Assignment</button>
            </div>
        </form>
    </div>
</body>
</html>
