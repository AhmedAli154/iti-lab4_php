<?php










   ?>





<html>
    <head>
    <style>
    div {
    margin:auto;
    background-color:#E5E5E5;
    width: 50%;
    height: 50vh;
    text-align:center;
    padding-left: 40px;
    padding-top: 40px;



    
    }
    
    </style>
    </head>
    
    <body>

        <div>
        
        <form action="./add.php"  method="POST">
            <table >
           
            <tr>
                <td> <label for="s_Name" aria-required="">Name:</label>    </td>
            </tr>
            <tr>
             <td>  <input type="text" id="s_Name" name="s_Name" Required> </td>

            </tr>
            <tr>
                <td> <label for="Email">E-mail:</label> </td>
            </tr>
            <tr>
              <td> <input type="email" id="Email" name="Email" Required><br> </td>

            </tr>
            
            
            <tr>
                <td> <label for="Gender">Gender: </label> </td>
                
               
            </tr>
            <tr>
                <td> <input type="radio" id="Female" name="Gender" value="Female"> 
                <label for="Female">female</label> </td>
            </tr>
            <tr>
                <td>
                <input type="radio" id="male" name="Gender" value="male"> 
                <label for="male">male</label><br> </td>
            </tr>
            

            <td><input type="checkbox" id="Agree" name="Agree" >
            <label for="Agree">Receive E-mails from us </label>
            </td>

            </tr>  
            <tr>

            <td> <input type = "submit" />
            <button>cancel</button>
            </td>
            
            

            </tr>  
            </table>
     
        </form>
        
        </div>

       
    </body>
</html>












