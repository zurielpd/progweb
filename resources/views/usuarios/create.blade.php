<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DUAL</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Gothic+A1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
</head>

<style>
        .box_style{
            outline: none;
            border: 2px solid #000;
            box-shadow: 10px 11px 0px 1px #000;
        }

        .error {
            border: 3px solid #9B2128;
        }

        .valido{
            border: 3px solid rgb(74 222 128);
        }

        #alertaError,
        #alertaValido,
        #alertaTamaño{
            display: none;
        }

</style>
    
<body class="md:flex sm:h-screen sm:w-screen overflow-hidden">
    
    <div class=" md:w-1/4 bg-[#9B2128] flex justify-center items-center">
        <h2 class="text-xl md:text-6xl text-white md:-rotate-90 py-8 md:py-0 font-[Audiowide] ">REGISTRATE CON NOSOTROS</h2>
    </div>

    <div class="flex justify-center items-center">
        <img src="dual.png" alt="dual" class="w-[250px] h-[120px] md:hidden block">
    </div>

    <div class="md:w-2/4 md:flex md:justify-center md:items-center flex justify-center items-center">
        <form action="{{url('alumnos')}}" method="post" class="flex flex-col xs:translate-y-5 space-y-6 md:space-y-8 md:-translate-y-5">
           @csrf
            <label for="name" class="translate-y-6 font-[Gothic-A1] text-lg">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="border border-black box_style w-72 px-2 py-1 font-[Gothic-A1] h-10">
            <label for="email" class="translate-y-6 font-[Gothic-A1] text-lg">Correo:</label>
            <input type="email" name="correo" id="correo" class="border border-black box_style w-72 px-2 py-1 font-[Gothic-A1] h-10">
            <label for="password" class="translate-y-6 font-[Gothic-A1] text-lg">Contraseña</label>
            <div class="relative">
                <input type="password" name="contraseña" id="pass" class="border border-black box_style w-56 px-2 py-1 font-[Gothic-A1] h-10">
                <button type="button" id="btnpass" class="bg-black border border-black fa-solid fa-eye text-white px-1 py-3 w-[40px] h-[40px] translate-x-4 translate-y-2"></button>
                <P id="alertaTamaño" class="font-[Gothic-A1] text-red-700 absolute translate-y-2">La contraseña debe tener 8 carácteres como mínimo</P>
            </div>
            <label for="confpassword" class="translate-y-6 font-[Gothic-A1] text-lg">Confirmar contraseña</label>
            <div>
                <input type="password" name="confpassword" id="confpass" class="border border-black box_style w-56 px-2 py-1 font-[Gothic-A1] h-10">
                <button type="button" id="btnconfpass" class="bg-black border border-black fa-solid fa-eye text-white px-1 py-3 w-[40px] h-[40px] translate-x-4 translate-y-2"></button>
            </div>
            
            <div class="flex space-x-5">
                <button type="submit" class="bg-[#9B2128] translate-y-10 text-white w-40 h-12 px-1 py-3 font-[Audiowide] text-base">Continuar</button>
                <a href="{{ url('usuarios') }}" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-sm inline-block h-12 translate-y-10">Regresar</a>
            </div>
            
        </form>

    </div>

    <div class="md:w-1/4 flex flex-col justify-center">
        <img src="dual.png" alt="dual" class="w-[400px] h-[160px] hidden md:block md:-translate-y-5 md:-translate-x-32 -rotate-45 pointer-events-none">
    </div>

    <img src="triangulo.png" alt="" class="w-[960px] h-[960px] absolute translate-x-[45rem] translate-y-2 md:block hidden pointer-events-none">

    <div onclick="closemsg()" id="alertaError" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#9B2128] p-4 border h-36">
        <button type="button" class="fa-solid fa-x translate-x-36 md:translate-x-56 text-white text-xl"></button>
        <h3 class="md:text-xl text-lg text-white font-[Gothic-A1]">Las contraseñas no coinciden, <br> por favor verifícalas.</h3>
    </div>

    <script>
       

        function mostrarpass() {
            const passwordM = document.getElementById("pass");
            const button = document.getElementById("btnpass");

            if (passwordM.type === "password") {
                passwordM.type = "text";
                button.classList.remove("fa-eye");
                button.classList.add("fa-eye-slash");
            } else {
                passwordM.type = "password";
                button.classList.remove("fa-eye-slash");
                button.classList.add("fa-eye");
            }
        }

        function mostrarconfpass() {
            const confirmPasswordM = document.getElementById("confpass");
            const button = document.getElementById("btnconfpass");

            if (confirmPasswordM.type === "password") {
                confirmPasswordM.type = "text";
                button.classList.remove("fa-eye");
                button.classList.add("fa-eye-slash");
            } else {
                confirmPasswordM.type = "password";
                button.classList.remove("fa-eye-slash");
                button.classList.add("fa-eye");
            }
        }
        document.getElementById("btnpass").addEventListener("click", mostrarpass);
        document.getElementById("btnconfpass").addEventListener("click", mostrarconfpass);
    </script>


  




    
</body>
</html>