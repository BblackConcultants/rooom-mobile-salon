<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rooom Mobile Hair Salon</title>
<link rel="icon" type="image/x-icon" href="assets/images/fav.png">
  
  <style type="text/css">
    .btn{
  display:inline-block !important;
}
.btn-primary{
 position: absolute;
    right: 181px;
    top: 35px;
  opacity:0;
}

.fc-left h2{
  color:#ed8392
}
.fa{
  display:inline-block !important;
  margin-right:.5em;
}
.fc-content{
      float: left;
    margin-right: 51px;
}
.I_delete
{
    margin:37px;
}
.I_edit,.I_delete
{
  cursor:pointer;
}
.site-header {
    margin: 1.4em 28em;
  position: absolute;
    top: -4%;
    width: 41%;
}

.input-wrapper {
  background-color: #333;
  -webkit-box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
  height: 48px;
  margin: 0 auto;
  overflow: hidden;
  position: relative;
  width: 50%;
}

::-webkit-input-placeholder {
  color: #fff;
}

.search-field {
  background-color: transparent;
  background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCIgdmlld0JveD0iMCAwIDYxMi4wMSA2MTIuMDEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDYxMi4wMSA2MTIuMDE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8ZyBpZD0iX3gzNF9fNF8iPgoJCTxnPgoJCQk8cGF0aCBkPSJNNjA2LjIwOSw1NzguNzE0TDQ0OC4xOTgsNDIzLjIyOEM0ODkuNTc2LDM3OC4yNzIsNTE1LDMxOC44MTcsNTE1LDI1My4zOTNDNTE0Ljk4LDExMy40MzksMzk5LjcwNCwwLDI1Ny40OTMsMCAgICAgQzExNS4yODIsMCwwLjAwNiwxMTMuNDM5LDAuMDA2LDI1My4zOTNzMTE1LjI3NiwyNTMuMzkzLDI1Ny40ODcsMjUzLjM5M2M2MS40NDUsMCwxMTcuODAxLTIxLjI1MywxNjIuMDY4LTU2LjU4NiAgICAgbDE1OC42MjQsMTU2LjA5OWM3LjcyOSw3LjYxNCwyMC4yNzcsNy42MTQsMjguMDA2LDBDNjEzLjkzOCw1OTguNjg2LDYxMy45MzgsNTg2LjMyOCw2MDYuMjA5LDU3OC43MTR6IE0yNTcuNDkzLDQ2Ny44ICAgICBjLTEyMC4zMjYsMC0yMTcuODY5LTk1Ljk5My0yMTcuODY5LTIxNC40MDdTMTM3LjE2NywzOC45ODYsMjU3LjQ5MywzOC45ODZjMTIwLjMyNywwLDIxNy44NjksOTUuOTkzLDIxNy44NjksMjE0LjQwNyAgICAgUzM3Ny44Miw0NjcuOCwyNTcuNDkzLDQ2Ny44eiIgZmlsbD0iI0ZGRkZGRiIvPgoJCTwvZz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K);
  background-position: 20px 14px;
  background-repeat: no-repeat;
  background-size: 20px 20px;
  border: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  color: #fff;
  height: 100%;
  letter-spacing: 2px;
  outline: none;
  padding: 0 10px 0 65px;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 10;
  width: 100%;
}
#calendar{
    position: absolute;
    width: 70%;
    margin-left: 255px;

}
.search-field:placeholder-shown {
  color: #fff;
}

