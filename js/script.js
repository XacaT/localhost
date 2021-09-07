"use strict";
window.onload = function () {
   const appId = `f7673770223d262ad39a3aac2bf5b0d0`

    let data =  new XHR();
        data.get("/js/data.json",(items) => {

          items.forEach((item, i) => {
            let elem= Dom.ce("div", item.name, null, "click", cityChange);
                document.querySelector("#city").append(elem)
          });

        })

    function cityChange() {
      let city = this.innerHTML;
      (new XHR()).get(`http://api.openweathermap.org/data/2.5/forecast?q=${city}&units=metric&lang=ru&appid=${appId}`,(forcast) => {
          let app = document.querySelector("#rez");
              app.innerHTML=``;
          forcast.list.forEach((item, i) => {
            let info = Dom.ce("div",`
              <p aling="center"><img src="http://openweathermap.org/img/wn/${item.weather[0].icon}@2x.png" /></p>
              <p>${item.dt_txt.split(" ")[0]}</p>
              <p>feels_like : ${item.main.feels_like}</p>
              <p>temp : ${item.main.temp}</p>
            `)
            app.append(info);
          });
      })
    }
}
