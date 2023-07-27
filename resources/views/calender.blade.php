<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fullcalendar</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>
<body>
    <div style="width: 100%; max-height: 500px; display:flex; justify-content:center; align-items:center; margin:auto;">
        <div style="width:70%; margin:auto; max-height:500px;">
            <div id='full_calendar_events'></div>
        </div>
    </div>

    {{-- Scripts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function () {
            var SITEURL = "{{ url('/') }}";
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Fetch events from the server using AJAX GET request
            $.ajax({
                url: SITEURL + "/calendar-events",
                type: "GET",
                success: function (data) {
                    // Initialize the FullCalendar with the fetched events
                    var calendar = $('#full_calendar_events').fullCalendar({
                        editable: true,
                        selectable: true, // Enable select event for creating new events
                        selectHelper: true, // Show a helper when selecting a time slot
                        events: data, // Use the fetched events here
                        displayEventTime: true,
                        eventDrop: function (event, delta, revertFunc) {
                            var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                            var event_end = event.end ? $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss") : null;
                            $.ajax({
                                url: SITEURL + '/calendar-events/' + event.id,
                                data: {
                                    _method: 'PUT',
                                    event_name: event.title,
                                    event_start: event_start,
                                    event_end: event_end,
                                },
                                type: "POST",
                                headers: {
                                    'X-CSRF-TOKEN': csrfToken
                                },
                                success: function (response) {
                                    displayMessage("Event updated", 'success');
                                },
                                error: function (error) {
                                    revertFunc();
                                    displayMessage("Error updating event: " + JSON.stringify(error), 'error');
                                }
                            });
                        },
                        eventClick: function (event) {
                            var eventDelete = confirm("Are you sure you want to delete this event?");
                            if (eventDelete) {
                                $.ajax({
                                    type: "POST",
                                    url: SITEURL + '/calendar-events/' + event.id,
                                    data: {
                                        _method: 'DELETE'
                                    },
                                    headers: {
                                        'X-CSRF-TOKEN': csrfToken
                                    },
                                    success: function (response) {
                                        calendar.fullCalendar('removeEvents', event.id);
                                        displayMessage("Event removed", 'success');
                                    },
                                    error: function (error) {
                                        displayMessage("Error deleting event: " + JSON.stringify(error), 'error');
                                    }
                                });
                            }
                        },
                        eventResize: function (event, delta, revertFunc) {
                            var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                            var event_end = event.end ? $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss") : null;
                            $.ajax({
                                url: SITEURL + '/calendar-events/' + event.id,
                                data: {
                                    _method: 'PUT',
                                    event_name: event.title,
                                    event_start: event_start,
                                    event_end: event_end,
                                },
                                type: "POST",
                                headers: {
                                    'X-CSRF-TOKEN': csrfToken
                                },
                                success: function (response) {
                                    displayMessage("Event updated", 'success');
                                },
                                error: function (error) {
                                    revertFunc();
                                    displayMessage("Error updating event: " + JSON.stringify(error), 'error');
                                }
                            });
                        },
                        eventRender: function (event, element) {
                            element.attr('title', event.title);
                        },
                        select: function (event_start, event_end, allDay) {
                            var event_name = prompt('Event Name:');
                            if (event_name !== null) {
                                event_name = event_name.trim(); // Trim the event_name to remove leading/trailing spaces
                                if (event_name !== '') {
                                    var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
                                    var event_end = event_end ? $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss") : null;
                                    $.ajax({
                                        url: SITEURL + "/calendar-events",
                                        data: {
                                            event_name: event_name,
                                            event_start: event_start,
                                            event_end: event_end,
                                        },
                                        type: "POST",
                                        headers: {
                                            'X-CSRF-TOKEN': csrfToken
                                        },
                                        success: function (data) {
                                            displayMessage("Event created.", 'success');
                                            calendar.fullCalendar('renderEvent', {
                                                id: data.id,
                                                title: event_name, // Event name without "12a" prefix
                                                start: event_start,
                                                end: event_end,
                                                allDay: allDay
                                            }, true);
                                            calendar.fullCalendar('unselect');
                                        },
                                        error: function (error) {
                                            displayMessage("Error creating event: " + JSON.stringify(error), 'error');
                                        }
                                    });
                                }
                            }
                        }
                    });
                },
                error: function (error) {
                    console.log("Error fetching events: " + JSON.stringify(error));
                }
            });

            function displayMessage(message, type) {
                toastr.options = {
                    positionClass: 'toast-top-right',
                    progressBar: true,
                    timeOut: 3000, // Display time for each notification (in milliseconds)
                    extendedTimeOut: 1000, // Additional display time for user interaction (in milliseconds)
                };
                toastr[type](message);
            }
        });
    </script>
</body>
</html>
