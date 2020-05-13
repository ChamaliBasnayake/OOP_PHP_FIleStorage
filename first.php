<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="chamali">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Form</title>
        <style type="text/css">
            body{
                margin:0;
                padding: 0;
                font-family: Verdana,Geneva,sans-serif;
                -webkit-box-sizing:border-box;
                -moz-box-sizing:border-box;
                box-sizing: border-box;
            }
            body{
                background-color: #666;
                
            }
            .main{
                width: 400px;
                margin: 30px auto;
                background-color: skyblue;
                position: relative;
                border-radius: 5px;
                box-shadow: 0 0 10px #000;
                padding: 40px;
            }
            h1{
                width: 100%;
                padding: 10px;
                text-align: center;
                background-color: #ee5a00;
                color: #fff;
                text-shadow:2px 2px 1px #973900;
                border-top-left-radius:5px;
                border-top-right-radius:5px;
            }
            #form-box{
                padding: 20px;
                padding-bottom: 0px;   
                
            }
            .inp,#msg-box{
                display: block;
                width: 100%;
                border: none;
                padding: 12px;
                font-size: 16px;
                margin-bottom: 10px;
                color: #ee5a00;
            }
            .inp:focus,#msg-box:focus{
                outline: none;
                box-shadow:0 0 5px 1px blue; 
            }
            ::-webkit-input-placeholder{
                color: #ff9961;
            }
            #msg-box{
                resize: none;
                height: 100px;
            }
            .sub-btn{
                width: 400px;
                padding: 12px;
                cursor: pointer;
                font-size: 20px;
                font-weight: bold;
                border: none;
                margin-left: -10px;
                background-color: #f3e500;
                text-shadow:1px 1px 5px #eee;
                border-bottom-right-radius: 5px;
                border-bottom-left-radius: 5px;
               
            }
            .sub-btn:focus{
                outline: none;
                
            }
            .sub-btn:hover{
                background-color: #ddbb00;
            }
            h2{
                width: 100px;
                text-align: center;
                color: #fff;
                text-shadow: 2px 2px 1px #000;
                margin-top: 10px;
            }
        </style>
      
    </head>
    <body>
        <div class="main">
            
            <h1>Upload a file</h1>
            <form action="email.php" id="form-box"method="POST"enctype="multipart/form-data">
                <input type="text" name="title" class="inp" placeholder="Title of the File....." required >
                <input type="email" name="to" class="inp" placeholder="To:Email....." required >
                <input type="text" name="author" class="inp" placeholder="Author....." required >
                <input type="file" name="file" class="inp" placeholder="PDF,DOC,DOCX,PNG,JPEG,JPG," required >
                <input type="submit" name="submit" class="sub-btn" value="UPLOAD">
            </form>  
        </div>
    </body>
</html>


