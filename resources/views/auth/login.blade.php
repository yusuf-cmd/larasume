<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Halaman Login</title>
        <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
      />
      <link rel="stylesheet" href="{{ asset('windmill-panel/assets/css/tailwind.output.css') }}" />
      <script
        src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
        defer
      ></script>
      <script src="{{ asset('windmill-panel/assets/js/init-alpine.js') }}"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
            <div
              class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
            >
              <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                  <img
                    aria-hidden="true"
                    class="object-cover w-full h-full dark:hidden"
                    src="{{ asset('windmill-panel/assets/img/login-office.jpeg') }}"
                    alt="Office"
                  />
                  <img
                    aria-hidden="true"
                    class="hidden object-cover w-full h-full dark:block"
                    src="{{ asset('windmill-panel/assets/img/login-office-dark.jpeg') }}"
                    alt="Office"
                  />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                  <div class="w-full">
                    <h1
                      class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
                    >
                      Silahkan login untuk melanjutkan Panel
                    </h1>
                    <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <label class="block text-sm">
                      <span class="text-gray-700 dark:text-gray-400">Email</span>
                      <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Your Email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                      />
                    </label>
                    <label class="block mt-4 text-sm">
                      <span class="text-gray-700 dark:text-gray-400">Password</span>
                      <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="***************"
                        type="password"
                        name="password"
                        required
                      />
                    </label>
                    <button
                      type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    >
                      Log in
                    </button>
                </form>

                    <hr class="my-8" />
                  </div>
                </div>
              </div>
            </div>
          </div>
    </body>
</html>
