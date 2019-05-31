<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
var baseapiurl = 'http://directory.studioabroad.com/api/index.cfm';
var postdataurl = baseapiurl + "?callname=getProgramSearchElements&city=yes&country=yes&terms=yes&region=yes&ResponseEncoding=json";

$.getJSON(postdataurl,

//RETURNED RESPONSE DATA IS LOOPED AND ONLY IMAGE IS APPENDED TO IMAGE DIV
function(data) {
  $.each(data.items, function(i,item){
  $("<img/>").attr("src", item.media.m).appendTo("#images");

 });
});

</script>
<select name="pt" id="pt"></select>
