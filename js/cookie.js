(function () {
	class Cookie {
		constructor() {
			this.values = {

			}
		}

		getCookie(name) {
			let matches = document.cookie.match(new RegExp(
			    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
			  ));

				return matches ? decodeURIComponent(matches[1]) : undefined;

		}

		setCookie(name, value, options = {}) {

		  options = {
		    path: '/',
		    // при необходимости добавьте другие значения по умолчанию
		    ...options
		  };

		  if (options.expires instanceof Date) {
		    options.expires = options.expires.toUTCString();
		  }

		  let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

		  for (let optionKey in options) {
		    updatedCookie += "; " + optionKey;
		    let optionValue = options[optionKey];
		    if (optionValue !== true) {
		      updatedCookie += "=" + optionValue;
		    }
		  }

		  document.cookie = updatedCookie;
			this.values[name]=value;
		}

		removeCookie(name) {
			this.setCookie(name, "", {
				'max-age': -1
			})
			delete this.values[name]
		}

		toString() {
			let str="";
			for (var key in this.values) {
				str +=`${key} -  ${this.values[key]} \n`
			}
			return str;
		}

		build(){
			let arr = document.cookie.split("; ");
			for (var i = 0; i < arr.length; i++) {
				let data = arr[i].split("=");
				this.values[data[0]]=data[1];
			}

			return this;
		}

	}



	window.Cookie = Cookie;
	//window.Cookie = (new Cookie()).build();
})(window)
