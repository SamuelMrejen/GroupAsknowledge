$('.cabinet').mouseover(function(e){
    //si l'element aux hover corrspond a CSHS alors div hiddenClass  apparait avec nom du cab
    if($(this).text()=="CSHS")
    {
        $('.hiddenClass').css('display','block');
        $('.spanCabinet').html("CABINET DES SCIENCES HUMAINES ET SOCIALES");
    }
    else if ($(this).text()=="CSDO")
    {
        $('.hiddenClass').css({
            display:'block',
            position:'absolute',
            top:'90%'
        });        $('.spanCabinet').html("CABINET DE LA SECURITE ET DE LA DEFENSE DES ORGANISATIONS ");
    } else if ($(this).text()=="CMT")
    {
        $('.hiddenClass').css({
            display:'block',
            position:'absolute',
            top:'90%'
        });        $('.spanCabinet').html("CABINET DE LA MAITRISE DES TECHNOLOGIES ");
    }else if ($(this).text()=="CMVI")
    {
        $('.hiddenClass').css({
            display:'block',
            position:'absolute',
            top:'90%'
        });        $('.spanCabinet').html("CABINET DE LA MAITRISE DES VEHICULES INTELLIGENTS");
    }else if ($(this).text()=="CSPE")
    {
        $('.hiddenClass').css({
            display:'block',
            position:'absolute',
            top:'90%'
        });
        $('.spanCabinet').html("CABINET DE LA SECURITE DES PRATIQUES ECONOMIQUES ");
    }
    //si on sort la souris du cercle tout s'enleve
    $(this).mouseout(function(){
        $('.hiddenClass').css('display','none');

    })



});

