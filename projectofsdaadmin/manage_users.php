
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="admin_pages.css">
</head>
<body>
    <div class="main center-content">
        <h1>Manage Users</h1>

        <h2>Teachers</h2>
<table class="styled-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone No</th>
            <th>Class</th>
            <th>Subject</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>John Doe</td><td>john@example.com</td><td>1234567890</td><td>Class 5</td><td>Math</td><td><button>Edit</button> <button>Delete</button></td></tr>
        <tr><td>Sara Kim</td><td>sara@example.com</td><td>4567890123</td><td>Class 6</td><td>Science</td><td><button>Edit</button> <button>Delete</button></td></tr>
        <tr><td>Jake Long</td><td>jake@example.com</td><td>7890123456</td><td>Class 7</td><td>English</td><td><button>Edit</button> <button>Delete</button></td></tr>
        <tr><td>Nina Diaz</td><td>nina@example.com</td><td>0123456789</td><td>Class 8</td><td>History</td><td><button>Edit</button> <button>Delete</button></td></tr>
    </tbody>
</table>

        <h2>Students</h2>
<table class="styled-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone No</th>
            <th>Parent</th>
            <th>Class</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>Jane Smith</td><td>jane@example.com</td><td>2345678901</td><td>Anna</td><td>Class 3</td><td><button>Edit</button> <button>Delete</button></td></tr>
        <tr><td>Tom Hardy</td><td>tom@example.com</td><td>5678901234</td><td>Smith</td><td>Class 4</td><td><button>Edit</button> <button>Delete</button></td></tr>
        <tr><td>Anna Bell</td><td>anna@example.com</td><td>8901234567</td><td>John</td><td>Class 5</td><td><button>Edit</button> <button>Delete</button></td></tr>
    </tbody>
</table>

        <h2>Parents</h2>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Mark Lee</td><td>mark@example.com</td><td>3456789012</td><td><button>Edit</button> <button>Delete</button></td></tr>
                <tr><td>Lisa Park</td><td>lisa@example.com</td><td>6789012345</td><td><button>Edit</button> <button>Delete</button></td></tr>
                <tr><td>Steve Nash</td><td>steve@example.com</td><td>9012345678</td><td><button>Edit</button> <button>Delete</button></td></tr>
            </tbody>
        </table>
        <div class="actions">
  <a href="admin_add_user.php">
    <button type="button">Add New User</button>
  </a>
</div>
    </div>
</body>
</html>