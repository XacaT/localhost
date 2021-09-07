(function () {
	class XHR {

		// config -> object
		constructor(config) {
				this.xhr = new XMLHttpRequest();
				this.xhr.responseType="json";
				this.xhr.timeout=30000;
		}

		get(url,callback) {
			this.xhr.open("GET",url, true);
			this.xhr.send();
			this.xhr.onload = () => {
				
				callback(this.xhr.response)
			};
		}


	}

	window.XHR = XHR;
})(window)
