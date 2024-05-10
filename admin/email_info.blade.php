<!DOCTYPE html>
<html lang="en">
  <head>
    <base  href="/public ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('admin.header')
        <!-- partial -->
        <div class="main-panel">

          <div class="content-wrapper">
            <h2 style="text-align:center; font-size:30px;">Order Details</h2>
            <h1>send Email To </h1>

            <form method="POST" action="{{url('send_user_email',$order->id)}}" >
              @csrf
          
              <div class="mb-4">
                  <label for="email_greeting" class="block text-sm font-medium text-gray-700">Email Greeting</label>
                  <input type="text" name="email_greeting" id="email_greeting" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
              </div>
          
              <div class="mb-4">
                  <label for="email_firstline" class="block text-sm font-medium text-gray-700">First Line</label>
                  <input type="text" name="email_firstline" id="email_firstline" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
              </div>
          
              <div class="mb-4">
                  <label for="email_body" class="block text-sm font-medium text-gray-700">Email Body</label>
                  <textarea name="email_body" id="email_body" rows="5" class="mt-1 p-2 border border-gray-300 rounded-md w-full"></textarea>
              </div>
          
              <div class="mb-4">
                  <label for="email_button" class="block text-sm font-medium text-gray-700">Button Text</label>
                  <input type="text" name="email_button" id="email_button" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
              </div>
          
              <div class="mb-4">
                  <label for="email_url" class="block text-sm font-medium text-gray-700">Button URL</label>
                  <input type="url" name="email_url" id="email_url" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
              </div>
          
              <div class="mb-4">
                  <label for="email_lastline" class="block text-sm font-medium text-gray-700">Last Line</label>
                  <input type="text" name="email_lastline" id="email_lastline" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
              </div>
          
              <div class="mb-4">
                  <label for="any_questions" class="block text-sm font-medium text-gray-700">Any Questions?</label>
                  <textarea name="any_questions" id="any_questions" rows="3" class="mt-1 p-2 border border-gray-300 rounded-md w-full"></textarea>
              </div>
          
              <div class="mt-6">
                  <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ease-in-out duration-150">
                      Send Email
                  </button>
              </div>
          </form>
          
          </div>
        </div>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
  </body>
</html>