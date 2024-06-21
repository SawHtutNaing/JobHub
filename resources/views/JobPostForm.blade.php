@extends('layouts.app')

@section('title', 'Home Page')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">

<section>

    <h1 
    class="text-3xl  text-center">
         Why should I Participate ?
    </h1>

    <div class=" mx-auto   container grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-4  mt-10">

        <div class="bg-white w-80 p-5 h-60 shadow-md relative rounded-md">
            <button
              class="bg-green-200 text-green-700 rounded-xl px-3 py-1 absolute right-2 text-sm"
            >
              4.5
            </button>
            <div class="py-3 px-1">
                <img 
                class="w-10 h-9"
                
                src="{{asset('storage/images/lens.svg')}}" alt="">
                
            
            </div>
            <p class="text-lg font-bold font-sans">Trusted Employers
            </p>
            <div class="text-sm py-2 font-mono">
              Our platform features job opportunities from trusted employers committed to your professional growth and satisfaction.
            </div>
          </div>

          <div class="bg-white w-80 p-5 h-60 shadow-md relative rounded-md">
            <button
              class="bg-green-200 text-green-700 rounded-xl px-3 py-1 absolute right-2 text-sm"
            >
              4.5
            </button>
            <div class="py-3 px-1">
                <img 
                class="w-10 h-9"
                
                src="{{asset('storage/images/lens.svg')}}" alt="">
                
            
            </div>
            <p class="text-lg font-bold font-sans">User-Friendly Interface</p>
            <div class="text-sm py-2 font-mono">
              Easily browse job postings with our intuitive interface. Filter by location, industry, and experience level to discover the ideal match for your skills and career goals.






            </div>
          </div>

          <div class="bg-white w-80 p-5 h-60 shadow-md relative rounded-md">
            <button
              class="bg-green-200 text-green-700 rounded-xl px-3 py-1 absolute right-2 text-sm"
            >
              4.5
            </button>
            <div class="py-3 px-1">
                <img 
                class="w-10 h-9"
                
                src="{{asset('storage/images/lens.svg')}}" alt="">
                
            
            </div>
            <p class="text-lg font-bold font-sans">Diverse Opportunities
            </p>
            <div class="text-sm py-2 font-mono">
              Browse diverse job listings from tech, healthcare, finance, education, and more. Our platform connects you with employers seeking talented individuals like you.






            </div>
          </div>
          
    </div>
</section>


<main class="main mt-12 bg-white px-6 md:px-16 py-6">
    <div class="w-full max-w-xl mx-auto">
      <form action="{{route('jobs.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
        <h1 class="text-2xl mb-2">Post new job</h1>
        
        <div class="job-info border-b-2 py-2 mb-5">
          <!--    Title      -->
          <div class="mb-4">
            <label class="block text-gray-700 text-sm mb-2" for="job-title">Title</label>
            <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" type="text" id="job-title" name="job_title" placeholder="Frontend Developer" >
          </div>


          <div class="md:flex md:justify-between">
            <!--      Job Type      -->
            <div class="w-full md:w-3/12 mb-4 md:mb-0">
                <label class="block text-gray-700 text-sm mb-2" for="job-type">
                  Employment Type
                </label>
                <div class="relative">
                  <select name="job_type" class="block appearance-none w-full bg-white border border-gray-400 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-gray-500" id="job-type" name="job_type">
                    <option value='full-time'>Full-time</option>
                    <option value="part-time">Part-time</option>
                    <option  value='remote'>Remote</option>
                    <option value="contract">Contract</option>
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

            <!--     Remote       -->

              
              {{-- <div>
                <label class="text-gray-600 flex items-center" for="remote">
                  <input class="mr-2 leading-tight" type="checkbox" id="remote">
                  <span class="text-sm">Work can be done remotely</span>
                </label>
              </div> --}}
            </div>
            <div class="w-full md:w-8/12 mb-4 md:mb-0">

             <label for="location" class="block text-gray-700 text-sm mb-2">salary</label>
              <input type="number" name="salary" class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" id="location" name="location" placeholder="$600">
          </div> 

          </div> 
          <!-- end group -->
          <!-- start  Category  -->
          <div>
            <div class="box mt-5 ">

            </div>
          </div>
          <!-- end Category -->
          {{-- <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label> 

<input   class="block  ms-2  w-32  p-2  text-sm text-gray-900 border border-gray-300 rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  name='category'  />

--}}

