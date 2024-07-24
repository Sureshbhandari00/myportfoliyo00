<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="timer.css">
    <link rel="stylesheet" type="" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Timer</title>
</head>

<body style="background-color: black;">
    <div class="container">
        <div class="box"></div>
        <div class="display"></div>
        <a href="index.html" class="btn btn-outline-danger">Go Home Page</a>

    </div>

    <script>
        function Timer() {
            var date = new Date();

            var hr = date.getHours();
            var min = date.getMinutes();
            var sec = date.getSeconds();
            var year = date.getFullYear();
            var mn = date.getMonth();

            if (hr > 12) {
                hr = hr - 12;
            }
            if (min < 10) {
                min = "0" + min;

            }
            if (sec < 10) {
                min = "0" + sec;

            }

            if (min < 10) {
                min = "0" + mn;

            }
            var time = hr + " : " + min + ":" + sec + "-Month:" + mn + "-" + "YEAR-" + year;
            document.querySelector('.display').innerHTML = time;
            document.querySelector('.box').innerHTML = date;
            setTimeout(Timer, 1000);

        }
        Timer();
    </script>
</body>

</html>