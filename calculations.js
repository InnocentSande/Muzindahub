//my calculation variables and it spits out in the console for now!!!!!!



var round_trip = document.getElementById("roundTrip");
var one_way = document.getElementById("OneWay");
var economy = document.getElementById("a");
var from_HB = document.getElementById("initial");
var to_BH = document.getElementById("final");
var num_of_adult = document.getElementById("adult");
var num_of_chlid = document.getElementById("child");


// Economy roundTrips


var adult_fare_HB = 50;
var adult_fare_HP = 70;
var adult_fare_HM = 150;
var adult_fare_HCZA = 40;
var adult_fare_BP = 60;
var adult_fare_BM = 150;
var adult_fare_BCZA = 50;
var adult_fare_PM = 150;
var adult_fare_PCZA = 60;
var adult_fare_MCZA = 160;

var child_f = adult_fare_HB / 2;
var child_1f = adult_fare_HP / 2;
var child_2f = adult_fare_HM / 2;
var child_3f = adult_fare_HCZA / 2;
var child_4f = adult_fare_BP / 2;
var child_5f = adult_fare_BM / 2;
var child_6f = adult_fare_BCZA / 2;
var child_7f = adult_fare_PM / 2;
var child_8f = adult_fare_PCZA / 2;
var child_9f = adult_fare_MCZA / 2;

function hb_child_fare() {
    var child_f = adult_fare_HB / 2;
    return child_f;
}

function hp_child_fare() {
    var child_1f = adult_fare_HP / 2;
    return child_f;
}

function hm_child_fare() {
    var child_2f = adult_fare_HM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_3f = adult_fare_HCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_4f = adult_fare_BP / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_5f = adult_fare_BM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_6f = adult_fare_BCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_7f = adult_fare_PM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_8f = adult_fare_PCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_9f = adult_fare_MCZA / 2;
    return child_f;
}




//Business roundTrips

var adult_bfare_HB = 60;
var adult_bfare_HP = 80;
var adult_bfare_HM = 180;
var adult_bfare_HCZA = 50;
var adult_bfare_BP = 70;
var adult_bfare_BM = 180;
var adult_bfare_BCZA = 60;
var adult_bfare_PM = 180;
var adult_bfare_PCZA = 70;
var adult_bfare_MCZA = 180;

var child_bf = adult_bfare_HB / 2;
var child_1bf = adult_bfare_HP / 2;
var child_2bf = adult_bfare_HM / 2;
var child_3bf = adult_bfare_HCZA / 2;
var child_4bf = adult_bfare_BP / 2;
var child_5bf = adult_bfare_BM / 2;
var child_6bf = adult_bfare_BCZA / 2;
var child_7bf = adult_bfare_PM / 2;
var child_8bf = adult_bfare_PCZA / 2;
var child_9bf = adult_bfare_MCZA / 2;

function hb_child_fare() {
    var child_bf = adult_bfare_HB / 2;
    return child_bf;
}

function hp_child_fare() {
    var child_1bf = adult_bfare_HP / 2;
    return child_f;
}

function hm_child_fare() {
    var child_2bf = adult_bfare_HM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_3bf = adult_bfare_HCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_4bf = adult_bfare_BP / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_5bf = adult_bfare_BM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_6bf = adult_bfare_BCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_7bf = adult_bfare_PM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_8bf = adult_bfare_PCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_9bf = adult_bfare_MCZA / 2;
    return child_f;
}



//Suits roundTrips

var adult_cfare_HB = 80;
var adult_cfare_HP = 100;
var adult_cfare_HM = 200;
var adult_cfare_HCZA = 60;
var adult_cfare_BP = 80;
var adult_cfare_BM = 200;
var adult_cfare_BCZA = 70;
var adult_cfare_PM = 200;
var adult_cfare_PCZA = 80;
var adult_cfare_MCZA = 200;

var child_cf = adult_cfare_HB / 2;
var child_1cf = adult_cfare_HP / 2;
var child_2cf = adult_cfare_HM / 2;
var child_3cf = adult_cfare_HCZA / 2;
var child_4cf = adult_cfare_BP / 2;
var child_5cf = adult_cfare_BM / 2;
var child_6cf = adult_cfare_BCZA / 2;
var child_7cf = adult_cfare_PM / 2;
var child_8cf = adult_cfare_PCZA / 2;
var child_9cf = adult_cfare_MCZA / 2;

