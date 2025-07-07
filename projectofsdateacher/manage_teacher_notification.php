
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Notifications</title>
    <link rel="stylesheet" href="teacher_pages.css">
</head>
<body>
    <div class="main center-content">
        <h1>Manage Notifications</h1>

        <form class="styled-form">
            <label for="category">Category:</label>
            <select id="category" name="category">
                <option value="">-- Select Category --</option>
                <option value="exam">Exam</option>
                <option value="event">Event</option>
                <option value="announcement">General Announcement</option>
                <option value="performance">Performance</option>
            </select>

            <label for="recipient">Send To:</label>
            <select id="recipient" name="recipient">
                <option value="">-- Select Recipient --</option>
                <option value="students">Students</option>
                <option value="parents">Parents</option>
                <option value="both">Both</option>
            </select>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" placeholder="Enter notification message..." style="width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #ccc;"></textarea>

            <div class="actions">
                <button type="submit">Send Notification</button>
            </div>
        </form>
    </div>
</body>
</html>
