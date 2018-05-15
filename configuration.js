var csrf_token;

//to retrive the response values form server side the function is used
function loadDOC(method,url,htmlTag)
{
    var xhttp = new XMLHttpRequest(); //Store HTTP requests in a variable
    xhttp.onreadystatechange = function() //When a request comes from server side it exicutes
    {
        if(this.readyState==4 && this.status==200)
        {
            console.log("CSRF token scuessfully fetched : "+this.responseText);
            document.getElementById(htmlTag).value = this.responseText;

            
            
        }
    };

    xhttp.open(method,url,true);
    xhttp.send();
}


