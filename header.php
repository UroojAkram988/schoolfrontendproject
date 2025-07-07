<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Header</title>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .header-primary {
            width: 100%;
            background-color: #05284c;
            color: #fff;
            padding: 20px;
            text-align: left;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 130px;
        }

        .header-primary .header-content {
            display: flex;
            align-items: center;
        }

        .header-primary .school-logo {
            height: 45px;
            margin-right: 10px;
            vertical-align: middle;
        }

        .header-primary h1 {
            font-family: 'Great Vibes', cursive;
            font-size: 2em;
            margin: 0;
            display: inline-block;
            vertical-align: middle;
            color: #fff;
        }

        nav ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            font-weight: bold;
            transition: color 0.3s;
            text-decoration: none;
        }

        nav ul li a:hover {
            color: rgba(255, 0, 0, 1);
        }

        /* Responsive styles */
        @media (max-width: 600px) {
            .header-primary {
                flex-wrap: wrap;
                justify-content: center;
                height: auto;
                padding: 15px 10px;
            }

            .header-primary .header-content {
                flex: 1 1 100%;
                justify-content: center;
                margin-bottom: 10px;
                min-width: 0;
            }

            .header-primary h1 {
                font-size: 1.1em;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            nav ul {
                flex: 1 1 100%;
                overflow-x: hidden;
                flex-wrap: nowrap;
                justify-content: space-around;
                padding: 0;
                margin: 0;
            }

            nav ul li {
                margin: 0 6px;
                white-space: nowrap;
                flex-shrink: 0;
            }

            nav ul li a {
                font-size: 0.7em;
                padding: 4px 6px;
            }
        }
    </style>
</head>

<body>
    <header class="header-primary">
        <div class="header-content">
            <img src="/ProjectOfSDA/logo.png" alt="School Logo" class="school-logo" />
            <h1>Apex Excellence School</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Grades</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a href="#communication">Communication</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
