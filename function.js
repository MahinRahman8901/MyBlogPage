        function ClearButton(){
                window.confirm("Are You Sure you would like to clear the page?");
                document.getElementById("text").value = "";
                document.getElementById("Title").value = "";
        }


      function formValidate(event){
        
        if (document.getElementById("Title").value == ""){
            alert("Title Field Is Empty");
            event.preventDefault();
            document.getElementById("Title").style.border = "2px solid #f00";
            return false;
        }
        else if (document.getElementById("text").value == ""){
            event.preventDefault();
            alert("Text Area is Empty");
            
            document.getElementById("text").style.border = "2px solid #f00";
            
            return false;
        }

    }



        
        

     