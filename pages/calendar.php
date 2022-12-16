<?php 
    include("../inc/fonction.php");
    $idHabitat = $_GET['idHabitat'];
    $allOccupations = constructEventsForCalendar($idHabitat);
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8' />
    <script src='../assets/js/fullcalendar/dist/index.global.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    // my event data
                    // {
                    //     id: 1,
                    //     title: 'logement occupé',
                    //     start: '2022-12-05',
                    //     end: '2022-12-08'
                    // },
                    // {
                    //     id: 2,
                    //     title: 'logement occupé',
                    //     start: '2022-12-10',
                    //     end: '2022-12-15'
                    // }
                    <?php echo($allOccupations); ?>
                ],
                eventColor: 'bluesky'
            });
            calendar.render();
        });
    </script>
</head>

<body>
    <div id='calendar'></div>
</body>

</html>