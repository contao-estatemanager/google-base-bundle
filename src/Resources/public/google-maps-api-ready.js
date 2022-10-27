/**
 * Listen to Google Callback for start building the map
 */
function onGoogleMapsApiReady (e){
    if (document.readyState !== 'complete') {
        var stateCheck = setInterval(function() {
            if (document.readyState === 'complete') {
                clearInterval(stateCheck);
                onGoogleMapsApiReady(e);
            }
        }, 100);

        return false;
    }

    var customOnReadyEvent = new CustomEvent('googlemaps.onApiReady', {detail: e});

    document.dispatchEvent(customOnReadyEvent);
}
