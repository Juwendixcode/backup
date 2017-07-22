$(document).ready(function(){
		$('#menu').onclick(function(){
			if( $('.submenu').is(':hidden') ) {
            $('.submenu').show();
            $('.submenu').animate({'bottom': '20%'},'slow');
            $('.submenu2').show();
            $('.submenu2').animate({'bottom': '27%'},'slow');
            $('.submenu3').show();
            $('.submenu3').animate({'bottom': '34%'},'slow');
            }else{
            $('.submenu').hide();
            $('.submenu').animate({'bottom': '10%'},'slow');
            $('.submenu2').hide();
            $('.submenu2').animate({'bottom': '10%'},'slow');
            $('.submenu3').hide();
            $('.submenu3').animate({'bottom': '10%'},'slow');                    
                                
            }
		});					
	});