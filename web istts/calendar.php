<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
.clearfix::after,
.calendar ol::after {
  content: ".";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}

.calendar {
  border-radius: 30px;
}

.month {
  font-size: 2rem;
}

@media (min-width: 992px) {
  .month {
    font-size: 3.5rem;
  }
}

.calendar ol li {
  float: left;
  width: 14.28571%;
}

.calendar .day-names {
  border-bottom: 1px solid #eee;
}

.calendar .day-names li {
  text-transform: uppercase;
  margin-bottom: 0.5rem;
}

.calendar .days li {
  border-bottom: 1px solid #eee;
  min-height: 8rem;
}

.calendar .days li .date {
  margin: 0.5rem 0;
}

.calendar .days li .event {
  font-size: 0.75rem;
  padding: 0.4rem;
  color: white;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  border-radius: 4rem;
  margin-bottom: 1px;
}

.calendar .days li .event.span-2 {
  width: 200%;
}

.calendar .days li .event.begin {
  border-radius: 1rem 0 0 1rem;
}

.calendar .days li .event.end {
  border-radius: 0 1rem 1rem 0;
}

.calendar .days li .event.clear {
  background: none;
}

.calendar .days li:nth-child(n+29) {
  border-bottom: none;
}

.calendar .days li.outside .date {
  color: #ddd;
}

body {
  min-height: 100vh;
}

#calender{
  background-color: #3ca55c;
  background-image: linear-gradient(60deg, #3ca55c 0%, #b5ac49 100%);
}

</style>
<body>

<div class="row" id="calender">
<div class="container py-5">

<!-- For Demo Purpose -->
  <header class="text-center text-white mb-5">
    <h1 class="display-4">Agenda</h1>
    </p>
  </header>


  <!-- Calendar -->
  <div class="calendar shadow bg-white p-5">
    <div class="d-flex align-items-center"><i class="fa fa-calendar fa-3x mr-3"></i>
      <h2 class="month font-weight-bold mb-0 text-uppercase">Februari 2012</h2>
    </div>
    <!-- <p class="font-italic text-muted mb-5">No events for this day.</p> -->
    <ol class="day-names list-unstyled">
      <li class="font-weight-bold text-uppercase">Sun</li>
      <li class="font-weight-bold text-uppercase">Mon</li>
      <li class="font-weight-bold text-uppercase">Tue</li>
      <li class="font-weight-bold text-uppercase">Wed</li>
      <li class="font-weight-bold text-uppercase">Thu</li>
      <li class="font-weight-bold text-uppercase">Fri</li>
      <li class="font-weight-bold text-uppercase">Sat</li>
    </ol>

    <ol class="days list-unstyled">
    <?php
    $tmp = 0;
    $listKegiatan = mysqli_query($conn,"SELECT * FROM agenda_bahasa");
    $listTgl = mysqli_query($conn,"SELECT * FROM agenda");
    
      foreach ($listKegiatan as $kegiatan){
        $ctr = 1;
        foreach($listTgl as $tgl){
          if($kegiatan['agenda_id']==$tgl['agenda_id']){
            $t = $tgl['agenda_tgl']; 
            $tahun = substr($t,0,4);
            $bulan = substr($t,5,2);
            $tgl = substr($t,8,2); 
            $judul = $kegiatan['agenda_judul'];
            if($bulan=="02" && $tahun=="2012"){
              for ($i=0; $i < 30 ; $i++) { 
                if($tgl<10){
                  if($tgl == "0"+($i+1)){
                    echo"<li>";
                    echo"<div class='date'>$tgl</div>";
                    echo"<div class='event bg-success'>$judul</div>";
                    echo"</li>";
                    $ctr++;
                  }else{
                    echo"<li>";
                    echo"<div class='date'>$ctr</div>";
                    echo"</li>";
                    $ctr++;
                  }
                }else{
                  if($tgl == $i+1){
                    echo"<li>";
                    echo"<div class='date'>$tgl</div>";
                    echo"<div class='event bg-success'>$judul</div>";
                    echo"</li>";
                    $ctr++;
                  }else{
                    echo"<li>";
                    echo"<div class='date'>$ctr</div>";
                    echo"</li>";
                    $ctr++;
                  }
                }
              }
              
            }
          }
        } 
      }
  ?>
      <!-- <li>
        <div class="date">1</div>
        <div class="event bg-success">Event with Long Name</div>
      </li>
      <li>
        <div class="date">2</div>
      </li>
      <li>
        <div class="date">3</div>
      </li>
      <li>
        <div class="date">4</div>
      </li>
      <li>
        <div class="date">5</div>
      </li>
      <li>
        <div class="date">6</div>
      </li>
      <li>
        <div class="date">7</div>
      </li>
      <li>
        <div class="date">8</div>
      </li>
      <li>
        <div class="date">9</div>
      </li>
      <li>
        <div class="date">10</div>
      </li>
      <li>
        <div class="date">11</div>
      </li>
      <li>
        <div class="date">12</div>
      </li>
      <li>
        <div class="date">13</div>
        <div class="event all-day begin span-2 bg-warning">Event Name</div>
      </li>
      <li>
        <div class="date">14</div>
      </li>
      <li>
        <div class="date">15</div>
        <div class="event all-day end bg-success">Event Name</div>
      </li>
      <li>
        <div class="date">16</div>
      </li>
      <li>
        <div class="date">17</div>
      </li>
      <li>
        <div class="date">18</div>
      </li>
      <li>
        <div class="date">19</div>
      </li>
      <li>
        <div class="date">20</div>
      </li>
      <li>
        <div class="date">21</div>
        <div class="event bg-primary">Event Name</div>
        <div class="event bg-success">Event Name</div>
      </li>
      <li>
        <div class="date">22</div>
        <div class="event bg-info">Event with Longer Name</div>
      </li>
      <li>
        <div class="date">23</div>
      </li>
      <li>
        <div class="date">24</div>
      </li>
      <li>
        <div class="date">25</div>
      </li>
      <li>
        <div class="date">26</div>
      </li>
      <li>
        <div class="date">27</div>
      </li>
      <li>
        <div class="date">28</div>
      </li>
      <li>
        <div class="date">29</div>
      </li>
      <li>
        <div class="date">30</div>
      </li>
      <li>
        <div class="date">31</div>
      </li>
      <li class="outside">
        <div class="date">1</div>
      </li>
      <li class="outside">
        <div class="date">2</div>
      </li>
      <li class="outside">
        <div class="date">3</div>
      </li>
      <li class="outside">
        <div class="date">4</div>
      </li> -->
    </ol>
  </div>
</div>
</div>

</body>
</html>