.search-field:focus {
  background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCIgdmlld0JveD0iMCAwIDYxMi4wMSA2MTIuMDEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDYxMi4wMSA2MTIuMDE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8ZyBpZD0iX3gzNF9fNF8iPgoJCTxnPgoJCQk8cGF0aCBkPSJNNjA2LjIwOSw1NzguNzE0TDQ0OC4xOTgsNDIzLjIyOEM0ODkuNTc2LDM3OC4yNzIsNTE1LDMxOC44MTcsNTE1LDI1My4zOTNDNTE0Ljk4LDExMy40MzksMzk5LjcwNCwwLDI1Ny40OTMsMCAgICAgQzExNS4yODIsMCwwLjAwNiwxMTMuNDM5LDAuMDA2LDI1My4zOTNzMTE1LjI3NiwyNTMuMzkzLDI1Ny40ODcsMjUzLjM5M2M2MS40NDUsMCwxMTcuODAxLTIxLjI1MywxNjIuMDY4LTU2LjU4NiAgICAgbDE1OC42MjQsMTU2LjA5OWM3LjcyOSw3LjYxNCwyMC4yNzcsNy42MTQsMjguMDA2LDBDNjEzLjkzOCw1OTguNjg2LDYxMy45MzgsNTg2LjMyOCw2MDYuMjA5LDU3OC43MTR6IE0yNTcuNDkzLDQ2Ny44ICAgICBjLTEyMC4zMjYsMC0yMTcuODY5LTk1Ljk5My0yMTcuODY5LTIxNC40MDdTMTM3LjE2NywzOC45ODYsMjU3LjQ5MywzOC45ODZjMTIwLjMyNywwLDIxNy44NjksOTUuOTkzLDIxNy44NjksMjE0LjQwNyAgICAgUzM3Ny44Miw0NjcuOCwyNTcuNDkzLDQ2Ny44eiIgZmlsbD0iIzAwMDAwMCIvPgoJCTwvZz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K);
  color: #000;
}

.focus-background {
  background-color: #fff;
  display: block;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 8;
  width: 100%;
  -webkit-transition: -webkit-transform 0.3s;
  transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
  transition: transform 0.3s, -webkit-transform 0.3s;
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
  -webkit-transform-origin: right center;
          transform-origin: right center;
}

.search-field:focus ~ .focus-background {
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
  -webkit-transform-origin: left center;
          transform-origin: left center;
}


#calendar-popup {
  display:none;
  position: absolute;
  margin-bottom: 0;
  padding: 0 1.33em;
  z-index: 1000;

  border: solid rgba(200, 200, 200, 0.75) 2px;
  border-radius: 10px;
  color: black;
  background: #FFF;
}
.calander_popip_title{
 border-bottom: 1px solid #484141;
    text-align: center;
    margin: 1em 1em;
    padding: .5em;
    font-size: 20px;
    background: #eee;
}
   
#calendar-popup * {
  display: block;
}
.fc-day-grid-event .fc-content{
  margin-bottom:10px;
}
#calendar-popup header {
    text-align: center;
    font-size: 1.5em;
    line-height: 1.9em;
    margin-bottom: 0.5em;
   background: #a1a1ad;
}

/* #calendar-popup button.close {
  margin: 10px 10px 0 0;
} */

#calendar-popup label,
#calendar-popup input,
#calendar-popup textarea {
  font-size: 0.9em;
  font-weight: normal;
  margin-bottom: 0;
  padding: 0;
  width: 100%;
}

#calendar-popup input {
  margin-bottom: 0.5em;
  padding: 0;

}
#calendar-popup .submit_btn {
      width:86%;
      background-color:#eee;
}


#calendar-popup time {
  font-style: italic;
  line-height: 1em;
  margin-top: 0;
}

#calendar-popup form,
#calendar-popup div#event {
  margin: 0.75em 0 0.75em 0;
/*   padding-left: 20px; */
}

#calendar-popup li {
  margin-bottom: 0.33em;
    margin-right: 42px;
}
#calendar-popup li:nth-child(odd) {
  background:#eee;
}
#calendar-popup li:nth-child(even) {
background: #5555;
}
#calendar-popup li.location,
#calendar-popup li.details {
  font-size: 0.85em;
  color: #333;
}

