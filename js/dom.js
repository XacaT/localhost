(function () {
	class Dom {
		constructor(app) {
			this.app = app
		}

		static ce(name="div",text,className,event,fn) {
	    let elem = document.createElement(name);
	        className!=undefined ?  elem.className = className : null;
	        text!=undefined ?  elem.innerHTML = text : null;
	        event!=undefined ? elem.addEventListener(event,fn) : null
	        return elem;
	  }

	}

	window.Dom = Dom;
})(window)
