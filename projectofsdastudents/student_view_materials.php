<!DOCTYPE html><html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Course Materials</title>
  <link rel="stylesheet" href="student_pages.css">
</head>
<body>
  <div class="main center-content">
    <h1>My Course Materials</h1><form class="styled-form" method="get">
  <label for="class">Select Class:</label>
  <select id="class" name="class">
    <option value="">-- Select Class --</option>
    <option value="1">Class 1</option>
    <option value="2">Class 2</option>
    <option value="3">Class 3</option>
    <option value="4">Class 4</option>
    <option value="5">Class 5</option>
  </select>

  <label for="subject">Select Subject:</label>
  <select id="subject" name="subject">
    <option value="">-- Select Subject --</option>
    <option value="math">Math</option>
    <option value="science">Science</option>
    <option value="english">English</option>
    <option value="history">History</option>
  </select>

  <div class="actions">
    <button type="submit">View Materials</button>
  </div>
</form>

<div class="styled-table-container">
  <h2>Available Materials</h2>
  <table class="styled-table">
    <thead>
      <tr><th>Title</th><th>Description</th><th>Uploaded By</th><th>Download</th></tr>
    </thead>
    <tbody>
      <tr>
        <td>Algebra Basics</td>
        <td>Introduction to Algebra with examples</td>
        <td>Mr. John Doe</td>
        <td><a href="#" download>Download</a></td>
      </tr>
      <tr>
        <td>Photosynthesis Notes</td>
        <td>Detailed explanation of the photosynthesis process</td>
        <td>Ms. Sara Kim</td>
        <td><a href="#" download>Download</a></td>
      </tr>
      <tr>
        <td>English Grammar Guide</td>
        <td>Reference material for parts of speech and sentence structure</td>
        <td>Mr. Jake Long</td>
        <td><a href="#" download>Download</a></td>
      </tr>
    </tbody>
  </table>
</div>

  </div>
</body>
</html>