#calendar-popup div.prong {
  position: relative;
  float: right;

  bottom: 0;
  right: 15px;

  height: 0;
  width: 20px;

}

#calendar-popup div.prong div.bottom-prong-dk {
  position: relative;
  top: 0;
  left: 0;

  border: 10px solid;
  border-color: rgba(200, 200, 200, 0.75) transparent;
  border-bottom: 0;
}

#calendar-popup div.prong div.bottom-prong-lt {
  position: relative;
  top: -10px;
  left: 2px;
  width: 0;

  border: 8px solid;
  border-color: white transparent;
  border-bottom: 0;
}

#calendar-popup div.prong div.top-prong-dk {
  position: relative;
  top: 2px;
  left: 0;

  border: 10px solid;
  border-color: rgba(200, 200, 200, 0.75) transparent;
  border-top: 0;
}

#calendar-popup div.prong div.top-prong-lt {
  position: relative;
  top: -6px;
  left: 200px;
  width: 0;

  border: 8px solid;
  border-color: white transparent;
  border-top: 0;
}






.modle{
  display:none;
  position:fixed;
  z-index:1;
  left:0;
  top:0;
  height:100%;
  width:100%;
  background-color:rgba(0,0,0,.3);
 overflow:auto;
}
.modle-continer{
    background-color:#f4f4f4;
  margin:5% auto;
  width:70%;
  box-shadow:0 5px 8px rgba(0,0,0,.2),0 7px 20px rgba(0,0,0,.2);
animation-name:modalopen;
  animation-duration:1s;
}
.modal-header{
  background:#eee;
  padding:15px;
  color:#000;
}
.modal-header h2{
    position: absolute;
    right: 46%;
}

.close-btn{
  color:#000;
  float:right;
  font-size:30px;
}
.close-btn:hover,.close-btn:focus{
  color:#000;
  text-decoration:none;
  cursor:pointer;
}
.modal-body{
  padding:10px 20px;
}
.modal-footer{
  background:#eee;
  padding:10px;
  color:#000;
  text-align:center;
}
.modal-footer h3{
  margin:0;
  
}
@keyframes modalopen{
  from{opacity:0}
  to{opacity:1}
  
}
#search_result{
      position: absolute;
    top: 62px;
    left: 594px;
    border: 1px solid #111;
    padding: 1em 7.7em;
 display:none;
}


.autocomplete {
  background: #fff;
  position: relative;
  
 
}
.autocomplete .close {
  position: absolute;
  font-size: 13px;
  z-index: 10;
  top: 17px;
  left: calc(100% - 50px);
  color: #000;
  cursor: pointer;
  display: none;
}
.autocomplete .close.visible {
  display: block;
}
.dialog {
    width: 51%;
    display: none;
    min-height: 40px;
    max-height: 329px;
    overflow: scroll;
    border-top: 1px solid #f4f4f4;
    z-index: 12 !important;
    margin: 6px 145px;
  position:absolute;
}
.dialog.open {
   display: block;
    background: #FFF;
    z-index: 11 !important;
    color: black;
}
.dialog div {
     padding: 20px 10px;
    font-size: 15px;
    cursor: pointer;
    transition: all 0.2s;
    position: absolute;
    left: 93px;
      width: 100%;
    height: 100%;
}




.vertical-date {
  list-style: none;
  padding: 1em;
  text-align: left;
      border-bottom: 2px solid #000;
}

.list-daynumber {
  line-height: .5em;
  font-size: 46px;
  font-weight: 800;
  opacity: 0.9;
}

.list-monthname {
  font-size: 32px;
  opacity: 0.6;
  border-bottom: 5px solid #FF4D55;
 width: 59px;
}

.duration {
      display: block;
    color: #908383;
    font-weight: 600;
    margin-top: 0.8em;
}


 .s_title {
 color: #ed8392;
    font-size: 1.3em;
    margin: -13px 34px;
    position: absolute;
    font-weight: 900;
}


