function eurocopa(){
				
    var cajatexto="";				
    /*var	valor1;
    var	valor2;
    var	valor3;
    var	valor4;
    var	valor5;
    var	valor6;*/
    
    
    
    for(var i=1;i<=6;i++){	
        cajatexto = document.getElementById('resultado'+i);					
        if (parseInt(cajatexto.value) >= 0 && parseInt(cajatexto.value) <= 20){						
        }else {cajatexto.value=""};
                    
    }
    
        
    
    if(document.getElementById("resultado1").value > document.getElementById("resultado2").value){
        document.getElementById('fina4').value="Italia";
        document.getElementById('b4').src="img/ITA.png";
        document.getElementById('fina1').value="España";
        document.getElementById('b1').src="img/ESP.png";
    }else{
        document.getElementById('fina4').value="España";
        document.getElementById('b4').src="img/ESP.png";
        document.getElementById('fina1').value="Italia";
        document.getElementById('b1').src="img/ITA.png";
    }

    if(document.getElementById("resultado3").value > document.getElementById("resultado4").value){
        document.getElementById('fina2').value="Dinamarca";
        document.getElementById('b2').src="img/DEN.png";
        document.getElementById('fina3').value="Inglaterra";
        document.getElementById('b3').src="img/ENG.png";
    }else{
        document.getElementById('fina2').value="Inglaterra";
        document.getElementById('b2').src="img/ENG.png";
        document.getElementById('fina3').value="Dinamarca";
        document.getElementById('b3').src="img/DEN.png";
    }

    
    
    
    if(document.getElementById("resultado5").value > document.getElementById("resultado6").value){
        document.getElementById('campeon').value=document.getElementById("fina1").value;
        document.getElementById('t1').src=document.getElementById('b1').src;
        document.getElementById('t2').src=document.getElementById('b2').src;
        document.getElementById('subcampeon').value=document.getElementById("fina2").value;
    }else{
        document.getElementById('campeon').value=document.getElementById("fina2").value;
        document.getElementById('t2').src=document.getElementById('b2').src;
        document.getElementById('t1').src=document.getElementById('b1').src;
        document.getElementById('subcampeon').value=document.getElementById("fina1").value;
    
    }
    
    if(document.getElementById("resultado7").value > document.getElementById("resultado8").value){
        document.getElementById('3puesto').value=document.getElementById("fina3").value;
        document.getElementById('t3').src=document.getElementById('b3').src;
        document.getElementById('t4').src=document.getElementById('b4').src;
        document.getElementById('4puesto').value=document.getElementById("fina4").value;
    }else{
        document.getElementById('4puesto').value=document.getElementById("fina4").value;
        document.getElementById('t4').src=document.getElementById('b4').src;
        document.getElementById('t3').src=document.getElementById('b3').src;
        document.getElementById('3puesto').value=document.getElementById("fina3").value;
    
    }
}   