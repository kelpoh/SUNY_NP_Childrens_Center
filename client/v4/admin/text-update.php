
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/main.css">


</head>

<body class='bg-slate-900'>

<div class="h-screen flex flex-col items-center justify-center">

    <h1 class="text-sky-100 text-5xl my-5 py-5">Change text!</h1>

        <form method="post" action="process-text.php" class="w-full max-w-lg">

            <div class="flex flex-wrap -mx-3 mb-4">

                <div class="w-full px-3 mb-6 md:mb-0 transition ease-in-out hover:scale-110">

                        <label class="block uppercase tracking-wide text-blue-300 text-xl font-bold mb-2"
                            for="grid-id">
                            Input item ID
                        </label>

                        <input
                            class="appearance-none block w-full bg-slate-800 text-white text-lg rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-slate-600 focus:placeholder:opacity-0"
                            id="grid-id"
                            name="id"
                            type="text"
                            placeholder="The ID of the record you're changing"
                            required>
                    </div>

                    <div class="w-full px-3 mb-6 md:mb-0 transition ease-in-out hover:scale-110">

                        <label class="block uppercase tracking-wide text-blue-300 text-xl font-bold mb-2"
                            for="grid-name">
                            Update text!
                        </label>

                        <input
                            class="appearance-none block w-full bg-slate-800 text-white text-lg rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-slate-600 focus:placeholder:opacity-0"
                            id="grid-text"
                            name="content"
                            type="text"
                            placeholder="New text"
                            required>
                    </div>


                    <div class="w-full px-3 mb-6 md:mb-0 transition ease-in-out hover:scale-110">

                        <label class="block uppercase tracking-wide text-blue-300 text-xl font-bold mb-2"
                            for="grid-info">
                            Update the description!
                        </label>

                        <input
                            class="appearance-none block w-full bg-slate-800 text-white text-lg rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-slate-600 focus:placeholder:opacity-0"
                            id="grid-name"
                            name="info"
                            type="text"
                            placeholder="New info"
                            required>
                    </div>

            </div>

            <div class="flex flex-col items-center justify-center">
                <button
                    class="text-sky-400 text-lg py-1.5 my-3 w-1/2 bg-transparent border-2 border-sky-300 rounded-full transition ease-in-out hover:scale-110 hover:bg-sky-400 hover:text-white active:bg-sky-300">
                    Update text
                </button>
            </div>

        </form>
    </div>
</body>
</html>