.s_des{
font-size: 16px;
  font-style: italic;
}
body {
  margin: 0;
  font-family: "Source Sans Pro",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff;
}
.fc-left h2 {
  color: #000;
}
.fc-event, .fc-event:hover, .ui-widget .fc-event {
  color: #000!important;
  text-decoration: none;
}
#simplemodal {
  margin-left: 135px;
}
#calendar-popup {
  top: 50%;
   left: 50%!important;
   transform: translate(-50%, -50%);
}
  </style>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="assets/admin/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">


<link rel="stylesheet" href="assets/admin/dist/css/adminlte.min2167.css?v=3.2.0">
  <link rel='stylesheet' href='https://fullcalendar.io/js/fullcalendar-3.1.0/fullcalendar.min.css' />
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

<?php 
include "left_sidebar.php"; 
include "navigation.php"; 
?>

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1><?php echo $page_heading; ?></h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
<li class="breadcrumb-item active"><?php echo $title; ?></li>
</ol>
</div>
</div>
</div>
</section>
<section style="margin-left:275px;">
  <div>
    <h4><strong>Hairdresser:</strong> Linda Dube</h4>
  </div>
</section>
<div class="site-header autocomplete">
  <!-- <div class="input-wrapper">
    <input type="text" placeholder="Search" class="search-field">
      <span class="close">Cancel</span>

    <div class="focus-background"></div>
  </div> -->
   <div class="dialog">   
  </div>
  
</div>
<section class="content">
<div id='calendar'></div>
  
</section>
 <style type="text/css">
     footer {
            background-color: #000;
            width: 100%;
            bottom: 0;
            position: fixed;
            left: 250px;
            z-index: 999;
        }
 </style>
  <footer style="color: #fff; padding: 15px;">
    <strong style="color: #fff;">Copyright &copy; 2023 <a href="javascript:void(0);" style="color:#faef00;">Rooom Mobile Salon</a>.</strong>
All rights reserved. System Designed & Developed By <a href="https://bblack.co.za/" target="_blank" style="color:#faef00;">BrightBlack</a>

    </footer>

<div id="calendar-popup">
 
  <form id="event-form">
     <div class='calander_popip_title'><i class="fa fa-calendar" aria-hidden="true"></i>
Add Booking </div>
    <ul>
      <li>
        <label for="event-start"><i class="fa fa-bell-o" aria-hidden="true"></i>

From</label>
        <input id="event-start"  class='form-control' type="datetime-local" name="start"/>
      </li>
      <li>
        <label for="event-end"><i class="fa fa-bell-slash" aria-hidden="true"></i>

To</label>
        <input id="event-end"  class='form-control' type="datetime-local" name="end"/>
      </li>
      <li>
        <label for="event-title"><i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
Hairstyle</label>
        <input id="event-title"  class='form-control' type="text" name="title"/>
      </li>
      <li>
        <label for="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i>
Location</label>
        <input id="event-location"   class='form-control' type="text" name="location"/>
      </li>
      <li>
        <label for="event-details"><i class="fa fa-info-circle" aria-hidden="true"></i>
Description</label>
        <textarea id="event-details"  class='form-control' name="details"></textarea>
      </li>
      <div class="button">
        <input type="submit"  class='form-control submit_btn'/>
      </div>
    </ul>
  </form>
  
  <div id="event">
    <header></header>
    <ul>
    <li class="start-time"> 
      <p>
  Start at</p>
        <time></time>
      </li>
       <li class="end-time">
      <p>
 End</p>
        <time></time>
      </li>
      <li>
        <p>
          <i class="fa fa-map-marker" aria-hidden="true"></i>Location</p>
<p class="location"></p>
      </li>
      <li>
        <p><i class="fa fa-info" aria-hidden="true"></i>
