<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fullcalendar</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link rel="apple-touch-icon" href="{{ asset('assets/admin/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/admin/images/ico/favicon.ico') }}">
    {{-- <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet"> --}}
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/animate/animate.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/' . getFolder() . '/vendors.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/fonts/meteocons/style.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/css/charts/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/css/charts/chartist.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/forms/selects/select2.min.css') }}"> --}}
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/charts/chartist-plugin-tooltip.css') }}">
    {{-- <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/forms/toggle/bootstrap-switch.min.css') }}"> --}}
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/forms/toggle/switchery.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/' . getFolder() . '/core/menu/menu-types/vertical-menu.css') }}">
    {{-- <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/' . getFolder() . '/pages/chat-application.css') }}"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap.min.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap.rtl.min.css') }}"> --}}



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />




    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/' . getFolder() . '/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/' . getFolder() . '/custom-rtl.css') }}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/' . getFolder() . '/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/' . getFolder() . '/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/' . getFolder() . '/core/colors/palette-gradient.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/' . getFolder() . '/pages/timeline.css') }}"> --}}
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/cryptocoins/cryptocoins.css') }}">
    {{-- <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/extensions/datedropper.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/extensions/timedropper.min.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/file-uploaders/dropzone.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/css-rtl/plugins/file-uploaders/dropzone.css') }}"> --}}
    <!-- END Page Level CSS-->

    {{-- <link rel="icon"
    href="{{ asset('assets/images/favicon.png') }}">
<link rel="apple-touch-icon"
    href="{{ asset('assets/images/apple-touch-icon.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/style.css') }}">
    <!-- END Custom CSS-->
    {{-- @notify_css --}}
    @yield('style')
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" /> --}}

    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;

        }
        .fc-title{
            color: white !important;
        }
        .app-content{
            transform: scale(0.8) !important;
            position: absolute !important;
            top: 0 !important;
        }
    </style>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" /> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" /> --}}
</head>
<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click"
data-menu="vertical-menu" data-col="2-columns">

@include('dashboard.includes.header')
<!-- end header -->
<!-- begin sidebar -->
@include('dashboard.includes.sidebar')
<div class="app-content content">
    <div class="content-wrapper" style="width: 100%; background-size: 100px;background-position:center top; height:100%; display:flex; justify-content:center; align-items:flex-start; margin:auto;">
        <div style="width:100%; margin:auto; height:100%;">
            <div id='full_calendar_events' style="font-size:large;"></div>
        </div>
    </div>
</div>
    {{-- @include('dashboard.includes.footer') --}}


<!-- BEGIN VENDOR JS-->
<script src="{{ asset('assets/admin/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
{{-- <script src="{{ asset('assets/admin/vendors/js/editors/ckeditor/ckeditor.js') }}" type="text/javascript"></script> --}}

<!-- BEGIN VENDOR JS-->
{{-- <script src="{{ asset('assets/admin/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript"> --}}
{{-- </script> --}}
{{-- <script src="{{ asset('assets/admin/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"
    type="text/javascript">
</script> --}}

<script src="{{ asset('assets/admin/vendors/js/forms/toggle/bootstrap-switch.min.js') }}" type="text/javascript">
</script>
{{-- <script src="{{ asset('assets/admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js') }}" type="text/javascript">
</script> --}}
<script src="{{ asset('assets/admin/vendors/js/forms/toggle/switchery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/js/scripts/forms/switch.js') }}" type="text/javascript"></script>
{{-- <script src="{{ asset('assets/admin/vendors/js/forms/select/select2.full.min.js') }}" type="text/javascript">
</script> --}}
{{-- <script src="{{ asset('assets/admin/js/scripts/forms/select/form-select2.js') }}" type="text/javascript"></script> --}}

<!-- BEGIN PAGE VENDOR JS-->
{{-- <script src="{{ asset('assets/admin/vendors/js/charts/chart.min.js') }}" type="text/javascript"></script> --}}
{{-- <script src="{{ asset('assets/admin/vendors/js/charts/echarts/echarts.js') }}" type="text/javascript"></script> --}}

{{-- <script src="{{ asset('assets/admin/vendors/js/extensions/datedropper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/vendors/js/extensions/timedropper.min.js') }}" type="text/javascript"></script> --}}

{{-- <script src="{{ asset('assets/admin/vendors/js/forms/icheck/icheck.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/js/scripts/pages/chat-application.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/vendors/js/extensions/dropzone.min.js') }}" type="text/javascript"></script> --}}
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{ asset('assets/admin/js/core/app-menu.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/js/core/app.js') }}" type="text/javascript"></script>

{{-- <script src="{{ asset('assets/admin/js/scripts/customizer.js') }}" type="text/javascript"></script> --}}
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
{{-- <script src="{{ asset('assets/admin/js/scripts/pages/dashboard-crypto.js') }}" type="text/javascript"></script> --}}


{{-- <script src="{{ asset('assets/admin/js/scripts/tables/datatables/datatable-basic.js') }}" type="text/javascript">
</script> --}}
{{-- <script src="{{ asset('assets/admin/js/scripts/extensions/date-time-dropper.js') }}" type="text/javascript"></script> --}}
{{-- <script src="{{ asset('assets/admin/vendors/js/ui/prism.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/js/scripts/pages/email-application.js') }}" type="text/javascript"></script> --}}
<!-- END PAGE LEVEL JS-->

{{-- <script src="{{ asset('assets/admin/js/scripts/forms/checkbox-radio.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/js/scripts/modal/components-modal.js') }}" type="text/javascript"></script> --}}
{{--

<script>
    $('#meridians1').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians2').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians3').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians4').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians5').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians6').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians7').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians8').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians9').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians10').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians11').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians12').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians13').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians14').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
</script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>






 --}}








    {{-- Scripts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function () {
            var SITEURL = "{{ url('/') }}";
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            var updateEventName = function (event) {
                var newEventName = prompt("Enter the new event name:", event.title);
                if (newEventName !== null) {
                    newEventName = newEventName.trim();
                    if (newEventName !== "") {
                        $.ajax({
                            url: SITEURL + '/calendar-events/' + event.id,
                            data: {
                                _method: 'PUT',
                                event_name: newEventName,
                                event_start: $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss"),
                                event_end: event.end ? $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss") : null,
                            },
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': csrfToken
                            },
                            success: function (response) {
                                event.title = newEventName; // Update the event name in the FullCalendar
                                displayMessage("Event name updated", 'success');
                                $('#full_calendar_events').fullCalendar('updateEvent', event); // Update the event in the calendar
                            },
                            error: function (error) {
                                displayMessage("Error updating event: " + JSON.stringify(error), 'error');
                            }
                        });
                    }
                }
            };

            // Fetch events from the server using AJAX GET request
            $.ajax({
        url: SITEURL + "/calendar-events",
        type: "GET",
        success: function (data) {
            // Update the events to ensure the correct start and end dates are used
            data.forEach(function (event) {
                // Add one day to the end date before rendering it on the calendar
                if (event.end !== null) {
                    event.end = moment(event.end).add(1, 'days').format("Y-MM-DD");
                }
            });

                    // Initialize the FullCalendar with the fetched events
                    var calendar = $('#full_calendar_events').fullCalendar({
                        editable: true,
                        selectable: true,
                        timezone: 'Africa/Cairo',

                        selectHelper: true,
                        events: data,
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
                                event_name = event_name.trim();
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
                                                title: event_name,
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
                            } else {
                                updateEventName(event);
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
                    timeOut: 3000,
                    extendedTimeOut: 1000,
                };
                toastr[type](message);
            }
        });
    </script>
</body>
</html>
