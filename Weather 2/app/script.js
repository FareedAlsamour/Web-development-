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