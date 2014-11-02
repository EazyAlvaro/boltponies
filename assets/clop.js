//(function(cfg) {
//    BrowserPonies.setBaseUrl(cfg.baseurl);
//    BrowserPonies.loadConfig(BrowserPoniesBaseConfig);
//    BrowserPonies.loadConfig(cfg);
//})({"baseurl": "https://panzi.github.io/Browser-Ponies/", "fadeDuration": 500, "volume": 1, "fps": 25, "speed": 3, "audioEnabled": false, "showFps": false, "showLoadProgress": true, "speakProbability": 0.1, "spawn": {"applejack": 1, "fluttershy": 1, "pinkie pie": 1, "rainbow dash": 1, "rarity": 1, "twilight sparkle": 1}, "autostart": true});

function toggleBrowserPoniesToBackground () {
	var main = document.getElementById('main');
	if (main.style.zIndex === '') {
		main.style.zIndex = '100000000';
	}
	else {
		main.style.zIndex = '';
	}
}