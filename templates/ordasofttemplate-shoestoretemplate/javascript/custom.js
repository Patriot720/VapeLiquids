jQuery(document).ready(function () {

// ____________________________________________________________________________________________ resize display

        // var myWidth = 0;
        // myWidth = window.innerWidth;
        // jQuery('body').prepend('<div id="size" style="background:#000;padding:5px;position:fixed;z-index:999;color:#fff;">Width = '+myWidth+'</div>');
        // jQuery(window).resize(function(){
        //     var myWidth = 0;
        //     myWidth = window.innerWidth;
        //     jQuery('#size').remove();
        //     jQuery('body').prepend('<div id="size" style="background:#000;padding:5px;position:fixed;z-index:999;color:#fff;">Width = '+myWidth+'</div>');
        // });

// ____________________________________________________________________________________________ responsive menu

	var mainMenu = jQuery('.main_menu ul.menu');
  mainMenu.find('li.parent > a').append('<span class="arrow"></span>');
  mainMenu.find(' > li').last().addClass('lastChild');
// ____________________________________________________________________________________________


jQuery('.wi_txt').each(function () {
    this.innerHTML = this.innerHTML.replace( /^(.+?\s)/, '<span>Newsletter</span>' );
});

// jQuery('#circle').circleProgress({
//         value: 0.83,
//         size: 150,
//         fill: {
//             gradient: ["orange", "orange"]
//         }
//     });


  // jQuery("[class ^= circle]").circleProgress({
  //     startAngle: -1.55555555,
  //     value: 0.5,
  //     size: 150,
  //     thickness: 4,
  //     fill: {
  //           gradient: ["#fd9a04", "#fd9a04"]
  //       }
  // }).on('circle-animation-progress', function(event, progress) {
  //     jQuery(this).find('strong').html(parseInt(50 * progress) + '<i>%</i>');
  // });

  jQuery(".circle1").circleProgress({
      startAngle: -1.55555555,
      value: 0.9,
      size: 150,
      thickness: 4,
      fill: {
            gradient: ["#fd9a04", "#fd9a04"]
        }
  }).on('circle-animation-progress', function(event, progress) {
      jQuery(this).find('strong').html(parseInt(90 * progress) + '<i>%</i>');
  });

  jQuery(".circle2").circleProgress({
      startAngle: -1.55555555,
      value: 1,
      size: 150,
      thickness: 4,
      fill: {
            gradient: ["#fd9a04", "#fd9a04"]
        }
  }).on('circle-animation-progress', function(event, progress) {
      jQuery(this).find('strong').html(parseInt(100 * progress) + '<i>%</i>');
  });

  jQuery(".circle3").circleProgress({
      startAngle: -1.55555555,
      value: 0.7,
      size: 150,
      thickness: 4,
      fill: {
            gradient: ["#fd9a04", "#fd9a04"]
        }
  }).on('circle-animation-progress', function(event, progress) {
      jQuery(this).find('strong').html(parseInt(70 * progress) + '<i>%</i>');
  });

  jQuery(".circle4").circleProgress({
      startAngle: -1.55555555,
      value: 0.9,
      size: 150,
      thickness: 4,
      fill: {
            gradient: ["#fd9a04", "#fd9a04"]
        }
  }).on('circle-animation-progress', function(event, progress) {
      jQuery(this).find('strong').html(parseInt(90 * progress) + '<i>%</i>');
  });

  jQuery(".circle5").circleProgress({
      startAngle: -1.55555555,
      value: 0.8,
      size: 150,
      thickness: 4,
      fill: {
            gradient: ["#fd9a04", "#fd9a04"]
        }
  }).on('circle-animation-progress', function(event, progress) {
      jQuery(this).find('strong').html(parseInt(80 * progress) + '<i>%</i>');
  });

});