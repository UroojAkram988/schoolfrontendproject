<!-- admin_dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: #f8f9fc;
        min-height: 100vh;
        padding: 40px 30px;
        color: #2e4a62;
        display: flex;
        flex-direction: column;
    }

    .container {
        max-width: 1000px;
        margin: 0 auto;
        margin-top: 20px;
        flex: 1;
    }

    h1 {
        font-size: 32px;
        margin-bottom: 40px;
        text-align: center;
    }

    .cards {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-bottom: 60px;
        flex-wrap: wrap;
    }

    .card {
        background-color: #ffffff;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        width: 225px;
        height: 70px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        cursor: default;
        transition: transform 0.2s ease;
        text-align: center;
        color: #324d7b;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card .icon-heading {
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 600;
        font-size: 13px;
        margin-bottom: 10px;
        color: #324d7b;
    }

    .card .icon-heading .icon {
        font-size: 18px;
    }

    .card .count {
        padding-top: 0px;
        font-size: 15px;
        font-weight: bold;
        color: #000;
    }

    .options-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        max-width: 1000px;
        margin: 0 auto 20px auto;
    }

    .options-grid a {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 120px;
        background-color: rgba(50, 77, 123, 0.1);
        border-radius: 12px;
        font-size: 17px;
        font-weight: 600;
        color: #324d7b;
        text-decoration: none;
        transition: background-color 0.3s ease, color 0.3s ease;
        user-select: none;
        cursor: pointer;
        text-align: center;
        padding: 10px;
    }

    .options-grid a:hover {
        color: rgb(205, 10, 10);
    }

    /* Responsive Grid and Cards */
    @media (max-width: 768px) {
        .cards {
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .options-grid {
            grid-template-columns: repeat(2, 1fr);
            max-width: 500px;
        }
    }

    @media (max-width: 480px) {
        .options-grid {
            grid-template-columns: 1fr;
            max-width: 300px;
        }
    }

    /* Responsive Header */
    header {
        background-color: #324d7b;
        color: white;
        padding: 15px 30px;
        text-align: center;
        font-size: 20px;
        font-weight: 600;
    }

    header nav {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
        margin-top: 10px;
    }

    header nav a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    header nav a:hover {
        color: #ffd700;
    }

    /* Responsive Footer */
    footer {
        background-color: #324d7b;
        color: white;
        padding: 15px 30px;
        text-align: center;
        font-size: 14px;
        margin-top: 40px;
        flex-shrink: 0;
    }

    @media (max-width: 480px) {
        header {
            font-size: 18px;
            padding: 12px 15px;
        }

        footer {
            font-size: 12px;
            padding: 12px 15px;
        }
    }
  </style>
</head>
<body>
  <?php include_once '../header.php'; ?>

  <div class="container">
    <h1>Welcome, Admin</h1>

    <!-- Dashboard Tiles -->
    <div class="cards">
      <div class="card">
        <div class="icon-heading">
          <div class="icon">🎓</div>
          <div>Total Students</div>
        </div>
        <div class="count">450</div>
      </div>
      <div class="card">
        <div class="icon-heading">
          <div class="icon">👩‍🏫</div>
          <div>Total Teachers</div>
        </div>
        <div class="count">35</div>
      </div>
      <div class="card">
        <div class="icon-heading">
          <div class="icon">🏫</div>
          <div>Classes</div>
        </div>
        <div class="count">25</div>
      </div>
      <div class="card">
        <div class="icon-heading">
          <div class="icon">📊</div>
          <div>Reports Generated</div>
        </div>
        <div class="count">128</div>
      </div>
    </div>


    <div class="options-grid">
      <a href="manage_users.php">Manage Users</a>
      <a href="manage_timetable.php ">Manage Timetable</a>
      <a href="manage_courses.php">Manage Courses</a>
      <a href="admin_View_grades.php">View Grades</a>
      <a href="admin_view_attendance.php">View Attendance</a>
      <a href="manage_fee.php">Fee & Payment</a>
      <a href="generate_reports.php">Generate Reports</a>
      <a href="admin_manage_exams.php">Manage Exams</a>
      <a href="manage_notifications.php">Notifications</a>
    </div>
  </div>

  <?php include_once '../footer.php'; ?>
</body>
</html>
