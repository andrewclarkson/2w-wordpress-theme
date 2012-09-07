var fb = $('#fb-root');

//Only load FB Javascript SDK if the fb-root element is present
if (fb && fb.parentNode) {
  //Add an event listener to a like
  FB.Event.subscribe('edge.create',
    function (url) {
        _gaq.push(['_trackEvent', 'Social', 'Like', url]);
      }
  );
  //Add an event listener to an unlike
  FB.Event.subscribe('edge.remove',
      function (url) {
          _gaq.push(['_trackEvent', 'Social', 'Unlike', url]);
      }
  );
  //Add an event listener to a comment
  FB.Event.subscribe('comment.create',
      function (url) {
          _gaq.push(['_trackEvent', 'Blog', 'Comment', url]);
      }
  );
}

var gPlus = $('.g-plusone');

//Only load Google+ Javascript if g-plusone element exists
if (gPlus && gPlus.parentNode) {
  //Load Google+ Javascript
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
  
  //Callback when +1 button is clicked
  var gPlusClick = function (info) {
  
    //The Url that was +1'd
    var url = info.href;
    if (info.state === "on") {
      //Means they were +1
      _gaq.push(['_trackEvent', 'Social', '+1', url]);
    } else if (info.state === "off") {
      //Means they were removing +1
      _gaq.push(['_trackEvent', 'Social', 'Remove +1', url]);
    }
  };
}