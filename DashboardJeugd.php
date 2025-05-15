<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="Dashboard.php">Dashboard</a></li>
            <li><a href="DashboardJeugd.php">Dashboard Jeugd</a></li>
        </ul>
    </nav>
    <div class="content">
        <div class="row">
            <div class="col">
                <div class="left">
                <div class="row">
                    <div class="col">
                        <img src="https://www.sterrenwachthalley.nl/wp-content/uploads/2019/11/logo-Halley-web-_logo-halley-web-1.svg">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="links">
                            <div class="row">
                                <div class="col">
                                    <a href="Dashboard.php">Dashboard</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="DashboardJeugd.php">Dashboard Jeugd</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="right">
                <div class="row">
                    <div class="col">
                        <div class="page">

                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    /* css reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* background except for nav will be an img */
    .content {
        background-image: url('https://sterrenwachthalley.nl/wp-content/uploads/2019/11/halley-background-001.jpg');
        background-size: cover;
        background-position: center;
        font-family: Arial, sans-serif;
        color: white;
        height: 100vh;
    }

    body {
        overflow-x: hidden;
    }

    img {
        width: 200px;
        height: 200px;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    .page {
        /* align left */
        background-color: white;
        height: 80vh;
        width: 40vw;
    }

    .links {
        background-color: #F7C200;
        width: 200px;
        margin-top: 3vh;
        margin-left: 4.8vw;
    }
    .left {
        margin-top: 3vw;
        margin-left: 20vw;
    }
    .right {
        margin-top: 3vw;
        margin-right: 15vw;
    }
</style>