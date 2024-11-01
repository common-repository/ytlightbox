/*
 * YTLightbox class 
 */
window.ytlightbox = {

    insert: function(o_config){
        
        if (!('videoId' in o_config)) {
            throw 'No "video" attribute founded. Please check the plugin docs.';
        }


        //check for the youtube object from the Youtube API
        if ('YT' in window && 'Player' in window.YT) {

            //if (!('onYouTubePlayerAPIReady' in window)) {
            //    this.insert();
            //}else{
                
                // #################
                var containerElement = document.getElementById(o_config.container);
                var playerContainer = document.createElement('div');
                containerElement.appendChild(playerContainer);
                
                var playerOptions = o_config.playerOptions || {};

                return new YT.Player(playerContainer, {
                    
                    height: playerOptions.height ||
                    width * PLAYER_HEIGHT_TO_WIDTH_RATIO + YOUTUBE_CONTROLS_HEIGHT,
                    width: playerOptions.width || width,

                    // Unless playerVars are explicitly provided, use a reasonable default of { autohide: 1 },
                    // which hides the controls when the mouse isn't over the player.
                    playerVars: playerOptions.playerVars || { autohide: 1 },
                    videoId: o_config.videoId,
                    events: {
                        onReady: playerOptions.onReady,
                        onStateChange: playerOptions.onStateChange,
                        onPlaybackQualityChange: playerOptions.onPlaybackQualityChange,
                        onError: playerOptions.onError
                    }
                });
                // #################
                
            //}
                
            
        }else{

            // the YOUTUBE API object wasn't founded, then reload
            var scriptTag = document.createElement('script');
            // This scheme-relative URL will use HTTPS if the host page is accessed via HTTPS,
            // and HTTP otherwise.
            scriptTag.src = '//www.youtube.com/player_api';
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(scriptTag, firstScriptTag);
            console.log("No youtube API founded, re-loading...");
            this.insert();
            return;
            
        }

        





        
    }


}
