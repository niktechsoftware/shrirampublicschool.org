$(window).load(function() {
			//$("#gallery img:not(:first)").css('display','none');
			$("#bagallery img").each(function() {
				if ($(this).get(0).complete) {
					$(this).unbind("load");
				} else {
					$(this).load();
				}
				$(this).css('display','block');
			});
			$('#bagallery').nivoSlider({
				effect: 'boxRain', // Specify sets like: 'fold,fade,sliceDown,boxRain'
				slices: 15, // For slice animations
				boxCols: 8, // For box animations
				boxRows: 4, // For box animations
				animSpeed: 3000, // Slide transition speed
				pauseTime: 2000, // How long each slide will show
				startSlide: 0, // Set starting Slide (0 index)
				directionNav: false, // Next &amp; Prev navigation
				directionNavHide: false, // Only show on hover
				controlNav: false, // 1,2,3... navigation
				controlNavThumbs: false, // Use thumbnails for Control Nav
				controlNavThumbsFromRel: false, // Use image rel for thumbs
				controlNavThumbsSearch: '.jpg', // Replace this with...
				controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
				keyboardNav: false, // Use left &amp; right arrows
				pauseOnHover: true, // Stop animation while hovering
				manualAdvance: false, // Force manual transitions
				captionOpacity: 0.9, // Universal caption opacity
				prevText: 'Prev', // Prev directionNav text
				nextText: 'Next', // Next directionNav text
				randomStart: false, // Start on a random slide
				beforeChange: function(){}, // Triggers before a slide transition
				afterChange: function(){}, // Triggers after a slide transition
				slideshowEnd: function(){}, // Triggers after all slides have been shown
				lastSlide: function(){}, // Triggers when last slide is shown
				afterLoad: function(){} // Triggers when slider has loaded
			});		
		});