Details:</p>
        <p class="details"></p>
      </li>
    </ul>
   
  </div>

  <div class="prong">
    <div class="bottom-prong-dk"></div>
    <div class="bottom-prong-lt"></div>
  </div>
</div>


<div class='modle' id='simplemodal'>
  <div class='modle-continer'>
      <form id="edit-form">

    <div class='modal-header'>
        <span class='close-btn' id='close-btnid'>&times</span>
      <h2>Edit Booking</h2>
    </div>
   <div class='modal-body'>
  
     <lable for='eventname'>Add Booking</lable>
     <input type='text' name='eventname' id='eventname' class='form-control'>
     <lable for='location'>Location</lable>
     <input type='text' name='location' id='location' class='form-control'>
     
     <label for="event-start">From</label><input id="eventstart" type="datetime-local" name="start" class='form-control'/>
     
     <label for="event-end">To</label>
        <input id="eventend" type="datetime-local" name="end" class='form-control'/>
      <label for="event-details">Details</label>
     <textarea id="eventdetails" type='text' name="details"  class='form-control'></textarea>
    
    </div>
    <div class='modal-footer'>
      <button type='submit' class='btn btn-info'>save</button>
      <button class='btn btn-dafault'>cancel</button>
      
    </div>
    </form>
  </div>
  
</div>

<!-- <div id='search_result'>result</div> -->

<!-- <button class='btn btn-primary' style="">Add Events</button> -->
</body>
<script src="assets/admin/plugins/jquery/jquery.min.js"></script>
<script src='https://fullcalendar.io/js/fullcalendar-3.1.0/lib/moment.min.js'></script>
<script src='https://fullcalendar.io/js/fullcalendar-3.1.0/lib/jquery.min.js'></script>
<script src='https://fullcalendar.io/js/fullcalendar-3.1.0/lib/jquery-ui.min.js'></script>
<script src='https://fullcalendar.io/js/fullcalendar-3.1.0/fullcalendar.min.js'></script>
<script type="text/javascript">
  var events = []
