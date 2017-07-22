$("#hide").click(function(){
    $("#formorder").hide('blind');
    $("#hide").hide();
    $("#show").show();
});

$("#show").click(function(){
    $("#formorder").show('blind');
    $("#formorder1").hide('blind');
    $("#formorder2").hide('blind');    
    $("#show").hide();
    $("#hide").show();
    $("#show1").show();
    $("#hide1").hide();
    $("#show2").show();
    $("#hide2").hide();
});