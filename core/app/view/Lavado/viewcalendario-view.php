
<meta charset='utf-8' />
<link href='assets/plugins/fullcalendar2/lib/main.css' rel='stylesheet' />
<script src='assets/plugins/fullcalendar2/lib/main.js'></script>
<script src='assets/plugins/fullcalendar2/lib/locales/es.js'></script>

<?php
 $thejson = null;
 $lavados = LavadoData::getAll();

  foreach($lavados as $lavado){
    $vehiculo=VehiculoData::getById($lavado->idvehiculo);
    $cliente=ClienteData::getById($lavado->idcliente);
    $thejson[] = array("id"=>$lavado->id,"title"=>$vehiculo->placa."T".$cliente->nombre,"url"=>"#","start"=>$lavado->fechadeentrada,"end"=>$lavado->fechadesalida,"className"=>"bg-teal");
  }
?>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
    
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
   
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      selectable: true,
      nowIndicator: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events:  <?php echo json_encode($thejson); ?>,

      eventClick: function(arg) {
       
        if (confirm('¿ informacion detallada?\n'+arg.event.title+"\nID: "+arg.event.id)) {
          
          window.location='index.php?view=Lavado/LikeLavado&id='+arg.event.id;
        
        }
      },
    });

    calendar.render();
  });

</script>
<style>

  html, body {
    margin: 0px 0px;
    padding: 0;
   
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar-container {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }

  
  #calendar {
    max-width: 2000px;
    margin: 0 auto;
  }

  .fc-header-toolbar {
    /*
    the calendar will be butting up against the edges,
    but let's scoot in the header's buttons
    */
    padding-top: 1em;
    padding-left: 1em;
    padding-right: 1em;
  }

  </style>
  <div class="row row-xs clearfix">
    <div class="col-12">
      <div class="card mg-t-20 mg-b-20">
        <div class="card-body">
          <!--================================-->
          <!-- calendar Start -->
          <!--================================-->
          <div id='calendar'></div>
          <!--/ calendar End -->
        </div>
      </div>
    </div>
  </div>
<script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>  