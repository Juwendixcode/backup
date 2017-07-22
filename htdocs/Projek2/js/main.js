$(document).ready(function(){
		$(".menu-foto").click(function(){
			$(this).find('.submenu').fadeToggle("fast");
		});
		$(".comm").click(function(){
			$(this).parentsUntil("caption").next('.komenn').slideToggle("slow");
				
		});
			
	});
$(document).ready(function(){
		$('.hamburger-menu').on( 'click',function(){	
			 
	if( $('.sidebar').is(':visible') ) {
        $('.sidebar > ').hide();
        $('.sidebar').animate({ 'width': '0px' }, 'slow', function(){
            $('.sidebar').hide();
        });
        $('.container').animate({ 'margin-left': '13%'}, 'slow');
        $('.user').animate({ 'left': '14%'}, 'slow');
        $('.frame').animate({'margin-left':'200px'},'slow');
        $('.status').animate({'margin-left':'150px'},'slow');
        $('.top').animate({ 'margin-left': '9%', 'width': '80%'}, 'slow');
        $('.container2').animate({ 'margin-left': '0px','width':'100%','padding-right':'250px','padding-left':'350px' }, 'slow');
        $('.hamburger-menu img').animate({ 'left': '0px' }, 'slow');
        $('.editprofil').animate({'margin-left':'500px'},'slow');
        
   	 }
    else {
        $('.sidebar').show();
        $('.sidebar').animate({ 'width': '20%' }, 'slow',function(){ $('.sidebar >').show();});
        $('.sidebar > img').animate({ 'margin-left': '50px' }, 'slow');
        $('.frame').animate({'margin-left':'150px'},'slow');
        $('.status').animate({'margin-left':'100px'},'slow');
        $('.container2').animate({ 'margin-left': '20%','width':'80%','padding-left':'160px','padding-right':'150px'}, 'slow');
        $('.hamburger-menu img').animate({ 'left': '220px' }, 'slow');
        $('.user').animate({ 'left': '26%'}, 'slow');
        $('.top').animate({ 'margin-left': '22%','width': '70%'}, 'slow');
        $('.container').animate({ 'margin-left': '23%'}, 'slow');
    }

	});
	
	$('.report').on( 'click',function(){		
	 var i = $(this).next(".hiddenid").val();
	 var f = $(this).next(".hiddenid").next(".hiddenname").val();
	 $(".ckck").val(i);
	 $(".wkwk").val(f);
     $('.report-luar').fadeIn("slow");
	});
	$('#closes').on( 'click',function(){		
     $('.report-luar').fadeOut("slow");
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