function hb_child_fare() {
    var child_cf = adult_cfare_HB / 2;
    return child_bf;
}

function hp_child_fare() {
    var child_1cf = adult_cfare_HP / 2;
    return child_f;
}

function hm_child_fare() {
    var child_2cf = adult_cfare_HM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_3cf = adult_cfare_HCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_4cf = adult_cfare_BP / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_5cf = adult_cfare_BM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_6cf = adult_cfare_BCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_7cf = adult_cfare_PM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_8cf = adult_cfare_PCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_9cf = adult_cfare_MCZA / 2;
    return child_f;
}



// for one ways




//economy one ways

var adult_wfare_HB = 30;
var adult_wfare_HP = 40;
var adult_wfare_HM = 100;
var adult_wfare_HCZA = 25;
var adult_wfare_BP = 50;
var adult_wfare_BM = 100;
var adult_wfare_BCZA = 30;
var adult_wfare_PM = 100;
var adult_wfare_PCZA = 40;
var adult_wfare_MCZA = 120;

var child_wf = adult_wfare_HB / 2;
var child_1wf = adult_wfare_HP / 2;
var child_2wf = adult_wfare_HM / 2;
var child_3wf = adult_wfare_HCZA / 2;
var child_4wf = adult_wfare_BP / 2;
var child_5wf = adult_wfare_BM / 2;
var child_6wf = adult_wfare_BCZA / 2;
var child_7wf = adult_wfare_PM / 2;
var child_8wf = adult_wfare_PCZA / 2;
var child_9wf = adult_wfare_MCZA / 2;

function hb_child_fare() {
    var child_f = adult_wfare_HB / 2;
    return child_f;
}

function hp_child_fare() {
    var child_1wf = adult_wfare_HP / 2;
    return child_f;
}

function hm_child_fare() {
    var child_2wf = adult_wfare_HM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_3wf = adult_wfare_HCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_4wf = adult_wfare_BP / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_5wf = adult_wfare_BM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_6wf = adult_wfare_BCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_7wf = adult_wfare_PM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_8wf = adult_wfare_PCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_9wf = adult_wfare_MCZA / 2;
    return child_f;
}




//Business one ways

var adult_wbfare_HB = 40;
var adult_wbfare_HP = 50;
var adult_wbfare_HM = 120;
var adult_wbfare_HCZA = 30;
var adult_wbfare_BP = 60;
var adult_wbfare_BM = 120;
var adult_wbfare_BCZA = 40;
var adult_wbfare_PM = 120;
var adult_wbfare_PCZA = 50;
var adult_wbfare_MCZA = 150;

var child_wbf = adult_wbfare_HB / 2;
var child_1wbf = adult_wbfare_HP / 2;
var child_2wbf = adult_wbfare_HM / 2;
var child_3wbf = adult_wbfare_HCZA / 2;
var child_4wbf = adult_wbfare_BP / 2;
var child_5wbf = adult_wbfare_BM / 2;
var child_6wbf = adult_wbfare_BCZA / 2;
var child_7wbf = adult_wbfare_PM / 2;
var child_8wbf = adult_wbfare_PCZA / 2;
var child_9wbf = adult_wbfare_MCZA / 2;

function hb_child_fare() {
    var child_wbf = adult_wbfare_HB / 2;
    return child_bf;
}

function hp_child_fare() {
    var child_1wbf = adult_wbfare_HP / 2;
    return child_f;
}

function hm_child_fare() {
    var child_2wbf = adult_wbfare_HM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_3wbf = adult_wbfare_BCZAfare_HCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_4bf = adult_wbfare_BP / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_5wbf = adult_wbfare_BM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_6wbf = adult_wbfare_BCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_7wbf = adult_wbfare_PM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_8wbf = adult_wbfare_PCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_9wbf = adult_wbfare_MCZA / 2;
    return child_f;
}



//Suits oneways

var adult_wcfare_HB = 50;
var adult_wcfare_HP = 60;
var adult_wcfare_HM = 150;
var adult_wcfare_HCZA = 40;
var adult_wcfare_BP = 80;
var adult_wcfare_BM = 150;
var adult_wcfare_BCZA = 50;
var adult_wcfare_PM = 150;
var adult_wcfare_PCZA = 60;
var adult_wcfare_MCZA = 180;

