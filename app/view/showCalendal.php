<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css" rel='stylesheet' />
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.print.min.css" rel='stylesheet' media='print' />
<script src='./app/lib/moment.min.js'></script>
<style>
  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }
</style>
<div id='calendar'></div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>

<script>
$(document).ready(function() {
  var data = <?php echo json_encode($tasks);?>;
  console.log(data);
  var today = new Date();
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'listDay,listWeek,month'
    },

    views: {
      listDay: { buttonText: 'list day' },
      listWeek: { buttonText: 'list week' }
    },

    defaultView: 'month',
    defaultDate: today,
    navLinks: true,
    editable: true,
    eventLimit: true,
    events: data,
  
  });
});
</script>