<!-- parent_view_fees.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>View Fees & Payment Status</title>
 <link rel="stylesheet" href="../projectofsdastudents/student_pages.css">
</head>
<body>
  <div class="main center-content">
    <h1>Child Fee Details</h1>

    <form class="styled-form" method="get">
      <label for="child">Child Name:</label>
      <select id="child" name="child">
        <option value="">-- Select Child --</option>
        <option value="john">John Smith</option>
        <option value="anna">Anna Lee</option>
      </select>

      <label for="roll">Roll No:</label>
      <input type="text" id="roll" name="roll" placeholder="Enter Roll Number" required />

      <label for="class">Class:</label>
      <select id="class" name="class">
        <option value="">-- Select Class --</option>
        <option value="1">Class 1</option>
        <option value="2">Class 2</option>
        <option value="3">Class 3</option>
        <option value="4">Class 4</option>
      </select>

      <div class="actions">
        <button type="submit">View Fee Status</button>
      </div>
    </form>

    <div class="styled-table-container">
      <h2>Fee Record for John Smith - Class 2</h2>
      <table class="styled-table">
        <thead>
          <tr>
            <th>Fee Type</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Payment Date</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Tuition</td><td>5000</td><td>Paid</td><td>2025-04-10</td></tr>
          <tr><td>Library</td><td>1000</td><td>Pending</td><td>--</td></tr>
          <tr><td>Transport</td><td>1500</td><td>Paid</td><td>2025-03-15</td></tr>
        </tbody>
      <