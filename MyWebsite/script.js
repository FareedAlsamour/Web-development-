var getWeather = function(city, country) {
  
  console.log(city, country)
  
  var API_URL = "https://api.openweathermap.org/data/2.5/weather?appid=d139a4db7d6e7960e9fa0f646a104fb8&units=metric"
  
  API_URL += "&q="+city+","+['nl']

  $.getJSON(API_URL, function(data){
    //format the response
    var html = ""
    html += "<h2>Weather in " + data.name+"</h2>"
    html += "<p>Temperature "+Math.round(data.main.temp)+"</p>"
    html += "<p>"+data.weather[0].description+"<img src='https://openweathermap.org/img/w/"+data.weather[0].icon+".png'/>"+"</p>"
    html += "<p>💧"+data.main.humidity+"%</p>"
    $("#weather_conditions").html(html);
  })
}

var giphy = function() {  
  $( "#gip" ).fadeOut( "fast" );
$.ajax({
  url: 'http://api.giphy.com/v1/gifs/search',
  method: 'GET',
  cotentType: 'application/json; charset=UTF-8',
  data: {
    q:'css', //asdfasd
    limit: 1, //asdfasd
    api_key: 'dc6zaTOxFJmzC'
  },
success: handleResults //asdfasddf
});
function handleResults(response_body) {
  response_body.data.forEach(function(item) {
    var url = item.images.fixed_height_downsampled.url;
    var image = $(document.createElement('img'));
    image.attr('src', url)
    image.appendTo('#photo')
  }) 
}
}
  