var child_wcf = adult_wcfare_HB / 2;
var child_1wcf = adult_wcfare_HP / 2;
var child_2wcf = adult_wcfare_HM / 2;
var child_3wcf = adult_wcfare_HCZA / 2;
var child_4wcf = adult_wcfare_BP / 2;
var child_5wcf = adult_wcfare_BM / 2;
var child_6wcf = adult_wcfare_BCZA / 2;
var child_7wcf = adult_wcfare_PM / 2;
var child_8wcf = adult_wcfare_PCZA / 2;
var child_9wcf = adult_wcfare_MCZA / 2;

function hb_child_fare() {
    var child_wcf = adult_wcfare_HB / 2;
    return child_bf;
}

function hp_child_fare() {
    var child_1wcf = adult_wcfare_HP / 2;
    return child_f;
}

function hm_child_fare() {
    var child_2wcf = adult_wcfare_HM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_3wcf = adult_wcfare_HCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_4wcf = adult_wcfare_BP / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_5wcf = adult_wcfare_BM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_6wcf = adult_wcfare_BCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_7wcf = adult_wcfare_PM / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_8cf = adult_wcfare_PCZA / 2;
    return child_f;
}

function hcza_child_fare() {
    var child_9cf = adult_wcfare_MCZA / 2;
    return child_f;
}


   function cal(){
if ( document.getElementById('roundTrip').checked && document.getElementById("a").value == "Economy"){
    
    
    if  (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Bulawayo" || 
         document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Harare"
        ) {
    
    console.log((document.getElementById("adult").value * adult_fare_HB) + 
        (document.getElementById("child").value * child_f)); 
    console.log("im a pro");
    
    
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Pretoria" || 
         document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Harare") {
           
            console.log((document.getElementById("adult").value * adult_fare_HP) + 
                   (document.getElementById("child").value * child_1f)); 
            console.log("im a pro");
            
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Harare") {
            
            console.log((document.getElementById("adult").value * adult_fare_HM) + 
                   (document.getElementById("child").value * child_2f)); 
            console.log("im a pro");
            
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Harare") {
            
            console.log((document.getElementById("adult").value * adult_fare_HCZA) + 
                   (document.getElementById("child").value * child_3f)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Pretoria" || 
         document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_fare_BP) + 
                   (document.getElementById("child").value * child_4f)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_fare_BM) + 
                   (document.getElementById("child").value * child_5f)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_fare_BCZA) + 
                   (document.getElementById("child").value * child_6f)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Pretoria") {
            
            console.log((document.getElementById("adult").value * adult_fare_PM) + 
                   (document.getElementById("child").value * child_7f)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Pretoria") {
            
            console.log((document.getElementById("adult").value * adult_fare_PCZA) + 
                   (document.getElementById("child").value * child_8f)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Melbourne") {
            
            console.log((document.getElementById("adult").value * adult_fare_MCZA) + 
                   (document.getElementById("child").value * child_9f)); 
            console.log("im a pro")
        } else {
            alert("please fill booking form")
        }
    

    
    
//roundTrip and business class
    
  
    
    
   } else if ( document.getElementById('roundTrip').checked && document.getElementById("a").value == "Business"){
 
       if  (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Bulawayo" || 
         document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Harare"
        ) {
    
    console.log((document.getElementById("adult").value * adult_bfare_HB) + 
        (document.getElementById("child").value * child_bf)); 
    console.log("im a pro");
    
    
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Pretoria" || 
         document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Harare") {
           
            console.log((document.getElementById("adult").value * adult_bfare_HP) + 
                   (document.getElementById("child").value * child_1bf)); 
            console.log("im a pro");
            
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Harare") {
            
            console.log((document.getElementById("adult").value * adult_bfare_HM) + 
                   (document.getElementById("child").value * child_2bf)); 
            console.log("im a pro");
            
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Harare") {
            
            console.log((document.getElementById("adult").value * adult_bfare_HCZA) + 
                   (document.getElementById("child").value * child_3bf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Pretoria" || 
         document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_bfare_BP) + 
                   (document.getElementById("child").value * child_4bf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_bfare_BM) + 
                   (document.getElementById("child").value * child_5bf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_bfare_BCZA) + 
                   (document.getElementById("child").value * child_6bf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Pretoria") {
            
            console.log((document.getElementById("adult").value * adult_bfare_PM) + 
                   (document.getElementById("child").value * child_7bf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Pretoria") {
            
            console.log((document.getElementById("adult").value * adult_bfare_PCZA) + 
                   (document.getElementById("child").value * child_8bf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Melbourne") {
            
            console.log((document.getElementById("adult").value * adult_bfare_MCZA) + 
                   (document.getElementById("child").value * child_9bf)); 
            console.log("im a pro")
        } else {
            alert("please fill booking form")
        }
    

   
   //roundTrip and Suits class
   
   
   } else if(document.getElementById('roundTrip').checked && document.getElementById("a").value == "Suits"){
       
       if  (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Bulawayo" || 
         document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Harare"
        ) {
    
    console.log((document.getElementById("adult").value * adult_cfare_HB) + 
        (document.getElementById("child").value * child_cf)); 
    console.log("im a pro");
    
    
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Pretoria" || 
         document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Harare") {
           
            console.log((document.getElementById("adult").value * adult_cfare_HP) + 
                   (document.getElementById("child").value * child_1cf)); 
            console.log("im a pro");
            
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Harare") {
            
            console.log((document.getElementById("adult").value * adult_cfare_HM) + 
                   (document.getElementById("child").value * child_2cf)); 
            console.log("im a pro");
            
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Harare") {
            
            console.log((document.getElementById("adult").value * adult_cfare_HCZA) + 
                   (document.getElementById("child").value * child_3cf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Pretoria" || 
         document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_cfare_BP) + 
                   (document.getElementById("child").value * child_4cf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_cfare_BM) + 
                   (document.getElementById("child").value * child_5cf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_cfare_BCZA) + 
                   (document.getElementById("child").value * child_6cf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Pretoria") {
            
            console.log((document.getElementById("adult").value * adult_cfare_PM) + 
                   (document.getElementById("child").value * child_7cf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Pretoria") {
            
            console.log((document.getElementById("adult").value * adult_cfare_PCZA) + 
                   (document.getElementById("child").value * child_8cf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Melbourne") {
            
            console.log((document.getElementById("adult").value * adult_cfare_MCZA) + 
                   (document.getElementById("child").value * child_9cf)); 
            console.log("im a pro")
        } else {
            alert("please fill booking form")
        }
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       //for one ways and economy
       
       
   } else if (document.getElementById('OneWay').checked && document.getElementById("a").value == "Economy"){
        
        if  (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Bulawayo" || 
         document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Harare"
        ) {
    
    console.log((document.getElementById("adult").value * adult_wfare_HB) + 
        (document.getElementById("child").value * child_wf)); 
    console.log("im a pro");
    
    
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Pretoria" || 
         document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Harare") {
           
            console.log((document.getElementById("adult").value * adult_wfare_HP) + 
                   (document.getElementById("child").value * child_1wf)); 
            console.log("im a pro");
            
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Harare") {
            
            console.log((document.getElementById("adult").value * adult_wfare_HM) + 
                   (document.getElementById("child").value * child_2wf)); 
            console.log("im a pro");
            
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Harare") {
            
            console.log((document.getElementById("adult").value * adult_wfare_HCZA) + 
                   (document.getElementById("child").value * child_3wf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Pretoria" || 
         document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_wfare_BP) + 
                   (document.getElementById("child").value * child_4wf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_wfare_BM) + 
                   (document.getElementById("child").value * child_5wf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_wfare_BCZA) + 
                   (document.getElementById("child").value * child_6wf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Pretoria") {
            
            console.log((document.getElementById("adult").value * adult_wfare_PM) + 
                   (document.getElementById("child").value * child_7wf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Pretoria") {
            
            console.log((document.getElementById("adult").value * adult_wfare_PCZA) + 
                   (document.getElementById("child").value * child_8wf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Melbourne") {
            
            console.log((document.getElementById("adult").value * adult_wfare_MCZA) + 
                   (document.getElementById("child").value * child_9wf)); 
            console.log("im a pro")
        } else {
            alert("please fill booking form")
        }
    

    
    
//One way and business class
    
  
    
    
   } else if ( document.getElementById('OneWay').checked && document.getElementById("a").value == "Business"){
 
       if  (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Bulawayo" || 
         document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Harare"
        ) {
    
    console.log((document.getElementById("adult").value * adult_wbfare_HB) + 
        (document.getElementById("child").value * child_wbf)); 
    console.log("im a pro");
    
    
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Pretoria" || 
         document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Harare") {
           
            console.log((document.getElementById("adult").value * adult_wbfare_HP) + 
                   (document.getElementById("child").value * child_1wbf)); 
            console.log("im a pro");
            
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Harare") {
            
            console.log((document.getElementById("adult").value * adult_wbfare_HM) + 
                   (document.getElementById("child").value * child_2wbf)); 
            console.log("im a pro");
            
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Harare") {
            
            console.log((document.getElementById("adult").value * adult_wbfare_HCZA) + 
                   (document.getElementById("child").value * child_3wbf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Pretoria" || 
         document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_wbfare_BP) + 
                   (document.getElementById("child").value * child_4wbf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_wbfare_BM) + 
                   (document.getElementById("child").value * child_5wbf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_wbfare_BCZA) + 
                   (document.getElementById("child").value * child_6wbf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Pretoria") {
            
            console.log((document.getElementById("adult").value * adult_wbfare_PM) + 
                   (document.getElementById("child").value * child_7wbf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Pretoria") {
            
            console.log((document.getElementById("adult").value * adult_wbfare_PCZA) + 
                   (document.getElementById("child").value * child_8wbf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Melbourne") {
            
            console.log((document.getElementById("adult").value * adult_wbfare_MCZA) + 
                   (document.getElementById("child").value * child_9wbf)); 
            console.log("im a pro")
        } else {
            alert("please fill booking form")
        }
    

   
   //One Way and Suits class
   
   
   } else if(document.getElementById('OneWay').checked && document.getElementById("a").value == "Suits"){
       
       if  (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Bulawayo" || 
         document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Harare"
        ) {
    
    console.log((document.getElementById("adult").value * adult_wcfare_HB) + 
        (document.getElementById("child").value * child_wcf)); 
    console.log("im a pro");
    
    
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Pretoria" || 
         document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Harare") {
           
            console.log((document.getElementById("adult").value * adult_wcfare_HP) + 
                   (document.getElementById("child").value * child_1wcf)); 
            console.log("im a pro");
            
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Harare") {
            
            console.log((document.getElementById("adult").value * adult_wcfare_HM) + 
                   (document.getElementById("child").value * child_2wcf)); 
            console.log("im a pro");
            
        }else if (document.getElementById("initial").value == "Harare" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Harare") {
            
            console.log((document.getElementById("adult").value * adult_cfare_HCZA) + 
                   (document.getElementById("child").value * child_3wcf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Pretoria" || 
         document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_cfare_BP) + 
                   (document.getElementById("child").value * child_4wcf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_wcfare_BM) + 
                   (document.getElementById("child").value * child_5wcf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Bulawayo" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Bulawayo") {
            
            console.log((document.getElementById("adult").value * adult_wcfare_BCZA) + 
                   (document.getElementById("child").value * child_6wcf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Melbourne" || 
         document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Pretoria") {
            
            console.log((document.getElementById("adult").value * adult_wcfare_PM) + 
                   (document.getElementById("child").value * child_7wcf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Pretoria" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Pretoria") {
            
            console.log((document.getElementById("adult").value * adult_wcfare_PCZA) + 
                   (document.getElementById("child").value * child_8wcf)); 
            console.log("im a pro")
        
        }else if (document.getElementById("initial").value == "Melbourne" && 
    document.getElementById("final").value == "Chitungwiza" || 
         document.getElementById("initial").value == "Chitungwiza" && 
    document.getElementById("final").value == "Melbourne") {
            
            console.log((document.getElementById("adult").value * adult_wcfare_MCZA) + 
                   (document.getElementById("child").value * child_9wcf)); 
            console.log("im a pro")
        } else {
            alert("please fill booking form");
        }
       
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   } else {
       alert("please fill booking form");
   }






   }



    
    
        function t_day() {
    var d = new Date();
    document.getElementById("aday").innerHTML = d;
            console.log(d);
        }
    
    
    
//  form validation



function validateForm() {
    var x = document.forms["flight_booking"]["userID"].value;
    if (x == null || x == "") {
        alert("Please create a userID");
        return false;
    }

if (document.forms["flight_booking"]["departure"].value == null || document.forms["flight_booking"]["userID"].value == "") {
    alert("Please enter date of departure")
    return false;
}












}


    
    
    
    
    
    
    
    
    
    
    