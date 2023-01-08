<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My create page</title>

<style>
    .my{
        padding: 10px 12px 10px;
        background-color: grey;
        width: 50%;
        margin: 0 auto;
    }
</style>

</head>
<body>
    <div class="div">
        <h2>Calculator</h2>

        <button type="button" id="saikat">Change the style</button>
        <p style="color: red;" id="demo">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto eaque non numquam eos totam, voluptas, iusto vero necessitatibus delectus ipsa sit porro explicabo accusamus maxime culpa earum itaque voluptate. Impedit facilis repellendus cupiditate excepturi, numquam, velit fugit, iure ea magnam beatae a? Asperiores officiis natus eligendi aperiam. Mollitia, itaque quod!
        </p>
        <script>
           var saikat = document.getElementById("saikat");
           saikat.addEventListener('click' , function(){
            var demo = document.getElementById("demo");
            if(demo.style.color === 'red'){
                demo.style.color = "blue";
                demo.classList.add('my');
            }else{
                demo.style.color = "tomato";
                demo.style.fontSize = "20px";
                demo.classList.remove("my");
            }
            
           })
        </script>
        <a href="{{ url('/') }}">Home</a>
    </div>
</body>
</html>