events=parselocalstorage('events')
var renderPopup = function (jsEvent, start, end, calEvent) {
  var $popup = $('#calendar-popup');
  var $eventForm = $('#event-form');
  $event = $('#event');
  var $selectedElmt = $(jsEvent.target);

  var relativeStartDay = start.calendar(null, { lastDay: '[yesterday]', sameDay: '[today]'});
  var endNextDay = '';

  if(relativeStartDay === 'yesterday') {
    endNextDay = '[Today at] ';
  }
  else if(relativeStartDay === 'today') {
    endNextDay = '[Tomorrow at] ';
  }
  else {
    endNextDay = 'dddd ';
  }

  $('.start-time').html(
    ' <p><i class="fa fa-play" aria-hidden="true"></i>' + (start.isSameOrBefore(moment()) ? 'Started' : 'Starts') + '</p>'
      + '<time datetime="' + start.format() + '">'
      + start.calendar(null, {
        lastWeek: 'L LT',
        nextWeek: 'dddd LT',
        sameElse: 'L LT'
      })
      + '</time>'
  );
  $('.end-time').html(
    '<p><i class="fa fa-stop" aria-hidden="true"></i> '
      + (end.isSameOrBefore(moment()) ? 'Ended' : 'Ends')
      + (end.isSame(start, 'day') ? ' at' : '')
      + '</p>'
      + '<time datetime="' + end.format() + '">'
      + end.calendar(start, {
        sameDay: 'LT',
        nextDay: endNextDay + 'LT',
        nextWeek: 'dddd LT',
        sameElse: 'L LT'
      })
      + '</time>'
  );

  if(calEvent) {
   $eventForm.hide();

    $event.children('header').html(`<i class="fa fa-calendar-o"></i>`+calEvent.title);
    $event.find('.location').text(calEvent.location ? calEvent.location : '(No location information.)');
    $event.find('.details').text(calEvent.details ? calEvent.details : '');

    $event.show();
  }
  else {
    $event.hide();
    $('#event-start').val(start.format('YYYY-MM-DD[T]HH:mm'));
    $('#event-end').val(end.format('YYYY-MM-DD[T]HH:mm'));
    $eventForm.show();
  }

  var leftPosition = 0;
  var $prong = $('.prong');
  var prongPos = 0;

  if($selectedElmt.hasClass('fc-highlight')) {
    leftPosition = $selectedElmt.offset().left - $popup.width() + ($selectedElmt.width() / 2);
    if(leftPosition <= 0) {
      leftPosition = 5;
      prongPos = $popup.width() - $selectedElmt.offset().left - 30
    }
    else {
      prongPos = 15;
    }

    $popup.css('left', leftPosition);
    $prong.css({
      'left': '',
      'right': prongPos,
      'float': 'right'
    });
  }
  else {
    leftPosition = jsEvent.originalEvent.pageX - $popup.width()/2;
    if(leftPosition <= 0) {
      leftPosition = 5;
    }
    prongPos = jsEvent.originalEvent.pageX - leftPosition - ($prong.width() * 1.7);

    $popup.css('left', leftPosition);
    $prong.css({
      'left': prongPos,
      'float': 'none',
      'right': ''
    });
  }

  var topPosition = (calEvent ? jsEvent.originalEvent.pageY : $selectedElmt.offset().top) - $popup.height() - 15;

  if((topPosition <= window.pageYOffset)
    && !((topPosition + $popup.height()) > window.innerHeight)) {
      $popup.css('top', jsEvent.originalEvent.pageY + 15);
      $prong.css('top', -($popup.height() + 12))
        .children('div:first-child').removeClass('bottom-prong-dk').addClass('top-prong-dk')
        .next().removeClass('bottom-prong-lt').addClass('top-prong-lt');
  }
  else {
    $popup.css('top', topPosition);
    $prong.css({'top': 0, 'bottom': 0})
      .children('div:first-child').removeClass('top-prong-dk').addClass('bottom-prong-dk')
      .next().removeClass('top-prong-lt').addClass('bottom-prong-lt');
  }

  $popup.show();
  $popup.find('input[type="text"]:first').focus();
}

