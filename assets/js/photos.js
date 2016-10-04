var gallery;

// year = '2012', place = location, num = number of photos
function displayPhotos(year, place, num)
{
	galaryOn();
	var pswpElement = document.querySelectorAll('.pswp')[0];
	
	// build items array
	var items = [];
	
	for (var i = 1; i <= num; i++)
	{
		var name = String("0000" + i).slice(-4);
		items.push({src: 'photos/' + year + place + '/' + name + '.jpg', w: 0, h: 0});
	}

	// define options (if needed)
	var options = {
		// optionName: 'option value'
		// for example:
		index: 0 // start at first slide
	};

	// Initializes and opens PhotoSwipe
	gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
	gallery.init();
	
	gallery.listen('close', function() {
		galaryOff();
	});

	gallery.listen('gettingData', function(index, item)
	{
		if (item.html === undefined && item.onloading === undefined && (item.w < 1 || item.h < 1))
		{
			item.onloading = true;
			var img = new Image();
			
			img.onload = function()
			{
				item.w = this.width;
				item.h = this.height;
				gallery.invalidateCurrItems();
				gallery.updateSize(true);
			}
			img.src = item.src; // let's download image
		}
	});
}

function galaryOn()
{
	var pswpElement = document.querySelectorAll('.pswp')[0];
	pswpElement.style.display = "";
}

function galaryOff()
{
	var pswpElement = document.querySelectorAll('.pswp')[0];
	pswpElement.style.display = "none";
}
