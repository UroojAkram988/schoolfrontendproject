<!-- admin_add_user.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New User</title>
  <link rel="stylesheet" href="admin_pages.css">
</head>
<body>
  <div class="main center-content">
    <h1>Add New User</h1>

    <form class="styled-form" method="post">
      <label for="role">Role:</label>
      <select id="role" name="role" required>
        <option value="">-- Select Role --</option>
        <option value="teacher">Teacher</option>
        <option value="student">Student</option>
        <option value="parent">Parent</option>
      </select>

      <label for="name">Full Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter full name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter email" required>

      <label for="phone">Phone No:</label>
      <input type="text" id="phone" name="phone" placeholder="Enter phone number" required>

      <label for="class">Class (Student/Teacher):</label>
      <select id="class" name="class">
        <option value="">-- Select Class --</option>
        <option value="1">Class 1</option>
        <option value="2">Class 2</option>
        <option value="3">Class 3</option>
        <option value="4">Class 4</option>
        <option value="5">Class 5</option>
      </select>

      <label for="subject">Subject (Teacher Only):</label>
      <input type="text" id="subject" name="subject" placeholder="e.g. Math, Science">

      <div class="actions">
        <button type="submit">Add User</button>
      </div>
    </form>
  </div>
</body>
</html>