var url = "https://api.openweathermap.org/data/2.5/weather?appid=d139a4db7d6e7960e9fa0f646a104fb8"

var getWeather = function() {  
    var city = $("input").val()
    url += "&q=" + city + "&units=metric";
  $.getJSON(url, function(data){
    
    //format the response
    var html = ""
    html += "<h2>Weather in " + data.name+"</h2>"
    html += "<p>Temperature "+data.main.temp+"</p>"
    html += "<p>pressure "+data.main.pressure+"</p>"
    html += "<h3>humidity "+data.main.temp_max+"</h3>"

    html += "<p>"+data.weather[0].description+"<img src='https://openweathermap.org/img/w/"+data.weather[0].icon+".png'/>"+"</p>"
    $("#weather_conditions").html(html);
  })
}