$(document).ready(function() {
  $('#calendar').fullCalendar({
    header: {
    left: 'title',
      right: 'prev,next today'
    },
    timezone: 'local',
    defaultView: 'month',
    allDayDefault: false,
    allDaySlot: false,
    slotEventOverlap: true,
    slotDuration: "01:00:00",
    slotLabelInterval: "01:00:00",
    snapDuration: "00:15:00",
    contentHeight: 700,
    scrollTime :  "8:00:00",
    axisFormat: 'h:mm a',
    timeFormat: 'h:mm A()',
    selectable: true,
    events: function(start, end, timezone, callback) {
      let arr = parselocalstorage('events')  
      callback(arr);
    },
    eventColor: '#f9ee00',
    eventClick: function (calEvent, jsEvent) {
      
      renderPopup(jsEvent, calEvent.start, calEvent.end, calEvent);

      
    },
    eventRender: function(event, element) {
            element.append( `<span class='I_delete'><img src="assets/images/delete.png" alt=""></span>` );
            element.append( `<span class='I_edit'><img src="assets/images/edit.png" alt=""></span>` );
            element.find(".I_delete").click(function() {
            $('#calendar-popup').hide();
            if(confirm('are you sure want to delete this booking?')) {
             $('#calendar').fullCalendar('removeEvents',event._id);
            var index=events.map(function(x){ return x.id; }).indexOf(event.id);
            events.splice(index,1);
            localStorage.setItem('events', JSON.stringify(events));
           
            events=parselocalstorage('events')   

       }
            });
        element.find(".I_edit").click(function() {
            $('#calendar-popup').hide();

          $('#eventname').val(event.title)
          $('#location').val(event.location)
          $('#eventdetails').val(event.details)
          $('input#eventstart').val(event.start._i)
           $('input#eventend').val(event.end._i)
          $('#simplemodal').show();
         
          
          //update events
          var that=event;
           $('#edit-form').on('submit', function(e) {
           e.preventDefault();
           $form = $(e.currentTarget);

         $title = $form.find('input#eventname');
         $location = $form.find('input#location');
         $details = $form.find('textarea#eventdetails');
             $start= $form.find('input#eventstart');
             $end= $form.find('input#eventend');
            //update value
             that.title=$title.val();
              that.location=$location.val();
             that.details=$details.val();
                that.start=$start.val();               
               that.end=$end.val();
            
            $('#calendar').fullCalendar('updateEvent', that);
             console.log('after update',events)
              $('#simplemodal').hide();
              $('#calendar-popup').hide();
           });
           $('#calendar').fullCalendar('updateEvent', event);
         
         // 
           //     localStorage.setItem('events', JSON.stringify(events));
            });
      
      $('#close-btnid').click(function(){
                  $('#simplemodal').hide();
      })
    
      var modal=document.getElementById('simplemodal')

     window.addEventListener('click',clickOutside)
      function clickOutside(e){
      if(e.target==modal){
        modal.style.display='none';

        }
        }
        }
    ,
    select: function(start, end, jsEvent) {
        $('.btn-primary').css('opacity',1)
          $('.btn-primary').click(function(){
        renderPopup(jsEvent, start.local(), end.local());
      }) 
      renderPopup(jsEvent, start.local(), end.local());
    
    }
  });

  $('#event-form').on('submit', function(e) {
    e.preventDefault();

    $form = $(e.currentTarget);

    $title = $form.find('input#event-title');
    $location = $form.find('input#event-location');
    $details = $form.find('textarea#event-details');
 $ID = '_' + Math.random().toString(36).substr(2, 9)
    events.push({
      id:$ID,
      title: $title.val(),
      start: $form.find('input#event-start').val(),
      end: $form.find('input#event-end').val(),
      location: $location.val(),
      details: $details.val()
    });

    $title.val('');
    $location.val('');
    $details.val('');

    $form.parent().blur().hide();
   localStorage.setItem('events', JSON.stringify(events));
    $('#calendar').fullCalendar('refetchEvents');

  });

  

  //Set hide action for ESC key event
  $('#calendar-popup').on('keydown', function(e) {
    $this = $(this);
    console.log($this);
    if($this.is(':visible') && e.which === 27) {
      $this.blur();
    }
  })
  //Set hide action for lost focus event
  .on('focusout', function(e) {
    $this = $(this);
    if($this.is(':visible') && !$(e.relatedTarget).is('#calendar-popup, #calendar-popup *')) {
      $this.hide();
    }
  });
});

/*** TESTING/DEMO ***/
var date = new Date();
var today = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();
today = today < 10 ? '0' + today.toString() : today;
var tomorrow = today + 1 < 10 ? '0' + (today + 1).toString() : today + 1; //today not last day
var yesterday = today - 1 < 10 ? '0' + (today - 1).toString() : today - 1; //today not first day
      localStorage.clear()

var str=  localStorage.getItem('events');
      var obj=JSON.parse(str)||[]
      let arr = Object.keys(obj).map((k) => obj[k])
      console.log('what is in aarrr1',events)
