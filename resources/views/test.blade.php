@extends('layouts.app')

@section('title', 'Home Page')
@section('content')
<style>


</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=">
  <title>Job Board</title>
</head>
<body class="">
 
  
  <main class="main bg-white px-6 md:px-16 py-6">
    <div class="w-full max-w-xl mx-auto">
      <form action="" method="post">
        <h1 class="text-2xl mb-2">Post new job</h1>
        
        <div class="job-info border-b-2 py-2 mb-5">
          <!--    Title      -->
          <div class="mb-4">
            <label class="block text-gray-700 text-sm mb-2" for="job-title">Title</label>
            <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" type="email" id="job-title" name="job-title" placeholder="Frontend Developer" autofocus>
          </div>

          <!--     Link to apply     -->
          <div class="mb-4">
            <label class="block text-gray-700 text-sm mb-2" for="apply-link">Link to apply</label>
            <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" type="email" id="apply-link" name="apply-link" placeholder="https://www.djangoproject.com/apply">
          </div>

          <div class="md:flex md:justify-between">
            <!--      Job Type      -->
            <div class="w-full md:w-3/12 mb-4 md:mb-0">
                <label class="block text-gray-700 text-sm mb-2" for="job-type">
                  Job Type
                </label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-white border border-gray-400 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-gray-500" id="job-type" name="job-type">
                    <option>Full-time</option>
                    <option>Part-time</option>
                    <option>Freelance</option>
                    <option>Contract</option>
                  </select>

                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
            </div>

            <!--     Location       -->
            <div class="w-full md:w-8/12 mb-4 md:mb-0">
              <label for="location" class="block text-gray-700 text-sm mb-2">Location</label>
              <input type="text" class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" id="location" name="location" placeholder="Schwerin">

              <div>
                <label class="text-gray-600 flex items-center" for="remote">
                  <input class="mr-2 leading-tight" type="checkbox" id="remote">
                  <span class="text-sm">Work can be done remotely</span>
                </label>
              </div>
            </div>
          </div> <!-- end group -->

          <!--    Description      -->
          <div>
            <label for="description" class="block text-gray-700 text-sm mb-2">Description</label>
            <textarea name="description" id="description" cols="" rows=""></textarea>
          </div>

          <div class="flex flex-wrap -mx-3">
            <!--     Company       -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
              <label for="company" class="block text-gray-700 text-sm mb-2">Company</label>
              <input type="text" class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" id="company" name="company" placeholder="Company">
            </div>

            <!--      Company Website      -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
              <label for="company" class="block text-gray-700 text-sm mb-2">Company Website</label>
              <input type="text" class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" id="company" name="company" placeholder="https://www.djangoproject.com/">
            </div>
          </div> <!-- end group -->

          <!--      Company Website      -->
          <div class="mb-4 md:mb-0">
            <label for="company-logo" class="block text-gray-700 text-sm mb-2">Logo Image</label>
            <input type="file" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3  px-8  mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="company-logo" name="company-logo">
          </div>
        </div> <!-- end job-info -->
        
        <div class="payment mb-6">
          
          <h4 class="mb-2">Payment</h4>
          <p class="bg-gray-200 py-3 text-center text-sm">
            <span><i class="far fa-credit-card"></i></span>
            All jobs cost <strong>€300</strong> for 30 days.
          </p>
          
        </div>
        
        
        <!--     Submit     -->
        <div>
          <button class="bg-indigo-700 hover:bg-indigo-900 text-white py-2 px-3 rounded" type="submit">Create job</button>
        </div>
      </form>
    </div>
  </main>
  
  <footer class="footer py-4">
    <p class="text-center text-gray-600 text-xs">
      &copy;2020 Coded by Bledi Dalipaj
    </p>
  </footer>
</body>
</html>

</div>

@endsection