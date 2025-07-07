
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Homework</title>
    <link rel="stylesheet" href="teacher_pages.css">
</head>
<body>
    <div class="main center-content">
        <h1>Assign Homework</h1>

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

            <label for="subject">Select Subject:</label>
            <select id="subject" name="subject">
                <option value="">-- Select Subject --</option>
                <option value="math">Mathematics</option>
                <option value="science">Science</option>
                <option value="english">English</option>
                <option value="history">History</option>
            </select>

            <label for="homework">Homework Details:</label>
            <textarea id="homework" name="homework" rows="5" placeholder="Enter homework instructions..." required></textarea>

            <div class="actions">
                <button type="submit">Assign Homework</button>
            </div>
        </form>
    </div>
</body>
</html>
