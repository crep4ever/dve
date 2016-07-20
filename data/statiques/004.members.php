<!-- calendar -->
<script type='text/javascript'>

$(document).ready(function() {
    $('#calendar').fullCalendar({
        googleCalendarApiKey: 'AIzaSyB0crUNeUUux1wteoUhrkgLXzc-CdoWwOU',
        events: {
            googleCalendarId: 'caf.fontaine@gmail.com'
        }
    });
});

</script>

<script>
function displayMailingList() {
  var results = ["", "pl@dve.club", "rpl@dve.club", "rplaf@dve.club"];
  var e = document.getElementById("mailing-lists");
  document.getElementById("email").innerHTML = results[e.options[e.selectedIndex].value];
}
$("select#mailing-lists").change();
</script>

<div class="grid">
  <div class ="col sml-3">
    <h3>Listes de diffusion</h3>
    <select id="mailing-lists" onchange="displayMailingList()">
      <option value="1">Sélectionnez un groupe</option>
      <option value="1">Pratique libre -- Adhérents</option>
      <option value="2">Pratique libre -- Responsables</option>
      <option value="3">Pratique libre autonomie falaise -- Responsables</option>
    </select>

    <pre id="email" class="icon fa-envelope"  ></pre>

    <h3>Documents importants</h3>
    <ul>
      <li class="button icon fa-download">test</li>
      <li class="button icon fa-download">test</li>
      <li class="button icon fa-download">test</li>
      <li class="button icon fa-download">test</li>
    </ul>
  </div>
  <div class ="col sml-4">
    <h3>Agenda</h3>
    <div id='calendar'></div>
  </div>
  <div class ="col sml-5">
    <h3>Discussions</h3>
  </div>

</div>
