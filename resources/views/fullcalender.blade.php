<!DOCTYPE html>
<html>
<head>
  <title>Fullcalender</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<body>
 
  <div class="container">
      <div class="response"></div>
      <div id='calendar'></div>  
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
    $(document).ready(function () {
    var SITEURL = "{{url('/')}}";
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    var calendar = $('#calendar').fullCalendar({
    editable: true,
    events: SITEURL + "fullcalendar",
    displayEventTime: true,
    editable: true,
    eventRender: function (event, element, view) {
    if (event.allDay === 'true') {
    event.allDay = true;
    } else {
    event.allDay = false;
    }
    },
    selectable: true,
    selectHelper: true,
    select: function (start, end, allDay) {
    var title = prompt('Event Title:');
    if (title) {
    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
    $.ajax({
    url: SITEURL + "fullcalendar/create",
    data: 'title=' + title + '&start=' + start + '&end=' + end,
    type: "POST",
    success: function (data) {
    displayMessage("Added Successfully");
    }
    });
    calendar.fullCalendar('renderEvent',
    {
    title: title,
    start: start,
    end: end,
    allDay: allDay
    },
    true
    );
    }
    calendar.fullCalendar('unselect');
    },
    eventDrop: function (event, delta) {
    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
    $.ajax({
    url: SITEURL + 'fullcalendar/update',
    data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
    type: "POST",
    success: function (response) {
    displayMessage("Updated Successfully");
    }
    });
    },
    eventClick: function (event) {
    var deleteMsg = confirm("Do you really want to delete?");
    if (deleteMsg) {
    $.ajax({
    type: "POST",
    url: SITEURL + 'fullcalendar/delete',
    data: "&id=" + event.id,
    success: function (response) {
    if(parseInt(response) > 0) {
    $('#calendar').fullCalendar('removeEvents', event.id);
    displayMessage("Deleted Successfully");
    }
    }
    });
    }
    }
    });
    });
    function displayMessage(message) {
    $(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);
    }
    </script>
</body>
</html>
