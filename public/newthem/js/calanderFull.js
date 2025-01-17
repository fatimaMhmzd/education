
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendarF');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale:'fa',
        firstDay:6,
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'next,today,prev',
            right:'title',
        },
        titleFormat:{
            year: 'numeric',
            month: 'long'
        },
        buttonText:{
            today:'امروز',
            month:'ماهانه',
        },
        events: [
            {
                id:1,
                title: 'وبینار استارتاپی',
                master: 'رضا مهوشی',
                course:'غیرحضوری',
                start: '2023-04-25T09:00:00',
                end: '2023-04-25T12:00:00',
                borderColor:'#BDB2FF',
            },
            {
                id:2,
                title: 'وبینار استارتاپی',
                master: 'رضا مهوشی',
                course:'غیرحضوری',
                start: '2023-04-26T09:00:00',
                end: '2023-04-26T12:00:00',
                borderColor:'#212121',
            },
        ],
        eventContent: function (arg) {
            var event = arg.event;
            var startTime = event.start.toLocaleTimeString(event.start);
            var endTime = event.end.toLocaleTimeString(event.end);
            var eventTime = startTime +" - "+endTime;
            var customHtml =`
                  <div style="z-index: 0;cursor: pointer;float: right;border-radius: 8px 0px 0px 8px;;width:101px;border: 0.5px solid ${event.borderColor};diraction:rtl;position: relative;background-color:#FFFBF5;color:#000;height:50px;margin-top:-25px;text-align: right">
                      <div style="position: absolute;right:0;margin-top:-2px;margin-left:20px;border-radius: 8px;border: 1px solid ${event.borderColor};background-color: ${event.borderColor};width: 4px;height:52px;"></div>
                      <div style="display:flex;justify-content: end;margin-right:12px;margin-top:8px"><span style=font-size:12px;color:#757575;"> ${event.title}</span></div>
                      <p style="font-size: 7px;color:#A3A3A3;margin-top:7px;margin-right:12px">${eventTime}</p>
                  </div>
                  <div id="custom-event-tooltip-popup${event.id}" style="z-index:2;display:none;direction:rtl;top:40px;right:10px ;position:absolute;width: 200px !important;">
                        <div class="info" style="padding: 10px !important;height: 121px;background-color: #FFFBF5;position: relative;border: 0.5px solid ${event.borderColor};border-top-left-radius: 8px;border-bottom-left-radius: 8px;z-index:2">
                             <div id="div-color" style="position: absolute;right: -2px;width: 4px;top: -3px;height: 125px;border-radius: 8px;background-color:${event.borderColor}"></div>
                             <p id="time" class="time" style="font-size: 10px;color: #A3A3A4;display: block;margin-top: 20px;position: absolute;direction: ltr">${eventTime}</p>
                             <div class="d-flex justify-content-between align-items-center">
                                  <span id="title" class="title"
                                        style="font-size: 12px;color: #757575;margin-top: -30px;">${event.title}</span>
                                  <div id="image" style="background-image: url('/indexImages/projectIcon/Rectangle 2564.png');background-repeat: no-repeat;background-position: center;background-size: cover;height: 41px;width: 37px;border-radius: 8px"></div>
                             </div>
                             <div class="teacher" style="margin-top: 16px;float: right;color: #909090"><span class="font-12">مدرس دوره:</span><span class="ms-1 font-10">${event.extendedProps.master}</span></div>
                             <div class="course" style="margin-top: 8px;font-size: 10px;color: #909090;float: right">نحوه برگزاری: <span class="font-10">${event.extendedProps.course}</span></div>
                        </div>
                  </div>
            `;
            return { html: customHtml }
        },
        eventMouseEnter: function(info) {
            var infoS = document.getElementById(`custom-event-tooltip-popup${info.event.id}`);
            infoS.style.display='block'
        },
        eventMouseLeave: function(info) {
            var infoS = document.getElementById(`custom-event-tooltip-popup${info.event.id}`);
            infoS.style.display='none'
        },
    });
    calendar.render();
});
