$(document).ready(function(){
		$(".menu-foto").click(function(){
			$(this).next('.submenu').fadeToggle("fast");
		});

		$(".img").mouseover(function(){
			$(this).find('.modal-menu').fadeIn("slow");
		});
		$(".img").mouseleave(function(){
			$(this).find('.modal-menu').fadeOut("slow");
		});
		
		$('.view').click(function(){
			 var i = $(this).closest(".cek").find(".gambar2").attr("src");
			 $('.gambar').attr("src",i);
			$('.luar').fadeIn("slow");
		});
		
		$(".close").click(function(){
			$('.luar').fadeOut("fast");	
		});
		$(".gambar").mouseover(function(){
			$('this').css("scale","20");	
		});
	});
	
	
$(document).ready(function(){
		$('.hamburger-menu').on( 'click',function(){	
			 
	if( $('.sidebar').is(':visible') ) {
        $('.sidebar > ').hide();
        $('.sidebar').animate({ 'width': '0px' }, 'slow', function(){
            $('.sidebar').hide();
        });
        
        $('.container2').animate({ 'margin-left': '0px','width':'100%' }, 'slow');
        $('.hamburger-menu img').animate({ 'left': '10px' }, 'slow');
   	 }
    else {
        $('.sidebar').show();
        $('.sidebar').animate({ 'width': '20%' }, 'slow',function(){ $('.sidebar >').show();}   );
        $('.sidebar > img').animate({ 'margin-left': '70px' }, 'slow');
        $('.container2').animate({ 'margin-left': '20%','width':'80%' }, 'slow');
        $('photo-container').animate({'margin-left ':'20px'},'slow');
        $('.hamburger-menu img').animate({ 'left': '230px' }, 'slow');
    }

	});
			
	});

$(document).ready(function(){
var modal = document.getElementById('zoomin');

var span = document.getElementsByClassName("close")[0];

span.onclick = function() { 
    modal.style.display = "none";
}

var images = document.getElementsByTagName('img');
var modalImg = document.getElementById("imgz");
var captionText = document.getElementById("caption2");
var i;
for (i = 0; i < images.length; i++) {
   images[i].onclick = function(){
       modal.style.display = "block";
       modalImg.src = this.src;
       modalImg.alt = this.alt;
       captionText.innerHTML = this.nextElementSibling.innerHTML;
   }
};
});


