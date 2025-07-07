
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Materials</title>
    <link rel="stylesheet" href="teacher_pages.css">
</head>
<body>
    <div class="main center-content">
        <h1>Upload Study Materials</h1>

        <form class="styled-form" method="post" enctype="multipart/form-data">
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

<label for="course">Select Course:</label>
            <select id="course" name="course">
                <option value="">-- Select Course --</option>
                <option value="math">Mathematics</option>
                <option value="science">Science</option>
                <option value="english">English</option>
                <option value="history">History</option>
            </select>

            <label for="material">Choose File:</label>
            <input type="file" id="material" name="material" required>

            <div class="actions">
                <button type="submit">Upload Material</button>
            </div>
        </form>
    </div>
</body>
</html>
