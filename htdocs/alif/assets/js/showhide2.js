$("#hide2").click(function(){
    $("#formorder2").hide('blind');
    $("#hide2").hide();
    $("#show2").show();
});

$("#show2").click(function(){
    $("#formorder2").show('blind');
    $("#formorder1").hide('blind');
    $("#formorder").hide('blind');    
    $("#show2").hide();
    $("#hide2").show();
    $("#show1").show();
    $("#hide1").hide();
    $("#show").show();
    $("#hide").hide();
});