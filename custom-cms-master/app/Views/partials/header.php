<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selbstschreiber Blog</title>
    <link rel="stylesheet" href="./styles/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>
<body class="bg-pink-50">

    <!-- Header -->
<header>


  <div class="md:h-[400px] h-screen w-full bg-red-400">
    <div class="w-full h-full flex justify-center">
      <div class="flex justify-center items-center h-full flex-col">
        <div class="text-center text-white px-6">
          <h1 class="text-5xl font-bold mt-0 mb-6">Selbstschreiber</h1>
          <h3 class="text-3xl font-bold mb-8">Blog für freien Journalismus</h3>
        </div>
        <div class="flex flex-col md:flex-row">
            <button type="button"
              class="inline-block px-6 py-2.5 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out m-2.5"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              <a href="/">Home</a>
            </button>
            <button type="button"
              class="inline-block px-6 py-2.5 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out m-2.5"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              <a href="/dashboard">Dashboard</a>
            </button>
            <?php if (!$user->isLoggedIn()): ?>
            <button type="button"
              class="inline-block px-6 py-2.5 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out m-2.5"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              <a href="/register">Register</a>
            </button>
            <button type="button"
              class="inline-block px-6 py-2.5 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out m-2.5"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              <a href="/login">Login</a>
            </button>
            <?php else: ?>
            <button type="button"
              class="inline-block px-6 py-2.5 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out m-2.5"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              <a href="/post/create">Create Post</a>
            </button>
            <button type="button"
              class="inline-block px-6 py-2.5 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out m-2.5"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              <a href="/logout">Sign Out</a>
            </button>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

</header>

<!-- Header ------------------------------->

<div class="w-full flex items-center justify-center messages mt-10">
  <p class="p-1.5 text-xs font-medium uppercase tracking-wider rounded-lg bg-opacity-50 empty:hidden">
    <?php echo $session::flash('message'); ?>
  </p>
</div>

