

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <title>LearnEnjoy</title>
</head>
<style>
        *{
            margin:0;
            padding:0;
        }
        ::-webkit-scrollbar{
            width:5px;
        }
        ::-webkit-scrollbar-track{
            background:#061128;
        }
        ::-webkit-scrollbar-thumb{
            background:#061128;
        }

    </style>
<body style="background:#05113b;">
<div>
    <div class="container-fluid m-0 d-flex p-2">
        <div class="pl-2" style="width:40px;height:50px;">
        <i class="fa fa-angle-double-left text-while mt-2"></i>
        </div>
        <div style="width:50px;height:50px;">
        <img width="100%" height="100%" style="border-radius:50px;" src="img/bottt.png" alt="">
        </div>
        <div class="text-white font-weight-bold ml-2 mt-2">
            Talk to Genius SHYAKA Sam!
        </div>
         
    </div>
   <button class="btn btn-info"><a href="/">back-Home</a></button>

    <div style="background:#061128;height:2px;"></div> 
    <div id="content-box" class="container-fluid p-2"  style="height:calc(100vh -130px);overflow-y: scroll;">
   
    <div class="d-flex mb-2">
        <div class="mr-2" style="width:45px;height:45px;">
        <img width="100%" height="100%" style="border-radius:50px;" src="img/bottt.png" alt="">
        </div>
        <div class="text-white px-4 py-3" style="width:270px;background:#13254b;border-radius:10px;font-size:85%;">
        Hello Welcome! We are so excited to have you here! We hope you have a wonderful and positive experience while you're here. Please write what can we help you In all Fields  <hr>
    </div>
    </div>
   
    </div>

    <div class="container-fluid w-100 px-3 py-2 d-flex" style="background:#131f45;height:62px;">
    <div class="mr-2 pl-2" style="background:#ffffff1c;width:calc(100% - 45px);border-radius:5px;">
    <input id="input" class="text-white" type="text" name="input" style="background:none;width: 100%;height: 100%;border:0;outline:none;">
    </div>
    <div  id="button-submit" class="text-center" style="background:#4acfee;height:100%;width:50px;border-radius:5px;">
    <i class="fa fa-paper-plane text-white" aria-hidden="true" style="line-height:45px;"></i>
    </div>

    </div>
</div> 
</body>
</html>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    })
    $('#button-submit').on('click',function(){
       $value = $('#input').val();
       $('#content-box').append(`<div class="mb-2">
        <div class="float-right px-3 py-2" style="width:270px; background:#4acfee;border-radius:10px;float:right;font-size:85%;">
        `+$value+`
        </div>
        <div style="clear:both;"></div>
   </div>`) 
   
   $.ajax({
    type: 'post',
    url: '{{url('send')}}',
    data: {
        'input':$value
    },
    success: function(data){
        $('#content-box').append(`<div class="d-flex mb-2">
        <div class="mr-2" style="width:45px;height:45px;">
        <img width="100%" height="100%" style="border-radius:50px;" src="img/bot.png" alt="">
        </div>
        <div class="text-white px-4 py-3" style="width:870px;background:#13254b;border-radius:10px;font-size:85%;">
        `+data+` <hr> <div style="color:red;">LearnEnjoy Bot Made by SHYAKA Samuel</div>
    </div>
    </div>`)
    $value = $('#input').val('');

   
    }
   })
    })
</script>  