if(events.length===0){
  events.push(
  {id:1,title: 'Twists - JHB', start: year + '-' + month + '-' + today + 'T07:00', end: year + '-' + month + '-' + today + 'T10:00', location: 'The Moon', details: 'There will be cheese'},
  {id:2,title: 'Locs - PTA', start: year + '-' + month + '-' + tomorrow + 'T03:00', end: year + '-' + month + '-' + tomorrow + 'T08:00', location: 'The Moon', details: 'There will be cheese'},
  {id:3,title: 'Locs - JHB', start: year + '-' + month + '-' + yesterday + 'T20:00', end: year + '-' + month + '-' + today + 'T05:00', location: 'The Moon', details: 'There will be cheese'}
);
}
/*events.push(
  {title: 'event1', start: year + '-' + month + '-' + today + 'T07:00', end: year + '-' + month + '-' + today + 'T10:00', location: 'The Moon', details: 'There will be cheese'},
  {title: 'event2', start: year + '-' + month + '-' + tomorrow + 'T03:00', end: year + '-' + month + '-' + tomorrow + 'T08:00', location: 'The Moon', details: 'There will be cheese'},
  {title: 'event3', start: year + '-' + month + '-' + yesterday + 'T20:00', end: year + '-' + month + '-' + today + 'T05:00', location: 'The Moon', details: 'There will be cheese'}
);*/

      localStorage.setItem('events', JSON.stringify(events));

/***************/





//handle search

    var alreadyFilled = false;
    function initDialog() {
        clearDialog();
        for (var i = 0; i < events.length; i++) {
    var mS1 = {"01":'Jan', "02":'Feb', "03":'Mar', "04":'Apr', "05":'May', "06":'June', "07":'July', "08":'Aug', "09":'Sept', "10":'Oct', "11":'Nov', "12":'Dec'};

            $('.dialog').append('<div><span class="s_title">' + events[i].title +`</span><br><span class='s_des'>"` +events[i].details+
                                  
                                 `</span> <span class='duration'>`+events[i].start+`</span>`
                                    
                                + `</div>
   <ul class="vertical-date">
            <li class="list-daynumber">`+events[i].start.slice(8,10)+`</li>
            <li class="list-monthname">`+mS1[events[i].start.slice(5,7)]+`</li>
          </ul>

`);

        }
    }
    function clearDialog() {
        $('.dialog').empty();
    }
    $('.autocomplete input').click(function() {
        if (!alreadyFilled) {
            $('.dialog').addClass('open');
        }

    });
    $('body').on('click', '.dialog > div', function() {
        $('.autocomplete input').val($(this).find('.s_title').text()).focus();
        $('.autocomplete .close').addClass('visible');
        alreadyFilled = true;
    });
    $('.autocomplete .close').click(function() {
        alreadyFilled = false;
        $('.dialog').addClass('open');
        $('.autocomplete input').val('').focus();
        $(this).removeClass('visible');
    });

    function match(str) {
        str = str.toLowerCase();
        clearDialog();
        for (var i = 0; i < events.length; i++) {
            if ((events[i].title).toLowerCase().startsWith(str)) {
              
    var mS2 = {"01":'Jan', "02":'Feb', "03":'Mar', "04":'Apr', "05":'May', "06":'June', "07":'July', "08":'Aug', "09":'Sept', "10":'Oct', "11":'Nov', "12":'Dec'};

                $('.dialog').append('<div><span class="s_title">' + events[i].title+`</span><br><span class='s_des'>` +events[i].details
                                    +
                                 ` </span><span class='duration'>`+events[i].start+`</span>`
                                    +
                                    `</div>
   <ul class="vertical-date">
            <li class="list-daynumber">`+events[i].start.slice(8,10)+`</li>
            <li class="list-monthname">`+mS2[events[i].start.slice(5,7)]+`</li>
          </ul>
`);
        
            }
        }
    }
    $('.autocomplete input').on('input', function() {
        $('.dialog').addClass('open');
        alreadyFilled = false;
        match($(this).val());
    });
    $('body').click(function(e) {
        if (!$(e.target).is("input, .close")) {
            $('.dialog').removeClass('open');
        }
    });
    initDialog();


    function parselocalstorage(name){
      var str= localStorage.getItem(name);
      var obj=JSON.parse(str)||[]
      let arr = Object.keys(obj).map((k) => obj[k])||[]
      return arr
    }
</script>
</html>