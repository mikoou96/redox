$(function() {
	

	var content = [];

	var projectIndex = -1;
	var itemIndex = -1;

	$('.project-thumb').click(function() {
		
		$('.lightbox').addClass('show');
		$('body').addClass('lightbox-fullscreen');

		projectIndex = $(this).attr('data-index');
		itemIndex = 0;

		$('.img-container').empty();
		$('.img-container').append(content[projectIndex].items[itemIndex].content);
		$('.img-caption').text(content[projectIndex].items[itemIndex].caption);
	});

	$('.lightbox-close').click(function() {
		
		$(".lightbox").removeClass('show');
		$('body').removeClass('lightbox-fullscreen');

		projectIndex = -1;
		itemIndex = -1;
	});

	$('.btn-previous').click(function() {
		if (itemIndex > 0) {
			itemIndex -= 1;

			$('.img-container').empty();
			$('.img-container').append(content[projectIndex].items[itemIndex].content);
			$('.img-caption').text(content[projectIndex].items[itemIndex].caption);
		}
	});

	$('.btn-next').click(function() {
		if (itemIndex < content[projectIndex].items.length - 1) {
			itemIndex += 1;

			$('.img-container').empty();
			$('.img-container').append(content[projectIndex].items[itemIndex].content);
			$('.img-caption').text(content[projectIndex].items[itemIndex].caption);
		}
	});

	
	$.getJSON("./assets/json/content.json", function(data) {
		content = data;
		console.log("test");
		

		for (var p = 0; p < content.length; p++) {
			var project = content[p];

			/*project.thumb = $("<img>").attr('src', project.thumb);*/

			for (var i = 0; i < project.items.length; i++) {
				var item = project.items[i];

				if (item.type == "image") {
					item.content = $("<img>").attr('src', project.itemsroot + item.content); 
				}

				if (item.type == "website") {
					item.content = $("<a>").attr('href', item.link).attr('target', '_blank').append($("<img>").attr('src', project.itemsroot + item.content)); 
				}

				if (item.type == "vimeo") {
					item.content = $('<iframe width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>')
						.attr('src', item.content);
				}

				if (item.type == "youtube") {
					item.content = $('<iframe width="560" height="315" frameborder="0" allowfullscreen></iframe>')
						.attr('src', item.content);
				}
			}
		}

		console.log(content);

		var i = 0;
		$(".project-container").each(function() {
			$(this).find('.project-thumb').attr('src', content[i].thumb);
			$(this).find('.project-caption').text(content[i].title);
			i++;
		});
	});

	

});