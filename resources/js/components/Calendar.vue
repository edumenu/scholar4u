<template>
    <FullCalendar
        class='demo-app-calendar'
        ref="fullCalendar"
        defaultView="dayGridMonth"
        :header="{
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        }"
        :plugins="calendarPlugins"
        :weekends="calendarWeekends"
        :events="calendarEvents"
        @dateClick="handleDateClick"
        @eventClick="handleEventClick"
        selectHelper=false
        editable=false
    />
</template>

<script>
    import FullCalendar from '@fullcalendar/vue'
    import dayGridPlugin from '@fullcalendar/daygrid'
    import timeGridPlugin from '@fullcalendar/timegrid'
    import interactionPlugin from '@fullcalendar/interaction'

    export default {
        props: ['userLoginId'],   // Obtaining the user login
        components: {
            FullCalendar // make the <FullCalendar> tag available
        },
        data: function() {
            return {
                calendarPlugins: [ // plugins must be defined in the JS
                    dayGridPlugin,
                    timeGridPlugin,
                    interactionPlugin // needed for dateClick
                ],
                calendarWeekends: true,
                calendarEvents:'',
                componentKey: 0,
            }
        },

        created() {
            // Fetch all events for the user when the page loads
            this.fetchEvents();
           // Displays information with regards to the calendar
            this.calendarInfo();
        },

        methods: {
            toggleWeekends() {
                this.calendarWeekends = !this.calendarWeekends // update a property
            },
            gotoToday() {
                let calendarApi = this.$refs.fullCalendar.getApi(); // from the ref="..."
                calendarApi.gotoDate('2000-01-01') // call a method on the Calendar object
            },

            // Functions to handle date clicks
            handleDateClick(arg) {
                let userId = this.userLoginId;
                let self = this;

                // Adding a new event
                swal({
                    title: 'Add an Event',
                    html: '<br><input class="form-control" placeholder="Event Title" id="input-field">',
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                    confirmButtonClass: "btn btn-info btn-fill",
                    cancelButtonClass: "btn btn-danger btn-fill",
                }).then(function() {
                    axios.post(`http://scholar4u.me/api/calendar`, {
                        user_id: userId,
                        title: document.getElementById("input-field").value,
                        start: arg.dateStr,
                        all_day: 'true',
                        color: "#"+((1<<24)*Math.random()|0).toString(16),
                    }).then(response => {
                        self.fetchEvents()  // Refreshing the page after calling new event
                    }).catch(e => {
                        alert(e);
                    });
                   },
                );

            },

            // Function for handling event clicks
            handleEventClick(info){
                let self = this;
                function formatDate(start) {   // Function to format date
                    return start.toLocaleString();
                }

                // Display date after clicking on it
                swal({
                    title: '<b>Event:</b> ' + info.event.title,
                    html: '<b> Start: </b>' + formatDate(info.event.start),
                    showCancelButton: true,
                    confirmButtonText: 'Okay',
                    confirmButtonClass: "btn btn-success btn-fill",
                    cancelButtonText: 'Delete',
                    cancelButtonClass: 'btn btn-danger btn-fill',
                }).then(function() {

                    }, function(dismiss) {

                    // Deleting an event
                    axios.delete('/api/calendar/' + info.event.id)
                        .then(response=>{
                            self.fetchEvents()
                        }).catch(error => {
                        alert(error);
                      });
                    });
            },

            //Function to make get requests for all posts
            fetchEvents() {
                axios.get('/api/calendar/' + this.userLoginId)
                    .then(response=>{
                        this.calendarEvents = JSON.parse(JSON.stringify(response.data.data));
                    }).catch(error => {
                        alert(error);
                })
            },

            calendarInfo() {
                if(!this.executed){
                    swal({
                        html: '<h2>Click on an event to view more details. <br> Click on a calendar box to add event</h2>',
                        showCancelButton: false,
                        confirmButtonText: 'Okay',
                        confirmButtonClass: "btn btn-success btn-fill",
                    }).then(function() {

                    });
                }
            },
        }
    }
</script>

<style lang='scss'>
    // you must include each plugins' css
    // paths prefixed with ~ signify node_modules
    @import '~@fullcalendar/core/main.css';
    @import '~@fullcalendar/daygrid/main.css';
    @import '~@fullcalendar/timegrid/main.css';
    .demo-app {
        font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        font-size: 14px;
    }
    .demo-app-top {
        margin: 0 0 3em;
    }
    .demo-app-calendar {
        margin: 0 auto;
        max-width: 900px;
    }
</style>
