        var POST = false;
        function Ticket()
        {
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange=function(){
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("WorkSpace").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "Ticket_2.html", true);
            xhttp.send();           
        }
        /*function Dulezitost(Imp){
            if(Imp==""){
                alert("Vyberte dulezitost");
            }
            else
                var Importance = Imp;            
            }*/
        function FunctSend(){
                
                
               
                var Name = document.getElementById("Name").value;
                var Problem = document.getElementById("Problem").value;
                var Imp = document.getElementById("Imp").value;
                if(Imp=="" || Name ==""||Problem=="")
                {
                    alert("Zadejte data");
                    return;
                }
                
                var xhttp = new XMLHttpRequest();
                
               
                
                xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("WorkSpace").innerHTML = this.responseText;
                }
                };
                xhttp.open("POST","table2.php", true);
                xhttp.send(Name+Problem+Imp); 
                
                
            }       
             
        function Table()
        {
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("WorkSpace").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "table2.php", true);
            xhttp.send();
        
        }