<select name='category' class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  
  <option value="Frontend">Frontend</option>
  <option value="Backend">Backend</option>
  <option value="AI">AI</option>
  <option value="Designer">Design</option>
</select>


            {{-- sub category  --}}
            <div>
              <div class="box mt-5 ">
                <input type="hidden" value="" id="subCategory" name="subCategory">
                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sub Category</label> 

                  <ul  class=" max-w-md space-y-1 ms-2 list-disc  h-24 w-auto  list-inside dark:text-gray-400" id="display"  >
                      
                  </ul>
          <input  id='inputBox'  class="block  ms-2  w-32  p-2  text-sm text-gray-900 border border-gray-300 rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
          
          <button type="button" onclick="addItem()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mt-2 ms-2  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Category</button>
                  
          
              </div>
          </div>
            {{-- sub category  --}}
            {{-- qualifications  --}}

            <div>
              <div class="box mt-5 ">
                <input type="hidden" value="" id="hiddenQualifications" name="qualifications">
                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Qualifications</label> 

                  <ul  class=" max-w-md space-y-1 ms-2 list-disc  h-24 w-auto  list-inside dark:text-gray-400" id="qualificationsUl"  >
                      
                  </ul>
          <input  id='qualifications_input_box'  class="block  ms-2  w-32  p-2  text-sm text-gray-900 border border-gray-300 rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
          
          <button type="button" onclick="addQualifications()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mt-2 ms-2  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Qualifications</button>
                  
          
              </div>
          </div>
            {{-- qualifications  --}}

          <!--    Description      -->
          <div class=" mt-5">
            
<label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
<textarea  name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900  rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ></textarea>

          </div>

          <div class="flex flex-wrap -mx-3 mt-3">
            <!--     Company       -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
              <label for="company" class="block text-gray-700 text-sm mb-2">Company</label>
              <input type="text" name="companyName" class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" id="company" name="company" placeholder="Company">
            </div>

           
        
          </div> <!-- end group -->

          <!--      Company Website      -->
          <div class="mb-4 md:mb-0">
            <label for="job-image" class="block text-gray-700 text-sm mb-2" >Job Image</label>
            <input type="file" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3  px-8  mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="job-image" name="job_image">
          </div>

          <div class="mb-4 md:mb-0">
            <label for="company-logo" class="block text-gray-700 text-sm mb-2">Company Image</label>
            <input type="file" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3  px-8  mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="company-logo" name="company_logo">
          </div>
        </div> <!-- end job-info -->
        
     
        
        
        <!--     Submit     -->
        <div>
          <button class="bg-indigo-700 hover:bg-indigo-900 text-white py-2 px-3 rounded" type="submit">Create job</button>
        </div>
      </form>
    </div>
  </main>
  
  
  <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

  <script>
    let simpleMde = new SimpleMDE({
    element: document.getElementById("description")
  })




  // code to add category 
  let items = [];
let inputBox = document.getElementById('inputBox'); 

        function addItem(){

                
items.push(inputBox.value);
inputBox.value = "";
console.log(items.length)

let subCategory = document.getElementById('subCategory');
subCategory.value = "";
document.getElementById('display').innerHTML = "";
for(let i = 0 ; i < items.length ; i++){
    
    document.getElementById('display').innerHTML +=`<li>  ${items[i]}   </li>`;
    if(!i == 0){
      subCategory.value += ','
    }
    subCategory.value += items[i];
        
}
    }


    // code to add qualifications 

    let qualifications = [];
let inputBoxQualifications = document.getElementById('qualifications_input_box'); 
let hiddenQualifications = document.getElementById('hiddenQualifications');
        function addQualifications(){

                
          qualifications.push(inputBoxQualifications.value);
          inputBoxQualifications.value = " ";



// inputBoxQualifications.value = "";
document.getElementById('qualificationsUl').innerHTML = "";
for(let i = 0 ; i < qualifications.length ; i++){
    
    document.getElementById('qualificationsUl').innerHTML +=`<li>  ${qualifications[i]}   </li>`;
    if(!i == 0){
      qualifications.value += ','
    }
    hiddenQualifications.value += items[i];
        
}
    }

    

  </script>
@endsection




