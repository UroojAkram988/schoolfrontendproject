
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Teacher Dashboard</title>
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
    }

    .container {
        max-width: 1000px;
        margin: 0 auto;
        margin-top: 20px;
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
        margin: 0 auto;
        margin-bottom: 20px;
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
        color:rgb(205, 10, 10);
    }

    @media (max-width: 768px) {
        .cards {
            flex-direction: column;
            align-items: center;
            gap: 30px;
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
  </style>
</head>
<body>
  <?php include_once '../header.php'; ?>

  <div class="container">
    <h1>Welcome, Teacher</h1>

    <!-- Dashboard Tiles -->
    <div class="cards">
      <div class="card">
        <div class="icon-heading">
          <div class="icon">📘</div>
          <div>Courses</div>
        </div>
        <div class="count">5</div>
      </div>
      <div class="card">
        <div class="icon-heading">
          <div class="icon">👨‍🎓</div>
          <div>Students</div>
        </div>
        <div class="count">120</div>
      </div>
      <div class="card">
        <div class="icon-heading">
          <div class="icon">💬</div>
          <div>Messages</div>
        </div>
        <div class="count">10</div>
      </div>
    </div>

    <!-- Options Grid -->
    <div class="options-grid">
      <a href="view_courses.php">View Courses</a>
      <a href="teacher_assign_homework.php">Assign Assignment</a>
      <a href="teacher_upload_materials.php">Upload Course Material</a>
      <a href="manage_grades.php">Manage Grades</a>
      <a href="teacher_attendance.php">Attendance</a>
      <a href="manage_teacher_notification.php">Notifications</a>
    </div>
  </div>

  <?php include_once '../footer.php'; ?>
</body>
</html>
